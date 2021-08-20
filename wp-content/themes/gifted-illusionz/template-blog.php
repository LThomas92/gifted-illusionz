<?php
/**
* Template Name: Blog Landing
*
* @package WordPress
* @subpackage Gifted_Illusionz
* @since Gifted_Illusionz 1.0
*/ ?>

<?php get_header(); ?>

<?php $args = array(
	'post_type' => 'post'
    );

    $blogPosts = new WP_Query($args); ?>

<section class="blog-landing">
	<h1 class="blog-landing__title"><?php the_title(); ?></h1>
	<?php if( $blogPosts->have_posts() ) { ?>
		<div class="blog-landing__grid">
        <?php while( $blogPosts->have_posts() ) {
            $blogPosts->the_post(); ?>
			<div class="blog-landing__article">
			<?php if(has_post_thumbnail()) { ?>
				<picture class="blog-landing__image">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				</picture>
			<?php } ?>

			<div class="blog-landing__content">
				<div class="blog-landing__meta">
				<?php $category = get_the_category($post->ID); 
				foreach($category as $category_name){
				 $catName = $category_name->cat_name;
				} ?>

					<em class="blog-landing__cat"><?php echo $catName; ?></em>
					<date><?php echo get_the_date(); ?></date>
				</div>

				<h2 class="blog-landing__content-title"><?php echo the_title(); ?></h2>
				<p class="blog-landing__excerpt"><?php echo get_the_excerpt();?></p>

				<div class="blog-landing__cta-container">
					<a class="blog-landing__cta" href="<?php the_permalink(); ?>">Read More</a>
				</div>

			</div>



			</div>
			<?php }
		} ?>
			<?php wp_reset_postdata(); ?>
		</div>
</section>

<?php get_footer(); ?>
