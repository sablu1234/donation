<?php
if(!function_exists('mytheme')){
    function mytheme(){
        add_theme_support('post-thumbnails');
    }

   

}
add_action('after_setup_theme','mytheme');

include_once('inc/custompost/client.php');
include_once('inc/custompost/team.php');



// if (!function_exists('Css')){

// 	function Css(){
// 		wp_enqueue_style( 'style', get_stylesheet_uri() );
// 		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/assets/css/style.css');
// 		wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/assets/css/responsive.css');
// 		wp_enqueue_script( 'responsive_js', get_template_directory_uri() . '/assets/js/script.js');


// 	}
// }
// add_action( 'wp_enqueue_scripts', 'Css' );



/*

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => 'Post Types',
		'singular_name'         => 'Post Type',
		
		'name_admin_bar'        => 'Post Type',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attribute'menu_name'             => 'Post Types',s',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Post Type',
		'description'           => 'Post Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type', $args );

}
add_action( 'init', 'custom_post_type', 0 );

*/

?>