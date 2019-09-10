<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
include('header.inc.php') ?>


	<nav id="nav">
		<ul>
			<?php 
				get_i18n_navigation(return_page_slug(),0,99,I18N_SHOW_ALL, 'rsp-menu'); 
			?>
		</ul>
	</nav>
	
	<!-- FORMATTING -->
	<section id="page">
		<div class="wrapper">
		</div>
		
		<code>
		
		</code>
	</section>
			
	<!-- GRID -->
	<section id="page">
		<div class="wrapper">
		</div>
	</section>
	
	<!-- BUTTONS -->
	<section id="page">
		<div class="wrapper">
		</div>
	</section>
	
	<!-- MENU -->
	<section id="page">
		<div class="wrapper">
		</div>
	</section>
	
	<!-- DROPDOWN -->
	<section id="page">
		<div class="wrapper">
		</div>
	</section>
	
	<!-- SRCLLSPY -->
	<section id="page">
		<div class="wrapper">
		</div>
	</section>
	
	<!-- DIALOG -->
	<section id="page">
		<div class="wrapper">
			
			<h2>
				Dialog
			</h2>
			<p>
				glfdallgfdlagl
			</p>
			
			<div class="row">
			    <div class="col-xs-12 col-sm-10 col-md-8">
			        <code>
&lt;div class="dialog" id="my-accessible-dialog" aria-hidden="true"&gt;<br />
	&nbsp; &nbsp; &nbsp; &nbsp;&lt;div class="dialog-overlay" tabindex="-1" data-a11y-dialog-hide&gt;&lt;/div&gt;<br />
	&nbsp; &nbsp; &nbsp; &nbsp;&lt;dialog class="dialog-content" aria-labelledby="dialogTitle" aria-describedby="dialogDescription"&gt;<br />
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h1&gt;Test&lt;/h1&gt;<br />
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;tekttekstteksttekst&lt;/p&gt;<br />
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;button data-a11y-dialog-hide class="dialog-close" aria-label="Close this dialog window"&gt;&lt;/button&gt;<br />
	&nbsp; &nbsp; &nbsp; &nbsp; &lt;/dialog&gt;<br />
	&lt;/div&gt;
					</code>
			    </div>
			</div>
			
		</div>
	</section>
	
	<!-- FORMATTING -->
	<section id="page">
		<div class="wrapper">
		</div>
	</section>
<?php include('footer.inc.php') ?>