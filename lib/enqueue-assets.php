<?php

/**************************************************************************
 * Enqueue Styles and Scripts
 ***********************************************************************/
function _themename_assets() {
    wp_enqueue_style( '_themename-stylesheet', get_stylesheet_directory_uri() . '/dist/assets/css/bundle.css', [], filemtime( get_template_directory().'/dist/assets/css/bundle.css' ) ,  'all' );
    wp_enqueue_script( '_themename-scripts', get_stylesheet_directory_uri() . '/dist/assets/js/main.js',[] , filemtime( get_template_directory().'/dist/assets/js/main.js' ) ,   true );
}
add_action( 'wp_enqueue_scripts', '_themename_assets' );

/**************************************************************************
 * Remove Block editor and co
 ***********************************************************************/
function wp_juice_cleanse() {

    wp_dequeue_style('wp-block-library');

    // This also removes some inline CSS variables for colors since 5.9 - global-styles-inline-css
    wp_dequeue_style('global-styles');

    // WooCommerce - you can remove the following if you don't use Woocommerce
    wp_dequeue_style('wc-block-style');
    wp_dequeue_style('wc-blocks-vendors-style');
    wp_dequeue_style('wc-blocks-style');

}
add_action( 'wp_enqueue_scripts', 'wp_juice_cleanse', 200 );

function unqueue_af_css() {
    wp_deregister_style('acf-input');
    wp_deregister_style('acf-pro-input');
    wp_deregister_style('af-form-style');
}
add_action( 'wp_enqueue_scripts', 'unqueue_af_css', 9999 );

function form_remove_enqueues() {
  // Stylized select (including user and post fields)
  wp_dequeue_script( 'select2' );
  wp_dequeue_style( 'select2' );

  // Date picker
  wp_dequeue_script( 'jquery-ui-datepicker' );
  wp_dequeue_style( 'acf-datepicker' );

  // Date and time picker
  wp_dequeue_script( 'acf-timepicker' );
  wp_dequeue_style( 'acf-timepicker' );

  // Color picker
  wp_dequeue_script( 'wp-color-picker' );
  wp_dequeue_style( 'wp-color-picker' );

  // Input
  wp_dequeue_script( 'acf-input' );
  wp_dequeue_style( 'acf-input' );

  wp_dequeue_style( 'acf' );
  wp_deregister_style( 'acf' );
  wp_dequeue_style( 'acf-input' );
  wp_deregister_style( 'acf-input' );
  wp_dequeue_style( 'acf-global' );
  wp_deregister_style( 'acf-global' );
  wp_dequeue_style( 'acf-field-group' );
  wp_deregister_style( 'acf-field-group' );
}
add_action( 'af/form/enqueue/key=form_6248328569951', 'form_remove_enqueues' );
