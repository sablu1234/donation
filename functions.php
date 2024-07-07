<?php
// if(!function_exists('mytheme')){
//     function mytheme(){
//         add_theme_support('post-thumbnails');
//     }

//     function theme($content){
//         return $content= str_replace(__('Set featured image'),__('hasan'),$content);
//     }
//     add_filter('admin_post_thumbnail_html','theme');

// }
// add_action('after_setup_theme','mytheme');





function wporg_custom_post_type() {
	register_post_type('wporg_product',
		array(
			'labels'      => array(
				'name'          => __('Products hasan', 'textdomain'),
				'singular_name' => __('Product', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
		)
	);
}
add_action('init', 'wporg_custom_post_type');

?>