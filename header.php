<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
		<!-- respond.js -->
		<!--[if lt IE 9]>
		  <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body <?php body_class(); ?>>
				
		<header class="header" data-stellar-background-ratio="0.5" id="home" role="banner">
			<div class="overlay-layer">
				
				<div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation appear-on-scroll" role="navigation">
		
					<div class="navbar navbar-inverse navbar-fixed-top">
						<div class="container">

							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
							</div>

							<div class="collapse navbar-collapse navbar-responsive-collapse">
								<?php canvas_main_nav(); // Adjust using Menus in Wordpress Admin ?>

								<?php //if(of_get_option('search_bar', '1')) {?>
								<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
									<div class="form-group">
										<input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search','canvas'); ?>">
									</div>
								</form>
								<?php //} ?>
							</div>

						</div> <!-- end .container -->
					</div> <!-- end .navbar -->
				</div>
			<!-- CONTAINER -->
      <div class="container">

				<!-- ONLY LOGO ON HEADER -->
					<div class="only-logo">
						<div class="navbar">
							<div class="navbar-header">
								<h1>ADOMA</h1>
							</div>
						</div>
					</div>
          
          <!-- /END ONLY LOGO ON HEADER -->
					<div class="row">
						<div class="col-md-12">

							<!-- HEADING AND BUTTONS -->
							<div class="intro-section">

								<!-- WELCOM MESSAGE -->
								<h1 class="intro white-text">Simple, Reliable and Awesome.</h1>
								<h5 class="white-text">Tablet publishing HTML5 mobile first really simple syndication meetups</h5>

								<!-- BUTTON -->
								<div class="button">
									<a href="#section11" class="btn btn-primary white-button inpage-scroll">Get Started</a>
								</div> <!-- /END BUTTON -->

								</div> <!-- /END HEADNING AND BUTTONS -->
							</div>
						</div>
					</div>

				</div>
			</div>
		</header> <!-- end header -->
		
		<div class="container">
