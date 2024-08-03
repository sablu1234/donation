<?php
if(!function_exists('teaminfo')){
    function teaminfo(){
        register_post_type('team_member',
        array(
            'supports'=>array('title','editor','thumbnail'),
            'public'=>true,
            'has_archive'=>true,
            'labels'=>array(
                'name'=>'student info',
                'add_new_item'=>'add news',
                'add_new'=>'add new team member',
                'menu_name'=>'All team Member',
                'singular_name'=>'hasan',
                'featured_image'=>'feature',
                'set_featured_image'=>'set image',
            )
        )
    );
    }
}

add_action('init','teaminfo');
?>

