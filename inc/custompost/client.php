<?php

function wporg_custom_post_type() {
	register_post_type('wporg_product',
		array(
			'supports'=> array( 'title', 'editor','thumbnail'),
				'public'      => true,
				'has_archive' => true,
				'labels'=>array(
					'name'=> 'student info',
					'add_new'=> 'Add New girl name',
					'not_found'=> 'no girl friends find',
					'menu_name' => 'All girl friends name',
				)
		)
	);
}
add_action('init', 'wporg_custom_post_type');



?>