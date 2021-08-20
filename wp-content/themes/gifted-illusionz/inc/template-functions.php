<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Gifted_Illusionz
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function gifted_illusionz_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'gifted_illusionz_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function gifted_illusionz_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'gifted_illusionz_pingback_header' );

//Custom ACF Gutenberg Blocks

function acf_portfolio_item_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'image-slide-show',
			'title'				=> __('Image Slide Show'),
			'description'		=> __('A custom slideshow for images.'),
			'render_template'	=> 'template-parts/blocks/image-slideshow.php',
			'category'			=> 'layout',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'images, image, slideshow, slides, content' ),
		));
	}
}

add_action('acf/init', 'acf_portfolio_item_block');

//Custom Post Types
function collections_post_type() {

	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Collections', 'Post Type General Name' ),
			'singular_name'       => _x( 'Collection', 'Post Type Singular Name'),
			'menu_name'           => __( 'Collections'),
			'parent_item_colon'   => __( 'Parent Collection'),
			'all_items'           => __( 'All Collection' ),
			'view_item'           => __( 'View Collection' ),
			'add_new_item'        => __( 'Add New Collection' ),
			'add_new'             => __( 'Add New' ),
			'edit_item'           => __( 'Edit Collection' ),
			'update_item'         => __( 'Update Collection' ),
			'search_items'        => __( 'Search Collection' ),
			'not_found'           => __( 'Not Found' ),
			'not_found_in_trash'  => __( 'Not found in Trash' ),
		);

	// Set other options for Custom Post Type

		$args = array(
			'label'               => __( 'collections'),
			'description'         => __( 'Collections'),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'          => array( 'category', 'post_tag' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'						=> images-alt2,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,

		);

		// Registering your Custom Post Type
		register_post_type( 'collections', $args );
	}

	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not
	* unnecessarily executed.
	*/

	add_action( 'init', 'collections_post_type', 0 );

	function testimonials_post_type() {

	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Testimonials', 'Post Type General Name' ),
			'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name'),
			'menu_name'           => __( 'Testimonials'),
			'parent_item_colon'   => __( 'Parent Testimonial'),
			'all_items'           => __( 'All Testimonial' ),
			'view_item'           => __( 'View Testimonial' ),
			'add_new_item'        => __( 'Add New Testimonial' ),
			'add_new'             => __( 'Add New' ),
			'edit_item'           => __( 'Edit Testimonial' ),
			'update_item'         => __( 'Update Testimonial' ),
			'search_items'        => __( 'Search Testimonial' ),
			'not_found'           => __( 'Not Found' ),
			'not_found_in_trash'  => __( 'Not found in Trash' ),
		);

	// Set other options for Custom Post Type

		$args = array(
			'label'               => __( 'testimonials'),
			'description'         => __( 'Testimonials'),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'          => array( 'category', 'post_tag' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'			  => dashicons-superhero,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,

		);

		// Registering your Custom Post Type
		register_post_type( 'testimonials', $args );
	}

	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not
	* unnecessarily executed.
	*/

	add_action( 'init', 'testimonials_post_type', 0 );

