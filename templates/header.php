<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width">

		<title>
			<?php 
			if ( is_front_page() ) { 
				echo 'Welcome to Blue Jay Bay | Premiere Furniture Retailer';
			} else {
				wp_title('');
				echo " | ";
				bloginfo('name'); 
			} ?>
		</title>
		<meta name="description" content="">
		<meta name="author" content="Max Yeo">

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png">

		<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
		<meta property="og:url" content=""/>
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/fb.jpg"/>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
		<meta property="og:description" content=""/>
		<?php wp_head(); ?>
	</head>

	<body>
		<header>
			<div class="wrap">
				<a href="/" id="logo" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/banner.png);"></a>
				<i class="fa fa-bars"></i>
				<i class="fa fa-times"></i>
				<nav>
					<?php 
						$args = array(
						'theme_location' => 'primary nav',
						'container' => '',
						'items_wrap' => '%3$s'
					);
					?>
					<?php wp_nav_menu( $args ); ?>
				</nav>
			</div>
		</header>