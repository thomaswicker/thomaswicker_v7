<html class="no-js html-main" style="margin-top: 0 !important;">
	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>ThomasWicker.com</title>

		<meta content='Personal website and portfolio for Thomas Wicker: Software Developer in Denver, CO' name='description'>
		<meta content='IE=edge' http-equiv='X-UA-Compatible'>
		<meta content='width=device-width, initial-scale=1' name='viewport'>
		<link href='img/favicon.ico' rel='shortcut icon'>
		<meta content='Personal website and portfolio for Thomas Wicker: Front End Dev' property='og:title'>

		<!-- <link href='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css' rel='stylesheet'> -->
		<!-- <link href='bower_components/motion-ui/dist/motion-ui.min.css' rel='stylesheet'> -->
		<!-- <link href='bower_components/components-font-awesome/css/font-awesome.min.css' rel='stylesheet'> -->
		<!-- <link href='css/application.min.css' rel='stylesheet'> -->

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->

		<?php // or, set /favicon.ico for IE10 win ?>

		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<!-- Manifest File for Lighthouse -->
		<meta name="theme-color" content="#2a98c6">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

		<meta property="og:url"                content="http://thomaswicker.com/" />
		<meta property="og:title"              content="Thomas Wicker - Senior Front End Developer UI/UX" />
		<meta property="og:image"              content="http://www.thomaswicker.com/wp-content/themes/thomaswicker/img/tw-og-image.jpg" />
	</head>