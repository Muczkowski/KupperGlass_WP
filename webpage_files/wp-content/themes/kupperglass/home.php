<?php 
include('header.inc.php') ?>
	
	<section class="newsList-intro" style="background: whitesmoke url('<?php bloginfo('template_directory'); ?>/img/news/bg.png') no-repeat center center; background-size: cover">
		<div class="wrapper">
			<div class="newsList-intro__text">
				<h1>Aktualności</h1>
				
				<ul class="breadcrumbs">
					<li>
						<a href="/">home</></a>
					</li>
					
					<li>
						<a href="/">aktualność</></a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	
	<section class="newsList">
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-lg-8">
					
				<?php
					$currentPage = get_query_var('paged');
					
					$latest_news = array(
				        'post_type' => 'post',
						'post_status' => 'publish',
				        'paged' => $currentPage,
						'posts_per_page' => 2
				    ); 
				    
				    $the_query = new WP_Query( $latest_news );
				    
						while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						
					<div class="newsList__post">
						<div class="row">
							<div class="col-12 col-md-6 newsList__post__text">
								<span class="date"><?php the_date(); ?></span>
						
								<h2><?php the_title(); ?></h2>
			
								<p>
									<?php the_excerpt(__('(more…)')); ?>
								</p>
						
								<a href="<?php the_permalink() ?>"><button class="btn">czytaj więcej</button></a>
							</div>
							<div class="col-12 col-md-6">
								<div class="newsList__post__image"><img src="<?php bloginfo('template_directory'); ?>/img/news/1.png" /></div>
							</div>
						</div>
					</div>
					<?php 
						endwhile;
					?>
					
					<div class="row">
						<div class="col-12 col-md-6">
						</div>
						<div class="col-12 col-md-6">
							<div class="newsList__pagination">
								<?php 
									echo paginate_links(array(
										'total' => $the_query->max_num_pages
									));
									
									next_post_link('<li class="newsList__pagination-right"></li>', $the_query->max_number_pages); 
									next_post_link('<li class="newsList__pagination-left"></li>', $the_query->max_number_pages); 
								?>
								
							</div>
						</div>
					</div>
					<?php 
						wp_reset_postdata();
					?>
				</div>
				
				<?php include('tpl-parts/blog_sidebar.php'); ?>
			</div>
		</div>
	</section>
	
<?php include('footer.inc.php') ?>