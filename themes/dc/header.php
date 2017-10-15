<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package don-cano
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="nav_icon">
		<span></span>
		<span></span>
		<span></span>
	</div>

	<?php
		$logo_white = get_field('logo_white', 'option');
		$logo_black = get_field('logo_black', 'option');
	?>

	<div class="mobile_header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="mobile_logo" src="<?php echo $logo_white['url']; ?>" alt="Home" /></a>
	</div>
	<header class="header">
		<div class="container">
			<nav id="nav">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'dc' ); ?></button> -->
				<?php
					wp_nav_menu( array(
						'theme_location' => 'left',
						'menu_class' => 'nav-menu',
					) );
				?>
				<?php 

					if( !empty($logo_white) && !empty($logo_black) ): ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="menu_logo">
							<img class="logo_white" src="<?php echo $logo_white['url']; ?>" alt="Home" />
							<img class="logo_black" src="<?php echo $logo_black['url']; ?>" alt="Home" />
						</a>

				<?php endif; ?>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'right',
						'menu_class' => 'nav-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
