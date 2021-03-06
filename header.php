<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?> | Mally Espaillat</title>

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<link href="https://fonts.googleapis.com/css?family=Zilla+Slab:300,400,500,600,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=DM+Serif+Display&display=swap" rel="stylesheet">

		<?php wp_head(); ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<div id="body-inner">
			<header id="header">
				<div id="header-logo">
					<a href="<?php echo bloginfo('url'); ?>">
						<span id="logo-letters">me</span>
						<span id="logo-copy" itemscope itemtype="http://schema.org/Organization">mally espaillat.</span>
					</a>
				</div><!--#header-logo-->

				<div id="mobile-nav-ui" class="inactive">
					<div id="bar1"></div>
					<div id="bar2"></div>
					<div id="bar3"></div>
				</div><!--#mobile-nav-ui-->

				<nav id="header-nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu(array(
						'container' => false,
				        'theme_location' => 'header-menu',
				        // 'menu_class' => 'flex'
					)); ?>
				</nav><!--#header-nav-->
			</header><!--#header-->