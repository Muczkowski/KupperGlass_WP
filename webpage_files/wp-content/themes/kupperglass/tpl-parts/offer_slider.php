<?php $offer = get_field('sekcja_3', 117); ?>

<section class="home__offer">
	<div class="wrapper">
		<div class="row home__offer__bg">
			<div class="col-12 home__offer__bg__blue">
				<div class="home__offer__bg__blue__controls">
					<button class="home__offer__bg__blue__controls__flckLeft" id="flk_left" @click="flkyLeft()">
						<img src="<?php bloginfo('template_directory'); ?>/img/slider/flk-left.svg" />
					</button>
					
					<div class="home__offer__bg__blue__controls__pagination">
						<?php $i = 0; ?>
							<span>0<?php echo $i+1 ?></span>
							<div class="home__offer__bg__blue__controls__pagination__track">
							<?php
								$works_pag = get_field('realizacja', 113);
								if($works_pag) {
									 ?>
									<?php 
									foreach($works_pag as $slide) { 
										if($i == 0) { ?>
										<button class="pag is-selected"></button>
										<?php } else { ?>
										<button class="pag"></button>
										<?php }
										$i++;
									}
								} 
							?>
							</div>
							<span>0<?php echo $i ?></span>
							
							<style>
								.pag {
									width: <?php echo 100/$i ?>%;
								}
							</style>
					</div>
					
					<button class="home__offer__bg__blue__controls__flckRight" id="flk_right" @click="flkyRight()">
						<img src="<?php bloginfo('template_directory'); ?>/img/slider/flk-right.svg" />
					</button>
				</div>
					
				<div class="home__offer__bg__blue__rect rect">
					<span class="home__offer__bg__blue__rect__number rect__number">7</span>
					<span class="home__offer__bg__blue__rect__text rect__text">rodzajów szkła</span>
				</div>
			</div>
		</div>
		
		<div class="row home__offer__content">
			<div class="col-12 col-md-4">
				<span class="home__offer__headline">
					<?php echo $offer['tytul']; ?>
				</span>
				<h2>
					<?php echo $offer['podtytul']; ?>
				</h2>
				<p>
					<?php echo $offer['tresc']; ?>
				</p>
				
				<a href="/">
					<button class="btn btn-white">
						sprawdź ofertę
					</button>
				</a>
			</div>
			
			<div class="col-12 col-md-8" style="position: relative;">
			
                <flickity ref="flickity" :options="offerSlider" class="home__offer__slider">
					<?php
						$works_imgs = get_field('realizacja', 113);
						if($works_imgs) {
							foreach($works_imgs as $slide) { ?>
								<div class="home__offer__slider__slide" style="
									background: url(<?php echo $slide[galeria][0][url]; ?>) no-repeat center center; 
									background-size: cover;
								">
								</div>
								<?php
							}
						} 
					?>
                </flickity>
			</div>
		</div>
	</div>
</section>