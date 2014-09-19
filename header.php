<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package starter-theme
 */
?>
<!DOCTYPE html>
<?php
	/*-------------------------------------------------------------------------------
	*
 	*	Define the language and text direction in your HTML element.
 	*	The WP function language_attributes() handles this, and makes
 	*	sure that text is pronounced correctly in screen reading software.
 	*
 	--------------------------------------------------------------------------------*/
?>
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<?php
	/*-----------------------------------------------------------------------------------
	 *
	 *	The important thing in the viewport meta tag is what's not here: zoom control.
	 *  Limiting or disallowing zoom on mobile prevents visitors from being
	 *  able to enlarge your content (text or images) for a better reading or
	 *  viewing experience.
	 *
	 * --------------------------------------------------------------------------------*/
?>

<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part( 'skiplinks' ); ?>

<div id="page" class="hfeed site">

<?php
	/*-----------------------------------------------------------------------------------
	*
	*	Filters that allow adding content outside of a defined landmark role include
	*	the _role suffix. When adding readable content to one of these filters, you
	*	must provide a role for that content. Most of the time, role=complementary
	*	will be most appropriate, but each case should be treated differently.
	*
	* --------------------------------------------------------------------------------*/
?>

<?php apply_filters( 'starter_theme_before_header_role', '' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

<?php
	/*-----------------------------------------------------------------------------------
	*
	* Aria Label: Provides a label to differentiate multiple navigation landmarks
	* hidden heading: provides navigational structure to site for scanning with 
	* screen reader
	*
	* --------------------------------------------------------------------------------*/
?>
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label='<?php _e( 'Primary Menu ', 'starter-theme' ); ?>'>
			<h1 class="screen-reader-text"><?php _e( 'Primary Menu', 'universal' ); ?></h1>
			<button class='menu-toggle' title='<?php _e( 'Open Menu', 'universal' ); ?>'><span class="screen-reader-text"><?php _e( 'Open Menu','starter-theme' ); ?></span></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
<?php
	/*-----------------------------------------------------------------------------------
	*
	* Tab Index: for keyboard navigation
	*
	* --------------------------------------------------------------------------------*/
?>
	<div id="content" class="site-content" tabindex="-1">
