<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
include('header.inc.php') ?>
		<section>
			<div class="wrapper editable" style="width: <?php get_custom_field('fullwidth') ?>; margin: 0 auto">
				
				<?php insert_page_content('Powyzej'); ?>
				
				<div class="grid two">
					<div class="cell" style="padding: 0 <?php get_custom_field('przestrzen'); ?> 0 0">
						<?php insert_page_content('Lewa kolumna'); ?>
					</div>
					
					<div class="cell" style="padding: 0 0 0 <?php get_custom_field('przestrzen'); ?>">
						<?php insert_page_content('Prawa kolumna'); ?>
					</div>
				</div>
				
				<?php insert_page_content('Ponizej'); ?>
			</div>
		</section>
<?php include('footer.inc.php') ?>