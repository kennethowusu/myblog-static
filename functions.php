<?php


   //=====================enable thumbnails====================//
   add_theme_support( 'post-thumbnails' );
  
  //=========include scripts and stylesheets================//
  function add_theme_styles( $handle, $src = '', $deps = array(), $ver = false, $in_footer = false ) {
      wp_enqueue_style('main-style',get_template_directory_uri().'/css/style.css');
  }
  add_action('wp_enqueue_scripts','add_theme_styles');

  //======================include scripts===================//
  function add_theme_scripts(){
     wp_enqueue_script('main-script',get_template_directory_uri() .'/js/script.js',null,1.0,true);
  }

  add_action('wp_enqueue_scripts','add_theme_scripts');
   ?>
