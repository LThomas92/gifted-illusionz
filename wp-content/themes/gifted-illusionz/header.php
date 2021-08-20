<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gifted_Illusionz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<?php if(is_page('portfolio')) { ?>
	<style>
		body {
			background-color: #fff;
		}
		.main-navigation li a {
			color: #000;
		}
	</style>
<?php } ?>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gifted-illusionz' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
			<a href="<?php echo site_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Gifted Illusionz Logo"/></a>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

	<div class="menu-icon">
			<input class="menu-icon__checkbox" type="checkbox" />
			<div>
				<span></span>
				<span></span>
			</div>
	</div>

				<img class="search-icon" src="<?php echo get_template_directory_uri(); ?>/img/search.svg" alt="Search Icon"/>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
			<div class="search-overlay">
				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label>
					<input style="line-height: 4rem" type="search" class="search-field" placeholder="Search for something..." value="<?php echo get_search_query(); ?>" name="s" />
					<button type="submit" class="search-submit"></button>
					</label>
				</form>
				<svg class="search-overlay__close-btn" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs>
					<style>.cls-1{fill:#1f172e;}</style></defs>
					<path class="cls-1" d="M24,20.19,15.69,12l8.2-8.28L20.19,0,12,8.32,3.67.12,0,3.78,8.32,12,.11,20.33,3.78,24,12,15.68l8.28,8.21Z" transform="translate(0 0)"/>
				</svg>
			</div>

			<div class="mobile-navigation">
			<a href="<?php echo site_url(); ?>"><img class="mobile-navigation__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Gifted Illusionz Logo"/></a>	
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
				<div class="mobile-navigation__close">
					
				</div>
			</div>
