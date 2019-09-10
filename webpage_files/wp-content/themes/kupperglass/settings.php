<ul class="tabs">
	<li id="tpl" class="active"><a href="#tpl"><?php i18n('theme_settings/THEME_TITLE'); ?></a></li>
	<li id="seo"><a href="#seo"><?php i18n('theme_settings/SEO_TITLE'); ?></a></li>
	<li id="sm"><a href="#sm"><?php i18n('theme_settings/SM_TITLE'); ?></a></li>
	<li id="contact"><a href="#contact"><?php i18n('theme_settings/CONTACT_TITLE'); ?></a></li>
	<li id="programmer"><a href="#programmer"><?php i18n('theme_settings/PROGRAMMER_TITLE'); ?></a></li>
</ul>

<ul class="tab__content">
	<li class="active">
		<div class="content__wrapper">
			<h2><?php i18n('theme_settings/THEME_TITLE'); ?></h2>
			<h3><?php i18n('theme_settings/THEME_DESC'); ?></h3>
			
			<hr>
			<h3><?php i18n('theme_settings/LOGO_TITLE'); ?>:</h3>
			
			<div class="grid">
				<div class="leftsec">
					<p>
						<label for="logo_img"><?php i18n('theme_settings/MAIN_LOGO'); ?>:</label><br>
						<input type="text" name="logo_img" id="logo_img" class="text file" value="<?php get_theme_setting('logo_img'); ?>" placeholder="<?php i18n('theme_settings/CHOOSE_PLACEHOLDER'); ?>"/>
						<a href="<?php echo $SITEURL; ?>/../plugins/responsivefilemanager/dialog.php?type=0&lang=pl&field_id=logo_img&akey=bce94f94426497ba5e669a705c186f12" id="browser-image" class="button-gray file rfm-button" type="button" type="button"><?php i18n('theme_settings/CHOOSE'); ?></a>
					</p>
					
					<p>
					    <label for="logo_mobile"><?php i18n('theme_settings/MOBILE_LOGO'); ?>:</label><br>
						<input type="text" name="logo_mobile" id="logo_mobile"  class="text file" value="<?php get_theme_setting('logo_mobile'); ?>" placeholder="<?php i18n('theme_settings/CHOOSE_PLACEHOLDER'); ?>"/>
						<a href="<?php echo $SITEURL; ?>/../plugins/responsivefilemanager/dialog.php?type=0&lang=pl&field_id=logo_mobile&akey=bce94f94426497ba5e669a705c186f12" id="browser-image" class="button-gray file rfm-button" type="button" type="button"><?php i18n('theme_settings/CHOOSE'); ?></a>
					</p>
				</div>
				
				<div class="rightsec">
					<p>
					    <label for="browser_img "><?php i18n('theme_settings/FAV_ICON'); ?>:</label><br>
						<input type="text" name="browser_img" id="browser_img" class="text file" value="<?php get_theme_setting('browser_img'); ?>" placeholder="<?php i18n('theme_settings/CHOOSE_PLACEHOLDER'); ?>"/>
						<a href="<?php echo $SITEURL; ?>/../plugins/responsivefilemanager/dialog.php?type=0&lang=pl&field_id=browser_img&akey=bce94f94426497ba5e669a705c186f12" id="browser-image" class="button-gray file rfm-button" type="button" type="button"><?php i18n('theme_settings/CHOOSE'); ?></a>
					</p>
				</div>
			</div>
			
			<hr>
			
			<h3><?php i18n('theme_settings/COLORS_TITLE'); ?>:</h3>
			
			<div class="grid">
				
				<div class="leftsec">
					<label for="meta_color"><?php i18n('theme_settings/THEME_COLOR'); ?>:</label><br>
					
					<div id="colorSelector">
						<div name="meta_color" id="meta_color" style="background: <?php get_theme_setting('meta_color','#000'); ?>"></div>
					</div>
					
					<input type="text" class="text color" name="meta_color" id="meta_color" value="<?php get_theme_setting('meta_color'); ?>">
				</div>
				
				
				<div class="rightsec">
				</div>
			</div>
			
		</div>
	</li>
	<li>
		<div class="content__wrapper">
			<h2><?php i18n('theme_settings/SEO_TITLE'); ?></h2>
			<h3><?php i18n('theme_settings/SEO_DESC'); ?></h3>
			
			<hr>
			
			<h3><?php i18n('theme_settings/META_TITLE'); ?>:</h3>
			<div class="grid">
				<div class="leftsec">
					<p>
						<label for="meta_title"><?php i18n('theme_settings/SITE_TITLE'); ?>:</label>
						<input type="text" class="text" name="meta_title" id="meta_title" placeholder="Nazwa lub naziwsko" value="<?php get_theme_setting('meta_title'); ?>">
					</p>
					
					<p>
						<label for="meta_desc"><?php i18n('theme_settings/META_DESC'); ?>:</label>
						<textarea style="height: 50px;" type="text" class="text" name="meta_desc" id="meta_desc"><?php get_theme_setting('meta_desc'); ?></textarea>
					</p>
					
					<p>
						<label for="meta_keywords"><?php i18n('theme_settings/META_KEYWORDS'); ?>:</label>
						<input type="text" class="text" name="meta_keywords" id="meta_keywords" placeholder="Strona wizytówkowa, informacje, kontakt" value="<?php get_theme_setting('meta_keywords'); ?>">
					</p>
				</div>
				
				<div class="rightsec">
					<p>
					    <label for="meta_abstract"><?php i18n('theme_settings/META_ABSTRACT'); ?>:</label><br>
					    <input type="text" class="text" name="meta_abstract" id="meta_abstract" placeholder="Strona informacyjna firmy Kowalskiego, nieruchomości." value="<?php get_theme_setting('meta_abstract'); ?>">
					</p>
				</div>
			</div>
			
			<p><i class="fas fa-info-circle"></i> <?php i18n('theme_settings/META_INFO'); ?></p>
			
			<hr>
			
			<h3><?php i18n('theme_settings/SITEMAP_TITLE'); ?>:</h3>
			
			<p>
				<a href="<?php echo $SITEURL; ?>/sitemap.xml" ><?php i18n('theme_settings/BROWSE_MAP'); ?></a>
			</p>
			
		</div>
	</li>
	<li>
		<div class="content__wrapper">
			
			<h2><?php i18n('theme_settings/SM_TITLE'); ?></h2>
			<h3><?php i18n('theme_settings/SM_DESC'); ?></h3>
			
			<hr>
			
			<?php
				function get_custom_size_img($url, $w, $h) {
					global $SITEURL;
					$prefix=''.$SITEURL.'data/uploads/';
					
					if (strpos($url, $prefix) === 0) {
						$result = substr($url, strlen($prefix));
						echo ''.$SITEURL.'plugins/i18n_gallery/browser/pic.php?p='.$result.'&w='.$w.'&h='.$h;
					} else {
						$result = $url;
						echo $result;
					}
				}
			?>
			
			<p>
			</p>
			
			<h3><?php i18n('theme_settings/URL_TITLE'); ?>:</h3>
			<div class="grid">
				<div class="leftsec">
					<p>
				   		<label for="fb_url"><?php i18n('theme_settings/URL_FACEBOOK'); ?>:</label>
					    <input type="text" class="text" name="fb_url" id="fb_url" placeholder="http://www..."  value="<?php get_theme_setting('fb_url'); ?>">
					</p>
				
					<p>
					    <label for="inst_url"><?php i18n('theme_settings/URL_INSTAGRAM'); ?>:</label>
					    <input type="text" class="text" name="inst_url" id="inst_url" placeholder="http://www..." value="<?php get_theme_setting('inst_url'); ?>">
					</p>
				
					<p>
					    <label for="twit_url"><?php i18n('theme_settings/URL_TWITTER'); ?>:</label>
					    <input type="text" class="text" name="twit_url" id="twit_url" placeholder="http://www..." value="<?php get_theme_setting('twit_url'); ?>">
					</p>
				</div>
				
				<div class="rightsec">
					<p>
					    <label for="gogl_url"><?php i18n('theme_settings/URL_GOOGLE'); ?>:</label>
					    <input type="text" class="text" name="gogl_url" id="gogl_url" placeholder="http://www..." value="<?php get_theme_setting('gogl_url'); ?>">
					</p>
					
					<p>
					    <label for="yt_url"><?php i18n('theme_settings/URL_YOUTUBE'); ?>:</label>
					    <input type="text" class="text" name="yt_url" id="yt_url" placeholder="http://www..." value="<?php get_theme_setting('yt_url'); ?>">
					</p>
				</div>
			</div>
			<p><i class="fas fa-info-circle"></i> <?php i18n('theme_settings/URL_INFO'); ?></p>
			<hr>
			
			<h3><?php i18n('theme_settings/BANNER_TITLE'); ?>:</h3>
			<p>
			    <label for="fb_img"><?php i18n('theme_settings/BANNER_DESC'); ?>:</label><br>
			    <input type="text" name="fb_img" id="fb_img" class="text file" value="<?php get_theme_setting('fb_img'); ?>" placeholder="<?php i18n('theme_settings/CHOOSE_PLACEHOLDER'); ?>"/>
				<a href="<?php echo $SITEURL; ?>/../plugins/responsivefilemanager/dialog.php?type=0&lang=pl&field_id=fb_img&akey=bce94f94426497ba5e669a705c186f12" id="browser-image" class="button-gray file rfm-button" type="button" type="button"><?php i18n('theme_settings/CHOOSE'); ?></a>
			</p>
			<p><i class="fas fa-info-circle"></i> <?php i18n('theme_settings/BANNER_INFO'); ?></p>
		</div>
	</li>
	<li>
		<div class="content__wrapper">
			<h2><?php i18n('theme_settings/CONTACT_TITLE'); ?></h2>
			<h3><?php i18n('theme_settings/CONTACT_DESC'); ?></h3>
			
			<hr>
			<div class="grid">
				<div class="leftsec">
					<p>
					    <label for="name"><?php i18n('theme_settings/CONTACT_NAME'); ?>:</label><br>
					    <input type="text" class="text" name="name" id="name" placeholder="Jan Kowalski - nieruchomości" value="<?php get_theme_setting('name'); ?>">
					</p>
					<p>
					    <label for="mail"><?php i18n('theme_settings/CONTACT_MAIL'); ?>:</label><br>
					    <input type="email" class="text" name="mail" id="mail" placeholder="...@..." value="<?php get_theme_setting('mail'); ?>">
					</p>
				</div>
				
				<div class="rightsec">
					<p>
						<label for="phone"><?php i18n('theme_settings/CONTACT_PHONE'); ?>:</label><br>
						<input type="phone" class="text" name="phone" id="phone" placeholder="+48 /// /// ///" value="<?php get_theme_setting('phone'); ?>">
					</p>
					<p>
					    <label for="address"><?php i18n('theme_settings/CONTACT_ADDRESS'); ?>:</label><br>
					    <input type="text" class="text" name="address" id="address" placeholder="ul. Kowalskiego, Warszawa" value="<?php get_theme_setting('address'); ?>">
					</p>
				</div>
			</div>
			
			<p><i class="fas fa-info-circle"></i> <?php i18n('theme_settings/CONTACT_INFO'); ?></p>
		</div>
	</li>
	<li>
		<div class="content__wrapper">
			<h2><?php i18n('theme_settings/PROGRAMMER_TITLE'); ?></h2>

			<h3><?php i18n('theme_settings/PROGRAMMER_DESC'); ?></h3>
			<p><i class="fas fa-info-circle"></i> <?php i18n('theme_settings/PROGRAMMER_INFO'); ?></p>
						
			<hr>
			
			<span class="edit-nav">
				<a class="btn" href="/s-cms/load.php?id=maintenancemode" type="button">
					<?php i18n('theme_settings/MAINTANANCE_TITLE'); ?>
				</a>
			</span>

			<h3><?php i18n('theme_settings/MAINTANANCE_DESC'); ?></h3>
			<br>
				<p>
					<label for="upd_logo"><?php i18n('theme_settings/MAINTANANCE_LOGO'); ?></label>
					<input type="text" name="upd_logo" id="upd_logo" class="text file" value="<?php get_theme_setting('upd_logo'); ?>" placeholder="<?php i18n('theme_settings/CHOOSE_PLACEHOLDER'); ?>"/>
					<a href="<?php echo $SITEURL; ?>/../plugins/responsivefilemanager/dialog.php?type=0&lang=pl&field_id=upd_logo&akey=bce94f94426497ba5e669a705c186f12" id="browser-image" class="button-gray file rfm-button" type="button" type="button"><?php i18n('theme_settings/CHOOSE'); ?></a>
				</p>
					
			<hr>
			
			<div class="leftsec">
				<h3><?php i18n('theme_settings/PLUGINS_TITLE'); ?>:</h3>
<!-- 				<p><i class="fas fa-info-circle"></i> <?php i18n('theme_settings/SAVE'); ?></p> -->
				<p>
					<label for="jquery">jQuery</label>
					<input type="checkbox" name="jquery" id="jquery" <?php get_theme_setting('jquery'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('jquery'); ?>" id="jquery" name="jquery">
				
<!--
				<p>
					<label for="masonry">Masonry</label>
					<input type="checkbox" name="masonry" id="masonry" <?php get_theme_setting('masonry'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('masonry'); ?>" id="masonry" name="masonry">
				
				<p>
					<label for="flickity">Flickity</label>
					<input type="checkbox" name="flickity" id="flickity" <?php get_theme_setting('flickity'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('flickity'); ?>" id="flickity" name="flickity">
			
				<p>
					<label for="scrollreveal">ScrollReveal</label>
					<input type="checkbox" name="scrollreveal" id="scrollreveal" <?php get_theme_setting('scrollreveal'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('scrollreveal'); ?>" id="scrollreveal" name="scrollreveal">
			
				<p>
					<label for="textillate">Textillate</label>
					<input type="checkbox" name="textillate" id="textillate" <?php get_theme_setting('textillate'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('textillate'); ?>" id="textillate" name="textillate">
			
				<p>
					<label for="prettysocial">PrettySocial</label>
					<input type="checkbox" name="prettysocial" id="prettysocial" <?php get_theme_setting('prettysocial'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('prettysocial'); ?>" id="prettysocial" name="prettysocial">
			
				<p>
					<label for="fluidbox">FluidBox</label>
					<input type="checkbox" name="fluidbox" id="fluidbox" <?php get_theme_setting('fluidbox'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('fluidbox'); ?>" id="fluidbox" name="fluidbox">
			
				<p>
					<label for="sticky_sdb">Sitcky Sidebar</label>
					<input type="checkbox" name="sticky_sdb" id="sticky_sdb" <?php get_theme_setting('sticky_sdb'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('sticky_sdb'); ?>" id="sticky_sdb" name="sticky_sdb">
			
				<p>
					<label for="sticky_ft">Sitcky Footer</label>
					<input type="checkbox" name="sticky_ft" id="sticky_ft" <?php get_theme_setting('sticky_ft'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('sticky_ft'); ?>" id="sticky_ft" name="sticky_ft">
				
				<p>
					<label for="classie">Classie</label>
					<input type="checkbox" name="classie" id="classie" <?php get_theme_setting('classie'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('classie'); ?>" id="classie" name="classie">
				
				<p>
					<label for="singlepagenav">Single Page Nav</label>
					<input type="checkbox" name="classie" id="singlepagenav" <?php get_theme_setting('singlepagenav'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('singlepagenav'); ?>" id="singlepagenav" name="singlepagenav">
			
			
-->
			</div>
			<div class="rightsec">
				<h3>Fonty:</h3>
				
				<p>
					<label for="fontawesome">Font Awesome</label>
					<input type="checkbox" name="fontawesome" id="fontawesome" <?php get_theme_setting('fontawesome'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('fontawesome'); ?>" id="fontawesome" name="fontawesome">
<!--
				
				<p>
					<label for="opensans">Open Sans</label>
					<input type="checkbox" name="opensans" id="opensans" <?php get_theme_setting('opensans'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('opensans'); ?>" id="opensans" name="opensans">
				
				<p>
					<label for="lato">Lato</label>
					<input type="checkbox" name="lato" id="lato" <?php get_theme_setting('lato'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('lato'); ?>" id="lato" name="lato">
				
				<p>
					<label for="oldstandardtt">Old Standard TT</label>
					<input type="checkbox" name="oldstandardtt" id="oldstandardtt" <?php get_theme_setting('oldstandardtt'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('oldstandardtt'); ?>" id="oldstandardtt" name="oldstandardtt">
				
				<p>
					<label for="abrilfatface">Abril Fatface</label>
					<input type="checkbox" name="abrilfatface" id="abrilfatface" <?php get_theme_setting('abrilfatface'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('abrilfatface'); ?>" id="abrilfatface" name="abrilfatface">
				
				<p>
					<label for="ptserif">PT Serif</label>
					<input type="checkbox" name="ptserif" id="ptserif" <?php get_theme_setting('ptserif'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('ptserif'); ?>" id="ptserif" name="ptserif">
				
				<p>
					<label for="ubuntu">Ubuntu</label>
					<input type="checkbox" name="ubuntu" id="ubuntu" <?php get_theme_setting('ubuntu'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('ubuntu'); ?>" id="ubuntu" name="ubuntu">
				
				<p>
					<label for="vollkorn">Vollkorn</label>
					<input type="checkbox" name="vollkorn" id="vollkorn" <?php get_theme_setting('vollkorn'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('vollkorn'); ?>" id="vollkorn" name="vollkorn">
				
				<p>
					<label for="droid">Droid</label>
					<input type="checkbox" name="droid" id="droid" <?php get_theme_setting('droid'); ?>>
				</p>
				<input type="hidden" value="<?php get_theme_setting('droid'); ?>" id="droid" name="droid">
				
-->
<!--
				<p>
					<label for="custom_font">Własne czcionki:</label>
					<textarea style="height: 80px" type="text" name="custom_font" id="custom_font" placeholder='&lt;link href="https://fonts.googleapis.com/css?family=MyFont" rel="stylesheet"&gt;'><?php get_theme_setting('custom_font'); ?></textarea>
				</p>
-->
			</div>
			
		</div>
	</li>
</ul>

<script>
    
jQuery('.rfm-button').fancybox({		
	'width'		: 900,	
	'height'	: 600,	
	'type'		: 'iframe',	
	'autoScale'    	: false	
});
	
$('#meta_color').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		$('#colorSelector div').css('backgroundColor', '#' + hex);
		$('input#meta_color').val('#' + hex);
	}
});
	
$(document).ready(function(){
	// Variables
	var clickedTab = $(".tabs > .active");
	var tabWrapper = $(".tab__content");
	var activeTab = tabWrapper.find(".active");
	var activeTabHeight = activeTab.outerHeight();
	
	// Show tab on page load
	activeTab.show();
	
	// Set height of wrapper on page load
	tabWrapper.height(activeTabHeight);
	
	if(window.location.hash) {
		var hash = window.location.hash;
		
		$(".tabs > li").removeClass("active");
		$(hash).addClass("active");
		
		// Update clickedTab variable
		clickedTab = $(".tabs .active");
		
		// fade out active tab
		activeTab.fadeOut(250, function() {
			
			// Remove active class all tabs
			$(".tab__content > li").removeClass("active");
			
			// Get index of clicked tab
			var clickedTabIndex = clickedTab.index();

			// Add class active to corresponding tab
			$(".tab__content > li").eq(clickedTabIndex).addClass("active");
			
			// update new active tab
			activeTab = $(".tab__content > .active");
			
			// Update variable
			activeTabHeight = activeTab.outerHeight();
			
			// Animate height of wrapper to new tab height
			tabWrapper.stop().delay(0).animate({
				height: activeTabHeight
			}, 100, function() {
				
				// Fade in active tab
				activeTab.delay(0).fadeIn(150);
				
			});
		});

	};
	
	$(".tabs > li").on("click", function() {
		
		
	    var contentPanelId = $(this).attr("id");
	    $('form').attr('action', 'load.php?id=theme_settings#' + contentPanelId);
	    
		
		// Remove class from active tab
		$(".tabs > li").removeClass("active");
		
		// Add class active to clicked tab
		$(this).addClass("active");
		
		// Update clickedTab variable
		clickedTab = $(".tabs .active");
		
		// fade out active tab
		activeTab.fadeOut(250, function() {
			
			// Remove active class all tabs
			$(".tab__content > li").removeClass("active");
			
			// Get index of clicked tab
			var clickedTabIndex = clickedTab.index();

			// Add class active to corresponding tab
			$(".tab__content > li").eq(clickedTabIndex).addClass("active");
			
			// update new active tab
			activeTab = $(".tab__content > .active");
			
			// Update variable
			activeTabHeight = activeTab.outerHeight();
			
			// Animate height of wrapper to new tab height
			tabWrapper.stop().delay(0).animate({
				height: activeTabHeight
			}, 100, function() {
				
				// Fade in active tab
				activeTab.delay(0).fadeIn(150);
				
			});
		});
	});
	
	$('#sidebar').append('<div id="js_submit_line"></div>'); 
    $('.submit').clone().appendTo('#js_submit_line');
    $('#sidebar .submit').click(function() { $('#submitline input.submit').trigger('click'); });
	
	$('input[type=checkbox]').click(function() {
		id = $(this).attr('id');
		if ($(this).is(':checked')) {
			$('input[type=hidden]#' + id).val('checked');
		} else {
			$('input[type=hidden]#' + id).val('');
		}
		
// 		$('textarea')[this.checked ? "show" : "hide"]();
	});
	
	// 	Aktualizacja obrazka po zmianie inputa (nie działa na przycisk <?php i18n('theme_settings/CHOOSE'); ?>)
/*
	const $source = document.querySelector('#logo_img');
	const $result = document.querySelector('#img');
	const typeHandler = function(e) {
	  e.target.value = e.target.value.replace('<?php global $SITEURL; echo $SITEURL; ?>data/uploads/', '/');
	  $result.innerHTML = '<img src=https://forking.salamanders.pl/plugins/i18n_gallery/browser/pic.php?p=' + e.target.value + '&w=100&h=100 />';
	}
	
	$source.addEventListener('input', typeHandler) // register for oninput
	$source.addEventListener('propertychange', typeHandler) // for IE8
	$source.addEventListener('change', typeHandler) // fallback for Firefox for <select><option>, for <input> oninput is enough
*/
});
</script>