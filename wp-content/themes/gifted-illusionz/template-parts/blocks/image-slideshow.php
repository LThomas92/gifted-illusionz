<?php $image = get_field('image'); ?>


<?php if( have_rows('image_slideshow') ): ?>
  <div class="image-slideshow">
    <?php while( have_rows('image_slideshow') ) : the_row();
        $image = get_sub_field('image'); ?>
        <picture class="image-slideshow__image">
		<img src="<?php echo $image; ?>" alt="">
		</picture>
		
  <?php endwhile; ?>

</div> <!-- image slideshow -->

<?php else :
    // Do something...
endif; ?>
