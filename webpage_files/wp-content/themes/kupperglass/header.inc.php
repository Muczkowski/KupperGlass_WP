<?php include('meta.php'); 	
	global $post;
	$post_slug = $post->post_name;
    	
    if ( is_user_logged_in() ) { ?>
    <style>
        header#desktop {
            top: 32px !important;
        }
    </style>
<?php } ?>

	<header id="mobile" class="header">
		<div class="wrapper">
			<a href="#m_menu" class="m_menu"><span></span></a>
			
			<a href="<?php get_site_url(); ?>" class="logo">
				<img class="logo"
					src="<?php echo of_get_option('logo_img'); ?>"
					alt="<?php echo $page_title; ?>"
				/>
			</a>
			
			<div class="button">
			</div>
			
			<ul class="header__icons">
				<li>
					<a href="#">
						<i class="fab fa-instagram"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fab fa-facebook-square"></i>
					</a>
				</li>
			</ul>
		</div>
	</header>

	<main class="<?php echo $post_slug; ?>">
		<div id="content" data-sticky-wrap>
			<header id="desktop" class="header">
				<div id="nav" class="desktop <?php if(is_front_page()) { ?> transparent<?php } ?>">
					<div class="wrapper wrapper-wide">
						<div class="logo">
							<a href="/" class="logo">
							</a>
						</div>
						<nav>
							<?php 
								$headNav = array(
								    'sort_column' => 'menu_order',
								    'level' => 0,
								    'theme_location' => 'header_nav'
								);
								
								wp_nav_menu( $headNav );
							?>
						</nav>
						<ul class="header__icons">
							<li>
								<a href="#">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-facebook-square"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</header>