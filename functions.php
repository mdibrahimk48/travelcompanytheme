<?php

add_action('after_setup_theme','theme_work_after_setup');

if(!function_exists('theme_work_after_setup')):

    function theme_work_after_setup(){
        load_theme_textdomain('Ibrahim', get_template_directory().'/language');

        add_theme_support('post-formats',array('aside','link','gallery','qoute','video'));
        add_theme_support('post-thumbnails');
    }

endif;

?>