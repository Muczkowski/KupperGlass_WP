<?php 
	/*
	 Template Name: Oferta
	 */
	include('header.inc.php');
	
	$section1 = get_field('sekcja_1');
	$section2 = get_field('sekcja_2');
	$section3 = get_field('sekcja_3');
?>

	<section class="offer">
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-xl-6">
					<h1><?php echo $section1['tytul']; ?></h1>
					
					<p>
						<?php echo $section1['tekst']; ?>
					</p>
				</div>
				<div class="col-12 col-xl-6">
					<div class="offer__image">
						<img class="lazy" src="<?php echo $section1['zdjecie']['url']; ?>" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-12">
					<h2><?php echo $section2['tekst']; ?></h2>
					<ul class="offer__ul">
						
					<?php
						$offer_list = $section2['oferta'];
						if($offer_list) {
							$i = 0;
							foreach($offer_list as $offer) { ?>
								<ol>
									<span class="offer__ul__index">0<?php echo $i+1 ?></span>
									<div class="offer__ul__text">
										<strong><?php echo $offer['nazwa_oferty']; ?></strong> – <?php echo $offer['opis_oferty']; ?>
									</div>
								</ol>
								<?php 
								$i++;
							}
						}
					?>
					</ul>
				</div>
			</div>
		</div>	
	</section>
	
<?php include('tpl-parts/offer_slider.php'); include('footer.inc.php') ?>