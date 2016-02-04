<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-precomposed.png">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">

		<nav class="main-navigation top-bar">

			<div class="row" data-equalizer>

				<div class="show-for-large leftcol" data-equalizer-watch>
					<?php foundationpress_primary_menu(); ?>
				</div>

				<div class="columns large-6" data-equalizer-watch>
					<div class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<h1 class="site-title--primary"> Rose Hadley</h1>
							<h1 class="site-title--secondary"> London</h1>
						</a>
					</div>
				</div>

				<div class="show-for-large rightcol" data-equalizer-watch>
					<?php $phone = false; ?>
					<?php $phone = of_get_option('contact_telephone'); ?>
						<?php if($phone && "" != $phone ): ?>
							<a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
						<?php endif; ?>
					<?php /* if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
						<?php get_template_part( 'parts/mobile-top-bar' ); ?>
					<?php endif; */ ?>
				</div>

			</div>

		</nav>

		<?php get_template_part( 'parts/mobile-nav' ); ?>

	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' ); ?>
