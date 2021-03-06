<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<!-- jQuery min -->
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  		<!-- /jQuery min -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
	   <!--  <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->
		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<!-- /google fonts -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<?php wp_head(); ?>
		<script>
	    // conditionizr.com
	    // configure environment tests
	    conditionizr.config({
	        assets: '<?php echo get_template_directory_uri(); ?>',
	        tests: {}
	    });
    </script>
  

	<body <?php body_class(); ?>>

	<!-- nav -->

	<nav id="menu" class="nav" role="navigation">
		<a  href="<?php echo home_url(); ?>">
			Carl Borrmann
		</a>
		<?php html5blank_nav(); ?>
	</nav>
	<!-- mobile menu -->
	<nav id="mobile-menu">
		<i id="open" class="fa fa-bars visible"></i>
		<i id="close" class="fa fa-times hidden"></i>
	</nav>
	<!-- /mobile menu -->
	<!-- /nav -->

	<!-- header -->

	<?php Timber::render('header.twig'); ?>

	<!-- /header -->
