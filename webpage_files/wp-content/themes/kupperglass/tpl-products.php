<?php 
	/*
	 Template Name: Produkty
	 */
include('header.inc.php') ?>
	
	<section class="products section--light">
		<div class="wrapper">
			<h2>
				System ścian szklanych
			</h2>
			<ul class="breadcrumbs">
				<li>
					<a href=#>Home</a>
				</li>
				<li>
					<a href=#>Produkty</a>
				</li>
			</ul>
					
			<div class="products__list" >
			
				<?php
					$products_list = array(
				        'post_type' => 'produkt',
				        'posts_per_page' => '99'
				    ); 
				    
				    $the_query = new WP_Query( $products_list );
				    
						while ($the_query -> have_posts()) : $the_query -> the_post();
						$photo = get_field('zdjecie_produktu');
						?>
						
						<div class="products__box">
							<a href="<?php the_permalink() ?>">
								<div class="products__box__inner">
									<img src="<?php echo $photo[url]; ?>" />
								</div>
								<div class="products__box__desc">
									<h3><?php the_title(); ?></h3>
									<div class="products__box__view"></div>
								</div>
							</a>
						</div>
				<?php 
					endwhile;
				?>
			</div>
		</div>
	</section>
	
<?php include('footer.inc.php') ?>