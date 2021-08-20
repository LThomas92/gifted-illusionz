<?php get_header(); ?>

<section class="contact-us">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
	
	<h1 class="contact-us__title"><?php the_title(); ?></h1>
	<div class="contact-us__content">
		<?php the_content(); ?>
	</div>

<?php endwhile; endif;  ?>

</section>

<?php get_footer(); ?>