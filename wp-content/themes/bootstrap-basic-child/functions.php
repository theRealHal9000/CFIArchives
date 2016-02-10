<?php

add_theme_support( 'post-thumbnails' ); 

function authors_taxonomy_init() {
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
			'contributors',
			'post',
			array(
				'public' => true,
				'hierarchical' => true, //make false for tag-style taxonomies
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'query_var' => true,
				'has_archive' => true,
				'labels' => $labels,
				'rewrite' => array( 'slug' => 'contributors' )
			)
		);

		

	}
	add_action( 'init', 'authors_taxonomy_init' );


function issues_taxonomy_init() {
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
			'issue-info',
			'post',
			array(
				'public' => true,
				'hierarchical' => true, //make false for tag-style taxonomies
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'query_var' => true,
				'has_archive' => true,
				'labels' => $labels,
				'rewrite' => array( 'slug' => 'issue-info' )
			)
		);
	}
	add_action( 'init', 'issues_taxonomy_init' );
?>