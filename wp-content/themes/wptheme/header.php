<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewpoint" content="width=device-width">
	<title><?php bloginfo('name');?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!--container -->
<div class="container">

	<!--site-header -->
	<header class="site-header">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<h5><?php bloginfo('description'); ?></h5>
	</header><!-- /site-header -->

	<!--site-nav -->
	<nav class="site-nav">
		<?php wp_nav_menu(); ?>
	</nav><!-- /site-nav -->