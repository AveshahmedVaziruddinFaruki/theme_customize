<?php
/*This file is part of astra-child, astra child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function astra_child_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
		wp_enqueue_style('childe2-style');
		
		//updated code - 19-02-2021 - START
		wp_enqueue_style( 'bootstrap-min-cs','https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css');
		//wp_enqueue_script( 'popper-min-js','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
		wp_enqueue_script( 'bootstrap-min-js','https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js');
		//updated code - 19-02-2021 - END
		
		//update 24-02-21
		wp_enqueue_style( 'font-awesome.min.css','https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
		
	}
}
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_child_styles' );

/*Write here your own functions */

///// update (18-02-2021)

add_shortcode('blog_post_sort', 'blog_post_sort' );
function blog_post_sort(){
     ob_start();
    require('new_blog_post.php');
     //ob_clean();
    return ob_get_clean();
}

add_shortcode('news_post', 'news_post' );
function news_post(){
     ob_start();
    require('news_post.php');
     //ob_clean();
    return ob_get_clean();
}

add_shortcode('supplier_post', 'supplier_post' );
function supplier_post(){
     ob_start();
    require('supplier_post.php');
     //ob_clean();
    return ob_get_clean();
}

add_shortcode('technicalpaperspostshortcode_post', 'technicalpaperspostshortcode_post' );
function technicalpaperspostshortcode_post(){
     ob_start();
    require('technicalPapers_post.php');
     //ob_clean();
    return ob_get_clean();
}

add_shortcode('supplier_post_page_shortcode', 'supplier_post_page_shortcode' );
function supplier_post_page_shortcode(){
     ob_start();
    require('supplier_post_page_shortcode.php');
     //ob_clean();
    return ob_get_clean();
}

// add_shortcode('journalPostShortcode', 'journalPostShortcode' );
// function journalPostShortcode(){
//      ob_start();
//     require('journalPostShortcode.php');
//      //ob_clean();
//     return ob_get_clean();
// }

add_shortcode('journal_shortcode', 'journal_shortcode' );
function journal_shortcode(){
     ob_start();
    require('journal_shortcode.php');
     //ob_clean();
    return ob_get_clean();
}

 function supplierDirectory_post() {
    register_post_type( 'Supplier',
        array('labels' => array(
            'name' => __('Supplier', 'post type general name'), /* This is the Title of the Group */
            'singular_name' => __('Supplier', 'post type singular name'), /* This is the individual type */
            'add_new' => __('Add New', 'custom post type item'), /* The add new menu item */
            'add_new_item' => __('Add New'), /* Add New Display Title */
            'edit' => __( 'Edit' ), /* Edit Dialog */
            'edit_item' => __('Edit'), /* Edit Display Title */
            'new_item' => __('New '), /* New Display Title */
            'view_item' => __('View'), /* View Display Title */
            'search_items' => __('Search news'), /* Search Custom Type Title */
            'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
            'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
        ), /* end of arrays */
            'description' => __( 'This is the example custom post type' ), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 2, /* this is what order you want it to appear in on the left hand side menu */
            'capability_type' => 'post',
            'hierarchical' => false,
            'rewrite' => array('slug' => 'supplier', 'with_front' => true ),
            'has_archive' => true,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor', 'thumbnail')
        )
    );

}

add_action( 'init', 'supplierDirectory_post' );

/// Technical Papers
 function TechnicalPapers_post() {
    register_post_type( 'TechnicalPapers',
        array('labels' => array(
            'name' => __('Technical Papers', 'post type general name'), /* This is the Title of the Group */
            'singular_name' => __('Technical Papers', 'post type singular name'), /* This is the individual type */
            'add_new' => __('Add New', 'custom post type item'), /* The add new menu item */
            'add_new_item' => __('Add New'), /* Add New Display Title */
            'edit' => __( 'Edit' ), /* Edit Dialog */
            'edit_item' => __('Edit'), /* Edit Display Title */
            'new_item' => __('New '), /* New Display Title */
            'view_item' => __('View'), /* View Display Title */
            'search_items' => __('Search news'), /* Search Custom Type Title */
            'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
            'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
        ), /* end of arrays */
            'description' => __( 'This is the example custom post type' ), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu'  => true,
            'query_var' => true,
            'menu_position' => 2, /* this is what order you want it to appear in on the left hand side menu */
            'capability_type' => 'post',
            'hierarchical' => false,
            'rewrite' => array('slug' => 'technical-papers', 'with_front' => true ),
            'has_archive' => true,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor', 'thumbnail'),
            'taxonomies'    => array(
                'Technical_Category'
            )
            //'taxonomies' => array( 'category' )
            //'taxonomies' => array('TechnicalPapers', 'category'),
        )
    );

}

add_action( 'init', 'TechnicalPapers_post' );
function create_technical_paper_category() {
    register_taxonomy('Technical_Category','technicalpapers', array(
        'hierarchical' => true,
        // $labels = array(
        //     'name' => _x( 'News Categories', 'taxonomy general name' ),
        //     'singular_name' => _x( 'Categories', 'taxonomy singular name' ),
        //     'search_items' =>  __( 'Search Categories' ),
        //     'all_items' => __( 'All Categories' ),
        //     'parent_item' => __( 'Parent Category' ),
        //     'parent_item_colon' => __( 'Parent Category:' ),
        //     'edit_item' => __( 'Edit Category' ), 
        //     'update_item' => __( 'Update Category' ),
        //     'add_new_item' => __( 'Add New Category' ),
        //     'new_item_name' => __( 'New Category Name' ),
        //     'menu_name' => __( 'Technical Category' ),
        // ),
        //'label'=> 'Technical Paper Category',

        'labels' => array(
            'name' => _x( 'News Categories', 'taxonomy general name' ),
            'singular_name' => _x( 'Categories', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Category' ),
            'all_items' => __( 'All Categories' ),
            'parent_item' => __( 'Parent Category' ),
            'parent_item_colon' => __( 'Parent Category:' ),
            'edit_item' => __( 'Edit Category' ),
            'update_item' => __( 'Update Category' ),
            'add_new_item' => __( 'Add New Category' ),
            'new_item_name' => __( 'New Category Name' ),
            'menu_name' => __( 'Technical Category' ),
        ),
        'public' => true, 
        'show_ui' => true,
        'show_in_menu'  => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        //'rewrite' => array( 'slug' => 'technical-papers' ),
    ));
}

add_action( 'init', 'create_technical_paper_category', 0 );

//create a custom taxonomy name it subjects for your posts

// function create_technical_paper_category() {
//   $labels = array(
//     'name' => _x( 'Categories', 'taxonomy general name' ),
//     'singular_name' => _x( 'Categories', 'taxonomy singular name' ),
//     'search_items' =>  __( 'Search Categories' ),
//     'all_items' => __( 'All Categories' ),
//     'parent_item' => __( 'Parent Category' ),
//     'parent_item_colon' => __( 'Parent Category:' ),
//     'edit_item' => __( 'Edit Category' ), 
//     'update_item' => __( 'Update Category' ),
//     'add_new_item' => __( 'Add New Category' ),
//     'new_item_name' => __( 'New Category Name' ),
//     'menu_name' => __( 'Categories' ),
//   ); 	

// // Now register the taxonomy
//   register_taxonomy('Technical Category',array('technicalpapers'), array(
//     'hierarchical' => true,
//     'labels' => $labels,
//     'show_ui' => true,
//     'show_in_rest' => true,
//     'show_admin_column' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'subject' ),
//   ));

// }



/// Journal Post
function Journal_post() {
    register_post_type( 'Journals',
        array('labels' => array(
            'name' => __('Journals', 'post type general name'), /* This is the Title of the Group */
            'singular_name' => __('Technical Papers', 'post type singular name'), /* This is the individual type */
            'add_new' => __('Add New', 'custom post type item'), /* The add new menu item */
            'add_new_item' => __('Add New'), /* Add New Display Title */
            'edit' => __( 'Edit' ), /* Edit Dialog */
            'edit_item' => __('Edit'), /* Edit Display Title */
            'new_item' => __('New '), /* New Display Title */
            'view_item' => __('View'), /* View Display Title */
            'search_items' => __('Search news'), /* Search Custom Type Title */
            'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
            'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
        ), /* end of arrays */
            'description' => __( 'This is the example custom post type' ), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 2, /* this is what order you want it to appear in on the left hand side menu */
            'capability_type' => 'post',
            'hierarchical' => false,
            'rewrite' => array('slug' => 'journals', 'with_front' => true ),
            'has_archive' => true,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor', 'thumbnail')
        )
    );

}

add_action( 'init', 'Journal_post' );