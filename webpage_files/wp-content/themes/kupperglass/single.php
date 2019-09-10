<?php include('header.inc.php') ?>
	
	<section class="post">
		<div class="wrapper">
			
			<ul class="breadcrumbs">
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">Blog</a>
				</li>
				<li>
					<a href="#">Wpis</a>
				</li>
			</ul>
			
			<div class="row">
				<div class="col-xs-12 col-md-8">
					
					<div class="post__template">
						<div class="post__template-image">
							<?php the_post_thumbnail(); ?>
						</div>
						
						<span class="post__template-date">
							<?php the_date(); ?>
						</span>
						
						<h1 class="post__template-title">
							<?php the_title(); ?>
						</h1>
						
						<div>
    						    <?php the_content(); ?>
						</div>
						
						<a href="/aktualnosci">
							<button class="btn btn-wide">
								cofnij
							</button>
						</a>
					</div>
				</div>
				
				<?php include('tpl-parts/blog_sidebar.php'); ?>
			</div>
		</div>
	</section>
	
<?php include('footer.inc.php') ?>