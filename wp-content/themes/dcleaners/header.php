<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="dcleaners-main-header">
			<div class="upper-header">
				<div class="row">
					<div class="col">
						<div class="menu-container">
							<div class="hamburger-menu">
								Menu
							</div>
						</div>
					</div>
					<div class="col hidden-on-mobile">
						<div class="find-location ">
						location
						</div>
					</div>
					<div class="col">
						<div class="logo-container">
							logo
						</div>
					</div>
					<div class="col hidden-on-mobile">
						<div class="my-account-container">
							account
						</div>
					</div>
					<div class="col">
						<div class="menu-header-container">
							<div class="schedule-pick-up hidden-on-mobile">
								scheduler
							</div>
							<div class="call-button">
								call
							</div>
						</div>
					</div>
				</div>
			</div><!-- upper-header -->
			<div class="lower-header">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1>
								Not Just Dependable.
								<br />
								Exeptional.
							</h1>
							<hr>
							<p>
								With free pickup and delivery, same-day dry
								cleaning and VIP laundry services, you'll always
								look your best - you can depend on it.
							</p>
							<button type="sumbit">Start Saving Time</button>
						</div>
						<div class="col-md-4">
						</div>
					</div> 
				</div>
			</div>
		</div><!--dcleaners-main-header-->
	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
