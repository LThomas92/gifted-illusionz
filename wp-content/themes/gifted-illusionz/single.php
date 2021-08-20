<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Gifted_Illusionz
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();  ?>

			<div class="single-blog">
				<div class="single-blog__content">
					<h1 class="single-blog__main-title"><?php the_title(); ?></h1>
						<div class="single-blog__meta">
						<date class="single-blog__date"><?php echo the_date(); ?></date>
						<p class="single-blog__author"> By <?php echo get_the_author_meta('display_name', $author_id); ?></p>
						</div>
					<?php the_content(); ?>
				</div>
			</div>


		<?php endwhile; // End of the loop.
		
		?>

	</main><!-- #main -->

<?php get_footer();
