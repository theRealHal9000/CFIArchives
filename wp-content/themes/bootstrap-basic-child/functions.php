<?php


add_theme_support( 'post-thumbnails' ); 


function SRAMauthors_taxonomy_init() {
		$labels = array(
			'name' => _x( 'Contributors', 'taxonomy general name'),
			'singular_name' => _x( 'Author', 'taxonomy singular name'),
			'search_items' => __( 'Search Authors' ),
			'all_items' => __( 'All Authors' ),
			'parent_item' => __( 'Leave This Blank' ),
			'parent_item_colon' => __( 'Not Applicable:' ),
			'edit_item' => __( 'Edit Author' ),
			'update_item' => __( 'Update Author' ),
			'add_new_item' => __( 'Add New Author' ),
			'new_item_name' => __( 'New Author Name' ),
			'menu_name' => __( 'Authors' ),
		);

		register_taxonomy(
			'SRAM-contributors',
			'SRAM',
			array(
				'public' => true,
				'hierarchical' => true, //make false for tag-style taxonomies
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'query_var' => true,
				'has_archive' => true,
				'labels' => $labels,
				'rewrite' => array( 'slug' => 'sram-contributors' )
			)
		);
	}
add_action( 'init', 'SRAMauthors_taxonomy_init' );


function exampleauthors_taxonomy_init() {
		$labels = array(
			'name' => _x( 'Contributors', 'taxonomy general name'),
			'singular_name' => _x( 'Author', 'taxonomy singular name'),
			'search_items' => __( 'Search Authors' ),
			'all_items' => __( 'All Authors' ),
			'parent_item' => __( 'Leave This Blank' ),
			'parent_item_colon' => __( 'Not Applicable:' ),
			'edit_item' => __( 'Edit Author' ),
			'update_item' => __( 'Update Author' ),
			'add_new_item' => __( 'Add New Author' ),
			'new_item_name' => __( 'New Author Name' ),
			'menu_name' => __( 'Authors' ),
		);

		register_taxonomy(
			'example-contributors',
			'example',
			array(
				'public' => true,
				'hierarchical' => true, //make false for tag-style taxonomies
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'query_var' => true,
				'has_archive' => true,
				'labels' => $labels,
				'rewrite' => array( 'slug' => 'example-contributors' )
			)
		);
	}
add_action( 'init', 'exampleauthors_taxonomy_init' );


function SRAMissues_taxonomy_init() {
	$labels = array(
			'name' => _x( 'Issues', 'taxonomy general name'),
			'singular_name' => _x( 'Issue', 'taxonomy singular name'),
			'search_items' => __( 'Search Issues' ),
			'all_items' => __( 'All Issues' ),
			'parent_item' => __( 'Leave This Blank' ),
			'parent_item_colon' => __( 'Not Applicable:' ),
			'edit_item' => __( 'Edit Issue' ),
			'update_item' => __( 'Update Issue' ),
			'add_new_item' => __( 'Add New Issue' ),
			'new_item_name' => __( 'New Issue' ),
			'menu_name' => __( 'Issue Info' ),
		);

		register_taxonomy(
			'SRAM-issue-info',
			'SRAM',
			array(
				'public' => true,
				'hierarchical' => true, //make false for tag-style taxonomies
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'query_var' => true,
				'has_archive' => true,
				'labels' => $labels,
				'rewrite' => array( 'slug' => 'sram-issue-info' )
			)
		);
	}
add_action( 'init', 'SRAMissues_taxonomy_init' );


function exampleissues_taxonomy_init() {
	$labels = array(
			'name' => _x( 'Issues', 'taxonomy general name'),
			'singular_name' => _x( 'Issue', 'taxonomy singular name'),
			'search_items' => __( 'Search Issues' ),
			'all_items' => __( 'All Issues' ),
			'parent_item' => __( 'Leave This Blank' ),
			'parent_item_colon' => __( 'Not Applicable:' ),
			'edit_item' => __( 'Edit Issue' ),
			'update_item' => __( 'Update Issue' ),
			'add_new_item' => __( 'Add New Issue' ),
			'new_item_name' => __( 'New Issue' ),
			'menu_name' => __( 'Issue Info' ),
		);

		register_taxonomy(
			'example-issue-info',
			'example',
			array(
				'public' => true,
				'hierarchical' => true, //make false for tag-style taxonomies
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'query_var' => true,
				'has_archive' => true,
				'labels' => $labels,
				'rewrite' => array( 'slug' => 'example-issue-info' )
			)
		);
	}
add_action( 'init', 'exampleissues_taxonomy_init' );


function SRAMcategory_taxonomy_init() {
	$labels = array(
			'name' => _x( 'Categories', 'taxonomy general name'),
			'singular_name' => _x( 'Category', 'taxonomy singular name'),
			'search_items' => __( 'Search Categories' ),
			'all_items' => __( 'All Categories' ),
			'parent_item' => __( 'Leave This Blank' ),
			'parent_item_colon' => __( 'Not Applicable:' ),
			'edit_item' => __( 'Edit Category' ),
			'update_item' => __( 'Update Category' ),
			'add_new_item' => __( 'Add New Category' ),
			'new_item_name' => __( 'New Category' ),
			'menu_name' => __( 'Category Info' ),
		);

		register_taxonomy(
			'SRAM-category',
			'SRAM',
			array(
				'public' => true,
				'hierarchical' => true, //make false for tag-style taxonomies
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'query_var' => true,
				'has_archive' => true,
				'labels' => $labels,
				'rewrite' => array( 'slug' => 'sram-category' )
			)
		);
	}
add_action( 'init', 'SRAMcategory_taxonomy_init' );


function examplecategory_taxonomy_init() {
	$labels = array(
			'name' => _x( 'Categories', 'taxonomy general name'),
			'singular_name' => _x( 'Category', 'taxonomy singular name'),
			'search_items' => __( 'Search Categories' ),
			'all_items' => __( 'All Categories' ),
			'parent_item' => __( 'Leave This Blank' ),
			'parent_item_colon' => __( 'Not Applicable:' ),
			'edit_item' => __( 'Edit Category' ),
			'update_item' => __( 'Update Category' ),
			'add_new_item' => __( 'Add New Category' ),
			'new_item_name' => __( 'New Category' ),
			'menu_name' => __( 'Category Info' ),
		);

		register_taxonomy(
			'example-category',
			'example',
			array(
				'public' => true,
				'hierarchical' => true, //make false for tag-style taxonomies
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'query_var' => true,
				'has_archive' => true,
				'labels' => $labels,
				'rewrite' => array( 'slug' => 'example-category' )
			)
		);
	}
add_action( 'init', 'examplecategory_taxonomy_init' );


function SRAM_register_sidebar(){
    register_sidebar(array(
        'name' => 'sram',
        'id' => 'sram',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
}
add_action( 'widgets_init', 'SRAM_register_sidebar' );


function example_register_sidebar(){
    register_sidebar(array(
        'name' => 'example',
        'id' => 'example',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
}
add_action( 'widgets_init', 'example_register_sidebar' );


function create_SRAM_post_type() {
	$args = array(
	      'public' => true,
	      'label'  => 'sram',
	      'menu_position' => 5,
	      'taxonomies' => array('post_tag','SRAM-issue-info','SRAM-contributors', 'SRAM-category'), 
	      'has_archive' => true,
	      'description' => __( 'The Scientific Review of Alternative Medicine' )
	    );
	    register_post_type( 'SRAM', $args );
	}
add_action( 'init', 'create_SRAM_post_type' );


function create_example_post_type() {
	$args = array(
	      'public' => true,
	      'label'  => 'example',
	      'menu_position' => 5,
	      'taxonomies' => array('post_tag','example-issue-info','example-contributors', 'example-category'), 
	      'has_archive' => true,
	      'description' => __( 'A Sample Publication' )
	    );
	    register_post_type( 'example', $args );
	}
add_action( 'init', 'create_example_post_type' );


function add_custom_types_to_tax( $query ) {
if( is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {

// Get all your post types
$post_types = array('sram', 'example');

$query->set( 'post_type', $post_types );
return $query;
}
}
add_filter( 'pre_get_posts', 'add_custom_types_to_tax' );


?>