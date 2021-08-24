<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Gifted_Illusionz
 */

get_header();
?>

<?php $errorVid = get_field('404_video', 'option'); ?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
		<h1 class="error-404__title">The page you are looking for was not found!</h1>
		<a class="back-to-home-btn" href="<?php echo site_url();?>">Back to Home</a>
		<header class="error-404-page-header">
					 <div class="error-404-video-desktop">
					<?php if($errorVid) {  ?>
						<video autoplay muted loop id="header-vid">
				<source src="<?php echo $errorVid; ?>" type="video/mp4">
				</video>

					<?php } ?>
				</div> <!-- front page desktop -->
			

			<div class="page-content">
			

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
