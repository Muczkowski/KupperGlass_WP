<div class="col-12 col-lg-4">
	<div class="newsList__sidebar">
		<div class="newsList__sidebar__recommended">
			<h3 class="rectTitle">
				Polecany artykuły
			</h3>
			
			<ul>
				<?php
					$args = array(
				        'post_type' => 'post',
						'post_status' => 'publish',
				        'order' => 'DESC',
				        'category_name'    => 'Polecane',
						'posts_per_page' => 3
				    );
					$post_query = new WP_Query( $args );
					if( $post_query->have_posts() ) : while( $post_query->have_posts() ) : $post_query->the_post(); 
				?>
				<a href="<?php the_permalink(); ?>"><li><?php the_title(); ?></li></a>
				<?php endwhile; endif; ?>
			</ul>
		</div>
		
		<hr />

		<div class="newsList__sidebar__archive">
			<h3 class="rectTitle">
				Archiwum
			</h3>
			
			<ul>
				<?php 
                    $string = wp_get_archives('type=monthly&limit=20&echo=0&show_post_count=true');
                    $pattern = ' ((19|20)\d{2}(</a>))';
                    echo preg_replace($pattern, '\\3', $string);
                ?>
			</ul>
		</div>
		
		<hr />
		
	</div>
</div>