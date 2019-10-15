<?php

function load_stylesheeds()
{
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap');
	wp_register_style( 'style', get_template_directory_uri(). '/style.css', array(), false, 'all');
	wp_enqueue_style( 'style' );
}

add_action('wp_enqueue_scripts', 'load_stylesheeds');

function muscle_vehicles_scripts() {
    wp_enqueue_script( 'my-great-script', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'muscle_vehicles_scripts' );

add_image_size( 'small_image', 250, 180, true );

add_theme_support( 'post-thumbnails' );

register_nav_menus( 

	array(

		'pages_menu' => __('Main menu', 'theme'),
		'footer_menu' => __('Footer menu', 'theme'),

	)

);

function wpb_change_search_url() {
    if ( is_search() && ! empty( $_GET['s'] ) ) {
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
        exit();
    }   
}
add_action( 'template_redirect', 'wpb_change_search_url' );

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

?>