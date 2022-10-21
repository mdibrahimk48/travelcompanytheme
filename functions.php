<?php

add_action('after_setup_theme','travelcompanytheme');

if(!function_exists('travelcompanytheme')){

    function travelcompanytheme(){
	/**
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
    load_theme_textdomain( 'classictravelcom', get_template_directory() .'/languages' );

    add_theme_support('post-formats', array ('aside','link','gallery','qoute','video'));
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array('style','script', ) );
    add_theme_support( 'automatic-feed-links' );


    register_nav_menus( array(
        'primary' => __('Primary Menu', 'classictravelcom'),
        'secondary' => __('Secondary Menu', 'classictravelcom')
    ) );


        if(!function_exists('travelcomthemescript')){

            function travelcomthemescript(){

                wp_enqueue_style( 'style', get_stylesheet_uri() );

                //<!-- Google Fonts -->
                wp_register_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap' );
                wp_enqueue_style('fonts');

                //<!-- Bootstrap core CSS -->
                wp_enqueue_style( 'bscorecss', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), null, 'all');
            
                //<!-- Additional CSS Files -->
                wp_enqueue_style( 'css1', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), null, 'all');
                wp_enqueue_style( 'css2', get_template_directory_uri() . '/assets/css/templatemo-woox-travel.css', array(), null, 'all');
                wp_enqueue_style( 'css3', get_template_directory_uri() . '/assets/css/owl.css', array(), null, 'all');
                wp_enqueue_style( 'css4', get_template_directory_uri() . '/assets/css/animate.css', array(), null, 'all');

                // <!-- Google Swiper Link --> 
                wp_register_style( 'gswiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css' );
                wp_enqueue_style('gswiper');



                // <!-- /.footer-->
                //<!-- Bootstrap core JavaScript -->
                wp_enqueue_script( 'jqueryjs', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', null, null, true);
                wp_enqueue_script( 'bsjs', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', null, null, true);

                wp_enqueue_script( 'isojs', get_template_directory_uri() . '/assets/js/isotope.min.js', null, null, true);
                wp_enqueue_script( 'owljs', get_template_directory_uri() . '/assets/js/owl-carousel.js', null, null, true);
                wp_enqueue_script( 'wowjs', get_template_directory_uri() . '/assets/js/wow.js', null, null, true);
                wp_enqueue_script( 'tabsjs', get_template_directory_uri() . '/assets/js/tabs.js', null, null, true);
                wp_enqueue_script( 'popupjs', get_template_directory_uri() . '/assets/js/popup.js', null, null, true);
                wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/custom.js', null, null, true);
           
                
                if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                    wp_enqueue_script( 'comment-reply' );
                }
            
            }

        }

        add_action( 'wp_enqueue_scripts', 'travelcomthemescript' );

    }

} 


// Included Functions File
require_once('inc/custom-travel.php');


?>