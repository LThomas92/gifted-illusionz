<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Gifted_Illusionz
 */

get_header();
?>

	<main id="primary" class="site-main search-page-results">

		<?php if ( have_posts() ) : ?>

			<header class="search-page-results__header">
				<h1 class="search-page-results__title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'gifted-illusionz' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<section class="search-page-results__container">
			<?php while ( have_posts() ) :
				the_post(); ?>

			<a href="<?php echo the_permalink(); ?>">
				<article class="search-page-results__single">
				<picture class="search-page-results__single-image">
				<?php the_post_thumbnail(); ?>
				</picture>
				<h2 class="search-page-results__single-title"><?php the_title(); ?></h2>
				<p class="search-page-results__single-desc"><?php get_the_excerpt(); ?></p>
				</article>
			</a>

			<?php endwhile; ?>

			<?php else : ?>

			<div class="no-search-results-container">
				<h3>Sorry, there are no search results, try your search again</h3>

				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label>
					<input style="line-height: 4rem" type="search" class="search-field" placeholder="Search for something..." value="<?php echo get_search_query(); ?>" name="s" />
					<button type="submit" class="search-submit"></button>
					</label>
				</form>
				
			</div>

		<?php endif; ?>

		</section>

	</main><!-- #main -->

<?php
get_footer();
