<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
		<meta name="google-site-verification" content="" />

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<section id="top">
			<div class="width-wrap">
				<div class="text-block">
					<i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@phone-doc.co.uk">Email: info@phone-doc.co.uk</a>
				</div>

				<div class="text-block">
					<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:01582123123">Call: 01582 123123</a>
				</div>
			</div>
		</section>
	
		<!-- wrapper -->
		<!--<div class="wrapper">-->
		<div class="">

			<!-- header -->
			<header id="main-menu" class="header clear" role="banner">
				<div class="width-wrap">
					<!-- logo -->
					<a href="<?php echo home_url(); ?>">
						<figure class="logo"></figure>
					</a>
					<!-- /logo -->

					<!-- Mobile menu -->
					<div class="mobile-menu">
						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>
					</div>
					<!-- /Mobile menu -->

					<!-- nav -->
					<nav class="nav desktop-menu" role="navigation">
						<?php html5blank_nav();  ?>
						<!--
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#services">Services</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
						-->
					</nav>
					<!-- /nav -->

				</div>
			</header>
			<!-- /header -->
