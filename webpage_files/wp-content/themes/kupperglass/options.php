<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */
function optionsframework_option_name() {
	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
	// echo $themename;
}
/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */
function optionsframework_options() {
	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);
	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);
	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);
	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );
	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );
	// Typography Options
	$typography_options = array(
		'sizes' => array( '12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue', 'georgia' => 'Georgia' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);
	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}
	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}
	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';
	$options = array();
	$options[] = array(
		
		
// 		SZABLON STRONY
		'name' => __('Szablon strony', 'options_check'),
		'type' => 'heading');
	$options[] = array(
		'name' => __('Logo', 'options_check'),
		'desc' => __('Logo główne strony', 'options_check'),
		'id' => 'logo_img',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Logo w stopce', 'options_check'),
		'desc' => __('Logo wyświetlane w stopce', 'options_check'),
		'id' => 'logo_footer',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Ikona karty', 'options_check'),
		'desc' => __('Ikona favicon', 'options_check'),
		'id' => 'favicon',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Kolor główny', 'options_check'),
		'desc' => __('Kolor motywu (widoczny na komórkach)', 'options_check'),
		'id' => 'meta_color',
		'type' => 'color');
	$options[] = array(
		'name' => __('Kanały i strony', 'options_check'),
		'type' => 'heading');
	$options[] = array(
		'name' => __('Facebook', 'options_check'),
		'desc' => __('Url strony', 'options_check'),
		'id' => 'fb_url',
		'type' => 'text');
	$options[] = array(
		'name' => __('Google', 'options_check'),
		'desc' => __('Url strony', 'options_check'),
		'id' => 'fb_url',
		'type' => 'text');
	$options[] = array(
		'name' => __('Instagram', 'options_check'),
		'desc' => __('Url strony', 'options_check'),
		'id' => 'fb_url',
		'type' => 'text');
	$options[] = array(
		'name' => __('Baner Facebook', 'options_check'),
		'desc' => __('Dodaj grafikę wielkości <strong>1200px</strong> x <strong>628px</strong>:', 'options_check'),
		'id' => 'fb_img',
		'type' => 'upload');
		
// 		DANE FIRMY
	$options[] = array(
		'name' => __('Dane firmy', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Nazwa lub nazwisko', 'options_check'),
		'desc' => __('"Jan Kowalski - Nieruchomości"', 'options_check'),
		'id' => 'name',
		'type' => 'text');
	$options[] = array(
		'name' => __('Adres firmy', 'options_check'),
		'id' => 'address',
		'type' => 'text');
	$options[] = array(
		'name' => __('KRS', 'options_check'),
		'id' => 'krs',
		'type' => 'text');
	$options[] = array(
		'name' => __('NIP', 'options_check'),
		'id' => 'nip',
		'type' => 'text');
	$options[] = array(
		'name' => __('REGON', 'options_check'),
		'id' => 'regon',
		'type' => 'text');
		
// 		BIURO
	$options[] = array(
		'name' => __('Biuro', 'options_check'),
		'type' => 'heading');
	$options[] = array(
		'name' => __('Adres biura', 'options_check'),
		'id' => 'ofc_address',
		'type' => 'text');
	$options[] = array(
		'name' => __('Adres e-mail', 'options_check'),
		'id' => 'ofc_mail',
		'type' => 'text');		
	$options[] = array(
		'name' => __('Telefon biurowy', 'options_check'),
		'id' => 'ofc_phone',
		'type' => 'text');
		
// 		PRODUKCJA
	$options[] = array(
		'name' => __('Produkcja', 'options_check'),
		'type' => 'heading');
		
	
	$options[] = array(
		'name' => __('Adres miejsca produkcji', 'options_check'),
		'id' => 'prod_address',
		'type' => 'text');
	$options[] = array(
		'name' => __('Adres e-mail', 'options_check'),
		'id' => 'prod_mail',
		'type' => 'text');		
	$options[] = array(
		'name' => __('Telefon', 'options_check'),
		'id' => 'prod_phone',
		'type' => 'text');
	return $options;
}