<?php
/**
 * The template for displaying the Portfolio Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gifted_Illusionz
 */

get_header(); ?>

<section class="portfolio">
	<div class="portfolio__wrapper">

	<?php $args = array(
		'post_type' => 'collections',
		'post_status' => 'publish',
		'posts_per_page' => -1,
	); ?>

	<?php $collections = new WP_Query( $args ); ?>

	<ul class="portfolio__name-list">
	<li class="portfolio__name all-collections">All Collections</li>
	<?php while ( $collections->have_posts() ) : $collections->the_post(); ?>
	<?php $collectionName = $post->post_name;?>
		<li key="portfolio__<?php echo $collectionName; ?>" class="portfolio__name"><?php echo the_title(); ?></li>
		<?php endwhile; ?>
	</ul>

<?php $args = array( 'post_type' => 'collections' );
$images = get_posts( $args ); ?>
<div class="portfolio__grid">
<?php foreach ( $images as $image ) : setup_postdata( $image ); ?>

	<?php if( have_rows('images', $image->ID) ): ?>
	    <?php while( have_rows('images', $image->ID) ): the_row(); 
			$singleImage = get_sub_field('image'); ?>

		<picture key="portfolio__<?php echo $image->post_name;?>" class="portfolio__image">
			<img src="<?php echo $singleImage['url']; ?>" alt="">
		</picture>

	    <?php endwhile; ?>
	<?php endif; ?>

<?php endforeach; ?>

</div>

	<?php wp_reset_postdata();  ?>

</div>
	</div>
</section>

<?php get_footer(); ?>