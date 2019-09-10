<!DOCTYPE html>
<html lang="pl-PL" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php wp_head(); ?>
	
	<!-- Other Meta -->
	<meta charset='<?php bloginfo( 'charset' ); ?>'>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=2.0 user-scalable=yes" />
	<meta name="author" content="Salamanders Studio" />
	<meta name="web_author" content="Salamanders Studio" />
	<meta name="copyright" content="Copyright © <?php echo date('Y'); ?> <?php of_get_option('name'); ?>. All Rights Reserved" />
	
	<!-- Title and Description -->
	<title><?php bloginfo( 'name' ); ?> - <?php the_title(); ?></title>

	<!-- Canonical URL -->
	<link rel="canonical" href="<?php get_permalink(); ?>" />
	
	<!-- OG -->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $post_title ?>" />
	<meta property="og:image" content="<?php of_get_option('fb_img'); ?>"/>
	<meta property="og:url" content="<?php bloginfo( 'url' ); ?>" />
	
	<!-- Theme Color -->
	<meta name="theme-color" content="<?php of_get_option('meta_color','#fff'); ?>" />
	
	<!-- Theme Icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php of_get_option('browser_img'); ?>" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?php of_get_option('browser_img'); ?>" />
	<link rel="icon" type="image/png" sizes="72x72" href="<?php of_get_option('browser_img'); ?>" />
	<link rel="icon" type="image/png" sizes="96x96" href="<?php of_get_option('browser_img'); ?>" />
		
	<!-- 	CSS -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mmenu.css" />
</head>

<body id="webpage" class="no-scrolling">
	<div id="page">