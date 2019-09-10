<?php 
	/* 
		Template Name: Produkt 
	*/
	
	include('header.inc.php');

	// Custom Fields
	$pdc_img = get_field('zdjecie_produktu');
	$pdc_preview = get_field('prezentacja');
?>
	
	<section class="product">
		<div class="wrapper">
			<ul class="breadcrumbs">
				<li>
					<a href=#>Home</a>
				</li>
				<li>
					<a href=#>Produkty</a>
				</li>
				<li>
					<a href="#">System ścian szklanych</a>
				</li>
			</ul>
			
			<div class="row">
				<div class="col-xs-12 col-md-8">
					<img class="product__preview" src="<?php echo $pdc_preview['url']; ?>" title="Prezentacja produktu" />
				</div>
				<div class="col-xs-6 col-md-4">
					<img class="product__img" src="<?php echo $pdc_img['url']; ?>" title="<?php the_title(); ?>" />
					
					<div class="product__player">
						<span class="product__player__title">Posłuchaj lorem ipsum</span>
						
						<div class="product__player__volume">
							<span><?php the_field('min_db'); ?> dB</span>
							<input type="range" id="change_vol"  onchange="change_vol()" 
							min="<?php the_field('min_db'); ?>" 
							max="<?php the_field('max_db'); ?>" 
							value="50" 
							class="product__player__volume__slider">
							<span><?php the_field('max_db'); ?> dB</span>
						</div>
						
						<audio id="music_player">
                            <source src="<?php the_field('mp3'); ?>"/>
                        </audio>
						
						<div class="product__player__controls">
							<div class="product__player__controls__play" onclick="play_aud()"></div>
							<div class="product__player__controls__volume">
								<div class="product__player__controls__volume-trigger"  onclick="mute_vol()">
								</div>
								<div class="product__player__controls__volume-indicator" id="volIndicator">
								</div>
								<div class="product__player__controls__volume__line"></div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-md-8 product__content">
					<h1>
						<?php the_title(); ?>
					</h1>
<!--
					<span>
						<?php 
    						$categories = get_the_category();
    						echo get_category_link( $categories[0]->term_id ); ?>
					</span>
-->
					
					<p>
						<?php echo get_post_field('post_content', $post->ID); ?>
					</p>
					
					<div class="product__content__specs product__content__table">
						<div class="product__content__table__title">
							<h2>Specyfikacja</h2>
						</div>
						
						<?php
							$specs = get_field('specyfikacja');
							if($specs) { ?>
							<ul>
								<?php foreach($specs as $spec) { ?>
								<li>
									<p><?php echo $spec['nazwa']; ?></p><p><?php echo $spec['wartosc']; ?></p>
								</li>
								<?php } ?>
							</ul>
							<?php
							}
						?>
					</div>
					
					<div class="product__content__properties product__content__table">
						<div class="product__content__table__title">
							<h2>Cechy systemu</h2>
						</div>
						
						<?php
							$specs = get_field('cechy_systemu');
							if($specs) { ?>
							<ul>
								<?php foreach($specs as $spec) { ?>
								<li>
									<p><?php echo $spec['cecha']; ?></p>
								</li>
								<?php } ?>
							</ul>
							<?php
							}
						?>
					</div>
					
					<div class="product__content__gallery product__content__table">
						<div class="product__content__table__title">
							<h2>Galeria</h2>
						</div>
						
						<div class="product__content__gallery__items">
    						    <div class="row">
							<?php
								$galeria = get_field('galeria');
								if($galeria) {
									foreach($galeria as $pic) { ?>
									<div class="col-6 col-md-4 product__content__gallery__items__item">
    									    <div class="product__content__gallery__items__item__inner" style="background: url(<?php echo $pic['url']; ?>) no-repeat center center; background-size: cover;"></div>
									</div>
								<?php }
								}
							?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-md-4 product__sidebar">
					<h3>
						Inne z tej kategorii
					</h3>
					
					<ul>
						<?php
            					$products_list = array(
            				        'post_type' => 'produkt',
            				        'posts_per_page' => '99',
            				        'category_name' => get_the_category()
            				    ); 
            				    
            				    $the_query = new WP_Query( $products_list );
            				    
            						while ($the_query -> have_posts()) : $the_query -> the_post();
            						?>
                                    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
            				<?php 
            					endwhile;
            				?>
					</ul>
					
					<hr />
					
					<h3>
						Pobierz katalog
					</h3>
					
					<ul class="product__sidebar__pdf">
        					<?php
    							$pdfs = get_field('katalog');
    							if($pdfs) { ?>
    								<?php foreach($pdfs as $pdf) { ?>
    								<li>
    									<a target="_blank" href="<?php echo $pdf['pdf']; ?>" title="<?php echo $pdf['nazwa']; ?>"><?php echo $pdf['nazwa']; ?></a>
    								</li>
    								<?php }
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</section>

    <script>
        document.addEventListener("DOMContentLoaded", function() { startplayer(); }, false);
        var player;
        
        function startplayer() {
            player = document.getElementById('music_player');
            player.controls = false;
        }
        
        function play_aud()  {
            player.play();
        } 
        
        function change_vol() {
            var vol = document.getElementById("change_vol").value;
            var volindicator = document.getElementById('volIndicator');
            volindicator.style.width = (vol - <?php the_field('min_db'); ?>) / <?php the_field('max_db'); ?> * 100 + '%';
            player.volume = vol;
        }
    </script>
	
<?php include('footer.inc.php') ?>