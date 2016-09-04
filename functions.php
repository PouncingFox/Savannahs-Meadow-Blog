<?php
function lavendar_scripts() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'lavendar_scripts' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

/*
* Creating a function to create our CPT
*/
function custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Movies', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Movies', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
		'all_items'           => __( 'All Movies', 'twentythirteen' ),
		'view_item'           => __( 'View Movie', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Movie', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Movie', 'twentythirteen' ),
		'update_item'         => __( 'Update Movie', 'twentythirteen' ),
		'search_items'        => __( 'Search Movie', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'movies', 'twentythirteen' ),
		'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
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
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'movies', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type', 0 );

/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
require_once('wp_bootstrap_navwalker.php');


add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'album', 'movies', 'quote' ) );

	return $query;
};

?>