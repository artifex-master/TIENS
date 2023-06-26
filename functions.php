<?php 
  function tiens_scripts_and_styles() {
    wp_enqueue_style('tiens_slick_styles', get_theme_file_uri('//tiens-product.object.pscloud.io/assets/css/slick.css'));
    wp_enqueue_style('tiens_slick_theme_styles', get_theme_file_uri('//tiens-product.object.pscloud.io/assets/css/slick-theme.css'));
    wp_enqueue_style('tiens_main_styles', get_theme_file_uri('/assets/css/style.css'));
    // wp_enqueue_style('tiens_main_styles', get_theme_file_uri('/assets/css/style.min.css'));
    wp_enqueue_style('tiens_font_styles', get_theme_file_uri('/assets/fonts/fonts.css'));
    wp_enqueue_style('tiens_font_awesome_styles', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    wp_enqueue_script('tiens_jquery_script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js', array('jquery'), '3.6.4', false);
    wp_enqueue_script('tiens_slick_min_script', 'https://tiens-product.object.pscloud.io/assets/js/slick.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('tiens_slick_script', 'https://tiens-product.object.pscloud.io/assets/js/slick.js', array('jquery'), '1.0', true);
    wp_enqueue_script('ties_theme_ionicons', 'https://unpkg.com/ionicons@5.2.3/dist/ionicons.js', array(), '5.2.3', true);
    wp_enqueue_script('tiens_font_scripts', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0', true);
  }

  add_action('wp_enqueue_scripts', 'tiens_scripts_and_styles');

  function tiens_setup_theme() {
    add_theme_support('title-tag', 'TIENS');

  }

  add_action('after_setup_theme', 'tiens_setup_theme');



function remove_embedded_style() {
  global $wp_widget_factory;
  remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}

add_action('wp_enqueue_scripts', 'remove_embedded_style');
