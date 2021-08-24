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

	<!--  Essential META Tags -->
	<meta property="og:title" content="Gifted Illusionz">
	<meta property="og:description" content="">
	<meta property="og:image" content="" />
	<meta property="og:image:secure_url" content="">
	<meta property="og:type" content="image/jpg">
	<meta property="og:image:width" content="300">
	<meta property="og:image:height" content="300">
	<meta property="og:url" content="https://giftedillusionz.com">
	<meta name="twitter:card" content="summary_large_image">

	<!--  Non-Essential, But Recommended -->

	<meta property="og:site_name" content="Gifted Illusionz">
	<meta name="twitter:image:alt" content="">

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

		.site-footer .site-footer__links ul li a {
			color: #1f172e;
		}

		.site-footer__social-media a svg path {
			fill: #1f172e;
		}

		.site-footer__stamp {
			color: #1f172e;
		}

		.site-footer__lwc-stamp {
			color: #1f172e;
		}

		.menu-icon span {
			background-color: #1f172e;
		}

		.search-icon path  {
			fill: #1f172e;
		}
	</style>
<?php } ?>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gifted-illusionz' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
			<a href="<?php echo site_url(); ?>"><img title="Gifted Illusionz Logo" class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Gifted Illusionz Logo"/></a>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

			<div title="Mobile Menu" class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<svg title="Search" class="search-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 			viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
			<style type="text/css">
				.st0{fill:#FFFFFF;}
			</style>
		<path class="st0" d="M23.8,20.9l-6.4-6.4c0.9-1.5,1.5-3.2,1.5-5.1c0-5.2-4.2-9.5-9.5-9.5S0,4.2,0,9.5c0,5.2,4.2,9.5,9.5,9.5
			c1.8,0,3.4-0.5,4.8-1.3l6.4,6.4C20.7,24,23.8,20.9,23.8,20.9z M3.5,9.5c0-3.3,2.7-5.9,5.9-5.9c3.3,0,5.9,2.7,5.9,5.9
			c0,3.3-2.7,5.9-5.9,5.9C6.2,15.4,3.5,12.7,3.5,9.5z"/>
		</svg>

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
