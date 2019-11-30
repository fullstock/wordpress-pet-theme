<?php

add_action('wp_enqueue_scripts', 'theme_files');
add_action('after_setup_theme','pet_theme_features');
add_action('init','pet_theme_custom_post_type');

function pet_theme_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5', 
    array('comment-list', 'comment-form','search-form')
    );
}

function theme_files() { 
    wp_enqueue_script('main-js',get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('main_style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
}

function pet_theme_custom_post_type(){
    register_post_type('food', 
    array(
        'rewrite' => array('slug' => 'food'),
        'labels' => array(
          'name' => 'מזון למכירה',
          'singular_name' => 'מזון למכירה',
          'add_new_item' => 'הוספת חדש',
          'edit_item' => 'עריכה'  
        ), 
        'menu-icon' => 'dashicons-cart',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'custom-fields','title', 'thumbnail','editor', 'excerpt','comments'
        )
        )
    );

    register_post_type('animals', 
    array(
        'rewrite' => array('slug' => 'animals'),
        'labels' => array(
          'name' => 'חיות למכירה',
          'singular_name' => 'חיות למכירה',
          'add_new_item' => 'הוספת חדש',
          'edit_item' => 'עריכה'  
        ), 
        'menu-icon' => 'dashicons-cart',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'custom-fields','title', 'thumbnail','editor', 'excerpt','comments'
        )
        )
    );

    register_post_type('customers', 
    array(
        'rewrite' => array('slug' => 'customers'),
        'labels' => array(
          'name' => 'לקוחות',
          'singular_name' => 'לקוח',
          'add_new_item' => 'הוספת לקוח חדש',
          'edit_item' => 'עריכה'  
        ), 
        'menu-icon' => 'dashicons-cart',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'custom-fields','title', 'thumbnail','editor', 'excerpt','comments'
        )
        )
    );

    register_post_type('vaccinations', 
    array(
        'rewrite' => array('slug' => 'vaccinations'),
        'labels' => array(
          'name' => 'חיסונים',
          'singular_name' => 'חיסון',
          'add_new_item' => 'הוספת חדש',
          'edit_item' => 'עריכה'  
        ), 
        'menu-icon' => 'dashicons-menu',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'custom-fields', 'title', 'thumbnail','editor', 'excerpt','comments'
        )
        )
    );


}



