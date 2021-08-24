<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Gifted_Illusionz
 *
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		</div><!-- #content -->

		<?php $args = array(
		'post_type' => 'collections',
		'post_status' => 'publish',
		'posts_per_page' => -1,
);

$collectionsLoop = new WP_Query( $args );  ?>

<section class="collections__wrapper">
<div class="collections">
<?php while ( $collectionsLoop->have_posts() ) : $collectionsLoop->the_post(); ?>
				<div class="collections__item">
				<div class="collections__cta-container">
				<a class="collections__cta" href="<?php echo site_url() . '/portfolio'; ?>">View Collection</a>
				</div> <!-- container -->
				<div class="collections__content">
				<h1 class="collections__title"><?php echo the_title(); ?></h1>
				<div style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');" 
				class="collections__image"></div>
			 </div>  <!-- collections content -->

	</div> <!-- collection item -->
      <?php endwhile; ?>

</div> <!-- collections -->

</section>

<?php wp_reset_postdata();  ?>
	</div><!-- #primary -->
<?php get_footer(); ?>
