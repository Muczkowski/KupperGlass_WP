<?php 
	/*
		Template Name: Strona główna (Open Page)
	*/
	include('header.inc.php');
	
	
	$intro = get_field('intro');
	$services = get_field('uslugi');
	$offer = get_field('uslugi', 117);
	$slider = get_field('uslugi', 117);
	// $newsSample = get_field('uslugi');
	$aboutUs = get_field('sekcja_1', 56);
	$coop = get_field('odbiorcy_uslug', 106);
	$gallery = get_field('realizacja', 113);
?>

	<div class="home">	
		<section class="home__intro">
			<div class="home__intro__img" style="background: url(<?php echo $intro['zdjecie_w_tle']['url']; ?>) no-repeat center center; background-size: cover;">
				<div class="home__intro" id="loader">
					<div class="sk-circle">
						<div class="sk-circle1 sk-child"></div>
						<div class="sk-circle2 sk-child"></div>
						<div class="sk-circle3 sk-child"></div>
						<div class="sk-circle4 sk-child"></div>
						<div class="sk-circle5 sk-child"></div>
						<div class="sk-circle6 sk-child"></div>
						<div class="sk-circle7 sk-child"></div>
						<div class="sk-circle8 sk-child"></div>
						<div class="sk-circle9 sk-child"></div>
						<div class="sk-circle10 sk-child"></div>
						<div class="sk-circle11 sk-child"></div>
						<div class="sk-circle12 sk-child"></div>
					</div>
				</div>
			</div>
			
			<div class="wrapper wrapper-wide">
				<div class="home__intro__text" v-scroll-reveal.reset>
					<span><?php echo $intro['tytul'] ?></span>
					
					<h1><?php echo $intro['podtytul'] ?></h1>
				</div>
				
				<div class="home__intro__video">
					<img class="home__intro__video__icon lazy fadeIn" data-src="<?php bloginfo('template_directory'); ?>/img/home/play-video.png" />
					<span class="home__intro__video__text">
						<?php echo $intro['tekst_przycisku'] ?>
					</span>
				</div>
			</div>
		</section>
	
		<section class="home__production">
			<div class="wrapper">
				<div class="row">
					<div class="col-lg-12 col-xl-9 home__production__content">
						
						<span class="home__production__headline">
							<?php echo $services['tytul'] ?>
						</span>
						
						<h1><?php echo $services['podtytul'] ?></h1>
						
						<div class="row">
						<?php
							$services_list = $services['uslugi_lista'];
							if($services_list) {
								foreach($services_list as $service) { ?>
									<div class="col-12 col-md-6">
										<div class="home__production__box">
											<div class="home__production__box__icon icon">
												<div>
													<img class="lazy fadeIn" data-src="<?php echo $service['ikona']['url']; ?>" />
												</div>
											</div>
												<h3><?php echo $service['tytul']; ?></h3>
											<div class="home__production__box__text">
												<p><?php echo $service['opis']; ?></p>
											</div>
										</div>
									</div>
							<?php }
							}
						?>
							
						</div>
					</div>
					
					<div class="col-lg-12 col-xl-3 home__production__img">
						<img src="<?php echo $services['zdjecie']['url']; ?>" />
					</div>
				</div>
			</div>
		</section>
		
		<?php include('tpl-parts/offer_slider.php'); ?>
			
		<section class="home__newsSample">
			<div class="wrapper">
				<div class="row">
					
					<?php
						$latest_news = array(
					        'post_type' => 'post',
							'post_status' => 'publish',
					        'paged' => $currentPage,
							'posts_per_page' => 1
					    ); 
					    
					    $the_query = new WP_Query( $latest_news );
					    
						while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						
						<div class="col-12 col-md-3"> 
							<span class="date">
								<?php the_date(); ?>
							</span>
							
							<h2><?php the_title(); ?></h2>
							
							<div class="home__newsSample__content">
								<p>
									<?php the_excerpt(__('(..)')); ?>
								</p>
							</div>
							
							<a href="<?php the_permalink() ?>">
								<button class="btn btn-blue">
									CZYTAJ WIĘCEJ
								</button>
							</a>
						</div>
					
					<div class="col-12 col-md-6 home__newsSample__image">
						<img class="lazy fadeIn desktop" data-src="<?php echo get_the_post_thumbnail_url(); ?>" />
						<img class="lazy fadeIn mobile" data-src="<?php echo get_the_post_thumbnail_url(); ?>" />
					</div>
					<?php 
						endwhile;
					?>
					
					<div class="col-12 col-md-3">
						<h3>
							Rozwijamy się!</br>
							Nasze nowe biuro w Gdańsku
						</h3>
						
						<span class="date">
							15.06.2019
						</span>
						
						<div class="home__newsSample__content">
							<p>
								Curabitur vulputate arcu odio, ac facilisis diam accumsan ut. Ut imperdiet et leo in vulputate. Sed eleifend lacus eu sapien sagittis imperdiet. Etiam tempor mollis augue, ut tincidunt ex interdum eu. 
							</p>
						</div>
						
						<a href="" class="home__newsSample__moreLink">
							PRZECZYTAJ PEŁNY ARTYKUŁ
						</a>
					</div>
				</div>				
			</div>
		</section>

		<section class="aboutUs-intro home__aboutUs-intro">
			<div class="wrapper-wide aboutUs-intro__bg">
				<div class="row">
					<div class="col-12 col-lg-6 aboutUs-intro__bg__blue"></div>
					<div class="col-12 col-lg-6 aboutUs-intro__bg__white"></div>
				</div>
			</div>
			
			<div class="wrapper-wide">
				<div class="row">
					<div class="col-12 col-lg-7 aboutUs-intro__image">
						<img class="lazy fadeIn" data-src="<?php $aboutUs_pic = $aboutUs['zdjecie']; echo $aboutUs_pic['url'] ?>" />
					</div>
					<div class="col-12 col-lg-5 aboutUs-intro__text">
						
						<div class="aboutUs-intro__text__title">
							<span><?php echo $aboutUs['tytul']; ?></span>
							<h1><?php echo $aboutUs['podtytul']; ?></h1>
						</div>
						
						<p>
							<?php echo $aboutUs['tekst']; ?>
						</p>
						
						<button class="btn btn-blue">poznaj nas</button>
					</div>
				</div>
			</div>
		</section>
			
		<?php include('tpl-parts/coop.php'); ?>
		
		<section class="gallery">
			<div class="wrapper-wide">
				<div class="row">
					<div class="col col-12 col-lg-6 gallery__box gallery__box-big">
    					    <div class="gallery__box__inner" style="background: url(<?php echo $gallery[0]['galeria']['0']['url']; ?>) no-repeat center center; background-size: cover; ">
    					    </div>
					</div>
					
					<div class=" col col-12 col-lg-6 gallery-right">
						<div class="row">
							
							<?php
								if( have_rows('realizacja', 113) ): ?>
									<?php
										$counter = 0;
										$max = 3;
										
									    while (have_rows('realizacja', 113) and ($counter < $max) ) : the_row(); 
										$gallery = get_sub_field('galeria');
									    ?>
							
										<div class="col col-12 col-md-6 gallery__box gallery__box-small">
    										    <div class="gallery__box__inner" style="background: url(<?php echo $gallery[0][url]; ?>) no-repeat center center; background-size: cover; ">
        										    
        										    <div class="gallery__box__popup popup">
        												<div class="gallery__box__popup__inner">
        													<div class="row">
        														<div class="col col-12 gallery__box__popup__inner__plus">
        														</div>
        														<div class="col col-12 gallery__box__popup__inner__title">
        															<div>
        																<span>klient</span>
        																<h4 class=""><?php the_sub_field('nazwa_realizacji'); ?></h4>
        															</div>
        														</div>
        													</div>
        												</div>
        											</div>
                                            </div>
										</div>
									<?php
										$counter++;
								    	endwhile;
									else :
								endif;
							?>
							
							<div class="col col-12 col-md-6 gallery__box gallery__box-small">
								<div class="gallery__box__inner gallery__box__inner-more">
									<div class="row">
										<div class="col col-12">
											<span class="gallery__box__text__headline">
												Zobacz cała galerię
												tej realizacji
											</span>
										</div>
										<div class="col col-12 gallery__box__text__button">
											<a href="/realizacje">
												<button class="btn">zobacz</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	
<?php include('footer.inc.php') ?>