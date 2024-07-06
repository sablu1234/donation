<?php
// wordpress hooks 2 types
// 1.add_actions()
// 2.add_filter()

// function mytheme(){
//     add_theme_support('post-thumbnails');
// }
// add_action('after_setup_theme','mytheme');




if (!function_exists('ourtheme')){
    function ourtheme(){
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats',array('aside','gallery','quote','image','video'));
    }
}
add_action('after_setup_theme','ourtheme');
?>