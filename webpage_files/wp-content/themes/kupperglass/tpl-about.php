<?php 
	/*
	 Template Name: O nas
	 */
include('header.inc.php');

$section1 = get_field('sekcja_1');
$section2 = get_field('sekcja_2');

?>

	<section class="aboutUs-intro">
		<div class="wrapper-wide">
			<div class="row">
				<div class="col-12 col-lg-7 aboutUs-intro__image">
					<img class="lazy fadeIn" data-src="<?php echo $section1['zdjecie']['url']; ?>" />
				</div>
				<div class="col-12 col-lg-5 aboutUs-intro__text">
					<div class="aboutUs-intro__text__title">
						<span><?php echo $section1['tytul']; ?></span>
						<h1><?php echo $section1['podtytul']; ?></h1>
					</div>
					
					<p>
						<?php echo $section1['tekst']; ?>
					</p>
				</div>
			</div>
		</div>
	</section>
	
	<section class="aboutUs-office">
		<div class="wrapper-wide">
			<div class="row">
				<div class="col-12 col-xl-2 aboutUs-office__image">
					<img class="lazy fadeIn" data-src="<?php echo $section2['zdjecie_1']['url']; ?>" />
				</div>
				
				<div class="col-12 col-xl-5">
					<div class="aboutUs-office__content">
					<h2><?php echo $section2['tytul']; ?></h2>
					
					<p>
						<?php echo $section2['tekst']; ?>
					</p>
					</div>
				</div>
				
				<div class="col-12 col-xl-5 aboutUs-office__image">
					<img class="lazy fadeIn" data-src="<?php echo $section2['zdjecie_2']['url']; ?>" />
				</div>
			</div>
		</div>
	</section>
	
	<section class="aboutUs-mainfaces">
		<div class="wrapper">
			<span class="aboutUs__title">
				zarząd
			</span>
			
			
			<div class="row aboutUs-mainfaces__persons">
			<?php
				if( have_rows('zarzad') ):
				    while ( have_rows('zarzad') ) : the_row(); 
				    
				    $photo = get_sub_field('zdjecie');
				    ?>
					<div class="aboutUs-mainfaces__person">
						<div class="aboutUs-mainfaces__person__image">
							<img class="lazy fadeIn" data-src="<?php echo($photo[url]) ?>" />
						</div>
						<span class="aboutUs-mainfaces__person__name hcen-items"><?php the_sub_field('nazwisko') ?></span>
						<span class="aboutUs-mainfaces__person__position hcen-items"><?php the_sub_field('stanowisko') ?></span>
					</div>
				<?php
			    	endwhile;
				else :
				endif;
			?>
			</div>
		</div>
	</section>
	
	<section class="aboutUs-allfaces">
		<div class="wrapper">
			<span class="aboutUs__title">
				nasz zespół
			</span>
			
			<div class="row aboutUs-allfaces__persons">
				
				<?php
					if( have_rows('nasz_zespol') ):
					    while ( have_rows('nasz_zespol') ) : the_row(); 
				    
					    $photo = get_sub_field('zdjecie');
					    ?>
						<div v-for="person in home.acf.nasz_zespol" class="aboutUs-allfaces__person">
							<div class="aboutUs-allfaces__person__image">
								<img class="lazy fadeIn" data-src="<?php echo($photo[url]) ?>" />
							</div>
							<span class="aboutUs-allfaces__person__name hcen-items"><?php the_sub_field('nazwisko') ?></span>
							<span class="aboutUs-allfaces__person__position hcen-items"><?php the_sub_field('stanowisko') ?></span>
						</div>
					<?php
				    	endwhile;
					else :
					endif;
				?>
				
			</div>
		</div>
	</section>
	
	<section class="aboutUs-bg">
		<img class="lazy fadeIn" data-src="<?php $bg_photo = get_field('zdjecie_w_tle'); echo($bg_photo[url]) ?>" />
	</section>
	
<?php include('footer.inc.php') ?>