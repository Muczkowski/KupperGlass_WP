<?php 
	/*
	 Template Name: Realizacje
	 */
include('header.inc.php') ?>
	<section class="realizations">
		<div class="wrapper">
			<h1 class="title">Nasze realizacje</h1>
			

			<?php
				if( have_rows('realizacja') ): ?>
					<?php
						$a = 1;
						
					    while ( have_rows('realizacja') ) : the_row(); 
						$gallery = get_sub_field('galeria');
					    ?>
						<div class="realizations__example">
							<div class="row">
								<div class="col-12 col-md-8 col realizations__example__box">
									<div class="realizations__example__box__image">
										<img src="<?php echo $gallery[0][url]; ?>" />
										<div class="realizations__example__box__title">
											<span>klient</span>
											<h2><?php the_sub_field('nazwa_realizacji'); ?></h2>
										</div>
									</div>
								</div>
								
								<div class="col-12 col-md-4 col">
									<div class="row">
										<div class="col-12 col-sm-6 col-md-12 realizations__example__box-small">
											<div class="realizations__example__box__image">
												<img src="<?php echo $gallery[1][url]; ?>" />
											</div>
										</div>
										
										<div class="col-12 col-sm-6 col-md-12 realizations__example__box realizations__example__box-small">
											<div class="realizations__example__box__text">
												<div class="row">
													<div class="col-12">
														<span class="realizations__example__box__text__headline">
															Zobacz cała galerię
															tej realizacji
														</span>
													</div>
													<div class="col-12 realizations__example__box__text__button">
														<button class="btn" id="btn-modal-<?php echo $a ?>">zobacz</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
						<?php
						$a++;
						
				    	endwhile;
					else :
				endif;
			?>
			
			<div class="col-12 hcen_items realizations__more">
				<button class="btn btn-outline">wczytaj więcej</button>
			</div>
		</div>
	</section>
	
	
	
	<?php
		if( have_rows('realizacja') ): ?>
			<?php
				$c = 1;
			    while ( have_rows('realizacja') ) : the_row(); 
			    ?>
				<div class="modal" style="display: none;" id="modal-<?php echo $c ?>">
				  	<div class="modal__content">
						<div class="modal__content__exit" id="exit-<?php echo $c ?>">
							<img src="<?php bloginfo('template_directory'); ?>/img/global/modal/exit.svg" />
						</div>
						
						<div class="row">
							<div class="col-12 col-md-7">
								<div class="row">
									<div class="col-12 modal__preview">
										<?php
											$gallery = get_sub_field('galeria');
											$d = 0;
											foreach($gallery as $slide) { ?>
												<div class="modal__preview__img" style="background: url(<?php echo $gallery[$a]['url']; ?>) no-repeat center center; background-size: cover;"></div>
											<?php
											$d++;
											}
										?>
									</div>
									<div class="col-12 modal__thumb">
										<?php
											$d = 0;
											foreach($gallery as $slide) { ?>
												<div class="modal__thumb__img" style="background: url(<?php echo $gallery[$a]['url']; ?>) no-repeat center center; background-size: cover;"></div>
											<?php
											$d++;
											}
										?>
									</div>
								</div>
						  	</div>
						  	
							<div class="col-12 col-md-5">
								
							
								<div class="modal__content__text">
									<span class="modal__content__text__title">klient</span>
									<h3 class="modal__content__text__title-h3">
										<?php the_sub_field('nazwa_realizacji'); ?>
									</h3>
									
									<div class="modal__content__text__desc"><p><?php the_sub_field('opis_realizacji'); ?></p></div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			<?php
				$c++;
		    	endwhile;
			else :
		endif;
	?>
<?php include('footer.inc.php') ?>