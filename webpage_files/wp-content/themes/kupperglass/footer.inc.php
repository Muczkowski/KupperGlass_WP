		</div>
			
			<footer data-sticky-footer>
				<section class="footer footer-blue">
					<div class="wrapper">
						<h4 class="footer__title footer-blue__title">
							Skontaktuj się z nami
						</h4>
						
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="row">
									<div class="col-12 col-sm-6">
										<h4 class="footer__title">Dane firmy:</h4>
										<p><?php echo of_get_option('name'); ?></p>
										<p><?php echo of_get_option('address'); ?></p>
									</div>
										
									<div class="col-12 col-sm-6">
										<h4 class="desktop">&nbsp;</h4>
										<p>KRS: <?php echo of_get_option('krs'); ?></p>
										<p>NIP: <?php echo of_get_option('nip'); ?></p>
										<p>REGON: <?php echo of_get_option('regon'); ?></p>
									</div>
									
									<div class="col-12 col-sm-6">
										<h4>
											Biuro
										</h4>
										<p>
											<?php echo of_get_option('ofc_address'); ?>
										</p>
										
										<ul>
											<li>
												<a href="mailto:<?php echo of_get_option('ofc_mail'); ?>">
													<img class="lazy footer-blue__icon" data-src="<?php bloginfo('template_directory'); ?>/img/global/footer/envelope.png">
													<?php echo of_get_option('ofc_mail'); ?>
												</a>
											</li>
											<li>
												<img class="lazy footer-blue__icon" data-src="<?php bloginfo('template_directory'); ?>/img/global/footer/phone-call.png">
												<?php echo of_get_option('ofc_phone'); ?>
											</li>
										</ul>
									</div>
									
									<div class="col-12 col-sm-6">
										<h4>Produkcja</h4>
										<p><?php echo of_get_option('prod_address'); ?></p>
										
										<ul>
											<li>
												<a href="mailto:<?php echo of_get_option('prod_mail'); ?>">
													<img class="lazy footer-blue__icon" data-src="<?php bloginfo('template_directory'); ?>/img/global/footer/envelope.png">
													<?php echo of_get_option('prod_mail'); ?>
												</a>
											</li>
											<li>
												<a href="tel:<?php echo of_get_option('prod_phone'); ?>">
													<img class="lazy footer-blue__icon" data-src="<?php bloginfo('template_directory'); ?>/img/global/footer/phone-call.png">
													<?php echo of_get_option('prod_phone'); ?>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="col-sm-12 col-md-6">
								<form>
									<?php echo do_shortcode('[contact-form-7 id="191" title="Contact form 1"]'); ?>
								</form>
							</div>
							
						</div>
						<div class="footer__uptoggler"></div>
					</div>
				</section>
				
				<section class="footer footer-white">
					<div class="wrapper">
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="row footer-white__logo">
									<div class="col-6 col-md12">
										<img class="footer__logo"
											src="<?php echo of_get_option('logo_footer'); ?>"
											alt="<?php echo $page_title; ?>"
										/><br />
									</div>
									
									<div class="col-6 col-md-12">
										<p>Copyright 2019 by Webite Style.<br />Tworzenie stron www</p>
									</div>
								</div>
							</div>
							
							<div class="col-sm-6 col-md-6 footer__mapsite">
								<?php wp_nav_menu( array( 'theme_location' => 'footer_nav' ) ); ?>
							</div>
							<div class="col-sm-6 col-md-3">
								<span>Śledź nas</span>
								<ul class="footer__icons">
									<li>
										<a href="#">
											<img class="lazy" data-src="<?php bloginfo('template_directory'); ?>/img/global/footer/inst.png" />
										</a>
									</li>
									<li>
										<a href="#">
											<img class="lazy" data-src="<?php bloginfo('template_directory'); ?>/img/global/footer/fb.png" />
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</footer>
		</main>

		<nav id="m_menu">
			<div id="panel-menu">
				<?php 
					$mobileNav = array(
					    'sort_column' => 'menu_order',
					    'level' => 0,
					    'theme_location' => 'header_nav',
					    'container'      => ''
					);
					
					wp_nav_menu( $mobileNav );
				?>
			</div>
		</nav>
		
		<?php wp_footer(); ?>
		<script src="<?php bloginfo('template_directory'); ?>/js/compressed.js"></script>
		<script>
			stickyFooter.init();
			
			var lazyLoadInstance = new LazyLoad({
			    elements_selector: ".lazy"
			});
			
			new Mmenu(
				document.querySelector('#m_menu'),
				{
					extensions	: [ 
		              'border-offset',
		              'theme-light',
		              "fx-menu-e",
		              'multiline',
		              'pagedim-black',
		              'position-left'
		            ],
                   "navbars": [
                      {
                         "position": "bottom",
                         "content": [
                            "<a class='fa fa-envelope' href='mailto:info@salamanders.pl'></a>",
                            "<a class='fab fa-instagram' href='<?php echo of_get_option('inst_url'); ?>'></a>",
                            "<a class='fab fa-facebook-square' href='<?php echo of_get_option('fb_url'); ?>'></a>"
                         ]
                      }
                   ]
				}
			);
			
			// 	Animations:
			ScrollReveal({
			    reset: false,
			    duration: 1500,
			    distance: '10px',
			    delay: 100
			}).reveal('.footer-blue__title, h2, h1, h3, h4, h5');
			
			ScrollReveal({
			    reset: false,
			    duration: 500,
			    distance: '20px',
			    delay: 100
			}).reveal('.newsList__post__image');
			
			ScrollReveal({
			    reset: false,
			    duration: 500,
			    distance: '20px',
			    delay: 100
			}).reveal('.newsList__post__image');
			
			// Classie
			<?php if($post_slug === 'home') { ?>
				function init() {
				    window.addEventListener('scroll', function(e){
				        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
				            shrinkOn = 300,
				            header = document.getElementById('nav');
				        if (distanceY > shrinkOn) {
				            if (classie.has(header,'transparent')) {
				                classie.remove(header,'transparent');
				            }
				        } else {
				            classie.add(header,'transparent');
				        }
				    });
				}
				window.onload = init();
					
				imagesLoaded( '.home__intro__img', { background: true }, function() {
				   var loader = document.getElementById('loader');
				   loader.classList.add('loaded');
				});
			<?php }
				
			if($post_slug === 'realizacje') { ?>
				thumbs = document.querySelectorAll('.modal__preview');
				for (let i = 1; i <= thumbs.length; i++) {
					
					let modal = document.getElementById('modal-'+i+'');
					let btn = document.getElementById('btn-modal-'+i+'');
					
					console.log('po zdefiniowaniu buttonów:' + i);
					
					btn.addEventListener("click", function () {
					  	modal.style.display = "block";
						let prevElem = document.querySelector('#modal-'+i+' .modal__preview');
						var flktyPrev = new Flickity( prevElem, {
                            prevNextButtons: false,
                            cellSelector: '.modal__preview__img',
                            pageDots: false
						});
						
                        console.log('po inicjalizacji preview:' + i);
					
						let thumbsElem = document.querySelector('#modal-'+i+' .modal__thumb');
						var flktyThumbs = new Flickity( thumbsElem, {
                            prevNextButtons: false,
                            cellSelector: '.modal__thumb__img',
                            pageDots: false,
                            asNavFor: '#modal-'+i+' .modal__preview',
                            cellAlign: 'left'
						});
                        
						let exit = document.getElementById('exit-'+i+'');
						
						exit.addEventListener("click", function () {
							modal.style.display = "none";
						});
					});
					
					btn.addEventListener("click", function (event) {
					  if (event.target == modal) {
					    modal.style.display = "none";
					  }
					});	
				}
			<?php }
				
			if($post_slug === 'oferta' || $post_slug === 'home') { ?>		
				var elem = document.querySelector('.home__offer__slider');
				var flkty = new Flickity( elem, {
				  // options
				  cellAlign: 'left',
				  cellSelector: '.home__offer__slider__slide',
				  contain: true,
				  prevNextButtons: false,
				  wrapAround: true,
				  pageDots: false
				});
				
				document.getElementById("flk_left").addEventListener("click",  function() {
					flkty.previous();
					console.log('lewy');
				});
				
				document.getElementById("flk_right").addEventListener("click",  function() {
					flkty.next();
					console.log('prawy');
				});
				
				var utils = window.fizzyUIUtils;
				var cellsButtonGroup = document.querySelector('.home__offer__bg__blue__controls__pagination__track');
				var cellsButtons = utils.makeArray( cellsButtonGroup.children );
				
				flkty.on( 'select', function() {
					var previousSelectedButton = cellsButtonGroup.querySelector('.is-selected');
					var selectedButton = cellsButtonGroup.children[ flkty.selectedIndex ];
					previousSelectedButton.classList.remove('is-selected');
					selectedButton.classList.add('is-selected');
				
					console.log(selectedButton);
				});
				
				cellsButtonGroup.addEventListener( 'click', function( event ) {
				  if ( !matchesSelector( event.target, '.pag' ) ) {
				    return;
				  }
				  var index = cellsButtons.indexOf( event.target );
				  flkty.select( index );
				});
			<?php } ?>
		</script>
	</body>
</html>