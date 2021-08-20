<?php $image = get_field('image'); ?>


<?php if( have_rows('image_slideshow') ): ?>
  <div class="image-slideshow">
    <?php while( have_rows('image_slideshow') ) : the_row();
        $image = get_sub_field('image'); ?>
        <picture>
        <img src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>">
        </picture>
		
  <?php endwhile; ?>

</div> <!-- image slideshow -->

	<div class="image-slideshow__arrows">
			<button title="Previous Slide" class="prev-arrow"></button>
			<button title="Next Slide" class="next-arrow"></button>
	</div> <!-- image slide show arrows -->



<?php else :
    // Do something...
endif; ?>
