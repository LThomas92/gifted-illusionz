<?php
/**
* Template Name: About
*
* @package WordPress
* @subpackage Gifted_Illusionz
* @since Gifted_Illusionz 1.0
*/ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="about-section">

<?php if(has_post_thumbnail()) { ?>
<figure>
<?php the_post_thumbnail(); ?>
</figure>
<?php } else { ?>
<?php } ?>

<div class="about-section__content">
<?php $aboutTitle = get_field('about_title');?>
<h1 class="about-title"><?php echo $aboutTitle; ?></h1>
 <?php the_content(); ?>
</div> <!-- about section content -->

<?php endwhile; ?>
</div> <!-- about section -->
<?php endif;
?>

<?php get_footer(); ?>
