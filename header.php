<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CALSboilerplate_underscores
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		<div class="absoluteWrap">
		<div id="popout-content" class="no-display"><p>paragraph</p></div>

		<div class="sideBarNav">
			<a href="#" class="sideBarClose"><?php include("dist/images/closebutton.svg"); ?> Close Menu</a>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
		</div>
		<div class="siteWrapperOverlay"></div>
	<div class="siteWrapper">

	<div class="headerContainer">

		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'calsboilerplate_underscores' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

				<div class="row">

					<div class="span-50">
						<div class="site-branding">
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						</div>
					</div>

					<div class="span-50">
						<a href="#" class="menuTrigger"><?php include("dist/images/menuicon.svg"); ?> Menu</a>
					</div>

			</header><!-- #masthead -->

			</div>

<?php
if ( is_front_page() ) { ?>

	<div class="homePageFeature">
		<h2>CALS IT/ACS</h2>
		<h2 class="subHeading">Here for you.</h2>
		<a href="#" class="button large blue servicesButton">Our Services</a>
	</div>

<?php } ?>

	</div>
	<div id="content" class="site-content">
