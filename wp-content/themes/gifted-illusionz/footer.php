<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gifted_Illusionz
 */
?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="site-footer__social-media">
				<a target="_blank" href="<?php echo get_field('instgram_footer_link', 'option');?>">
				<svg class="site-footer__instagram-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
				<style type="text/css">
					.st0{fill:#FFFFFF;}
				</style>
				<path class="st0" d="M12,2.2c3.2,0,3.6,0,4.9,0.1c3.3,0.1,4.8,1.7,4.9,4.9c0.1,1.3,0.1,1.6,0.1,4.8c0,3.2,0,3.6-0.1,4.8
					c-0.1,3.2-1.7,4.8-4.9,4.9c-1.3,0.1-1.6,0.1-4.9,0.1c-3.2,0-3.6,0-4.8-0.1c-3.3-0.1-4.8-1.7-4.9-4.9c-0.1-1.3-0.1-1.6-0.1-4.8
					c0-3.2,0-3.6,0.1-4.8c0.1-3.2,1.7-4.8,4.9-4.9C8.4,2.2,8.8,2.2,12,2.2z M12,0C8.7,0,8.3,0,7.1,0.1c-4.4,0.2-6.8,2.6-7,7
					C0,8.3,0,8.7,0,12s0,3.7,0.1,4.9c0.2,4.4,2.6,6.8,7,7C8.3,24,8.7,24,12,24s3.7,0,4.9-0.1c4.4-0.2,6.8-2.6,7-7C24,15.7,24,15.3,24,12
					s0-3.7-0.1-4.9c-0.2-4.4-2.6-6.8-7-7C15.7,0,15.3,0,12,0z M12,5.8c-3.4,0-6.2,2.8-6.2,6.2s2.8,6.2,6.2,6.2s6.2-2.8,6.2-6.2
					C18.2,8.6,15.4,5.8,12,5.8z M12,16c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,14.2,14.2,16,12,16z M18.4,4.2
					c-0.8,0-1.4,0.6-1.4,1.4S17.6,7,18.4,7c0.8,0,1.4-0.6,1.4-1.4S19.2,4.2,18.4,4.2z"/>
				</svg>
				</a>

				<a target="_blank" href="mailto:giftedillusionz@gmail.com">
				<svg class="site-footer__mail-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
				<style type="text/css">
					.st0{fill:#FFFFFF;}
				</style>
				<path class="st0" d="M0,3v18h24V3H0z M21.5,5L12,12.7L2.5,5C2.5,5,21.5,5,21.5,5z M2,19V7.2l10,8.1l10-8.1V19H2z"/>
				</svg>
				</a>

			</div> <!-- social media icons -->

			<div class="site-footer__links">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'secondary-menu',
				)
			);
			?>
			</div>

			<p class="site-footer__stamp">Designed by <a target="_blank" href="<?php echo get_field('laws_codes_link', 'option');?>" class="site-footer__lwc-stamp">@lawsandcodes</a></p>
		

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
