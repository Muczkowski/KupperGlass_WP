<section class="cooporate">
	<div class="wrapper">
		<div class="row">
			<div class="cooporate__content col-12 col-lg-7 col-xl-6">
				<h2 class="cooporate__content__title"><?php echo the_field('tytul', 106) ?></h2>
				<h3>
					<?php echo the_field('podtytul', 106) ?>
				</h3>
				
				<ul class="cooporate__content__ul">
					<?php
						if( have_rows('odbiorcy_uslug', 106) ): ?>
							<?php
								$i = 1;
								
							    while ( have_rows('odbiorcy_uslug', 106) ) : the_row(); ?>
							<ol>
								<span class="cooporate__content__ul__index">0<?php echo $i ?></span>
								<span class="cooporate__content__ul__text">
									<?php the_sub_field('tekst'); ?>
								</span>
							</ol>
							<?php
								$i++;
								
						    	endwhile;
							else :
						endif;
					?>
				</ul>
				
				<button class="btn">Skontaktuj się</button>
			</div>
			
			<div class="cooporate__content cooporate__content-right col-12 col-lg-5 col-xl-6">
				<p>
					<?php echo the_field('tekst', 106) ?>
				</p>
				
				<div class="cooporate__content__image">
					<img src="<?php $offer_pic1 = get_field('zdjecie_wieksze', 106); echo $offer_pic1['url'] ?>">
					
			
					<div class="cooporate__content__image__rect rect">
						<span class="cooporate__content__image__rect__number rect__number">29</span>
						<span class="cooporate__content__image__rect__text rect__text">lat doświadczenia</span>
					</div>
					
					<div class="cooporate__content__image__smaller">
						<img src="<?php $offer_pic2 = get_field('zdjecie_mniejsze', 106); echo $offer_pic2['url'] ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>