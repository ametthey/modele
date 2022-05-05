<?php

/***********************************************************************
 * Integrate ACF directy in Theme
 *  https://support.advancedcustomfields.com/forums/topic/include-acf-to-my-plugin/
 ***********************************************************************/
if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( !class_exists('acf') ) {
    add_filter('acf/settings/path', 'cysp_acf_settings_path');
    function cysp_acf_settings_path( $path ) {
        $path = get_stylesheet_directory_uri() . '/includes/acf/' ;
        return $path;
    }
    add_filter('acf/settings/dir', 'cysp_acf_settings_dir');
    function cysp_acf_settings_dir( $path ) {
        $dir = get_stylesheet_directory_uri() . '/includes/acf/' ;
        return $dir;
    }
    add_filter('acf/settings/show_admin', '__return_true');
    // include_once( get_stylesheet_directory() . '/includes/acf/acf.php' );
    get_template_part( 'includes/acf/acf' );
    add_filter('acf/settings/save_json', 'cysp_acf_json_save_point');
    function cysp_acf_json_save_point( $path ) {
        $path = get_stylesheet_directory() . '/acf-json' ;
        return $path;
    }
    add_filter('acf/settings/load_json', 'cysp_acf_json_load_point');
    add_filter( 'site_transient_update_plugins', 'cysp_stop_acf_update_notifications', 11 );
    function cysp_stop_acf_update_notifications( $value ) {
        unset( $value->response[ get_stylesheet_directory_uri() . '/includes/acf/acf.php' ] );
        return $value;
    }
} else {
    add_filter('acf/settings/load_json', 'cysp_acf_json_load_point');
}

function cysp_acf_json_load_point( $paths ) {
    $paths[] = get_stylesheet_directory_uri() . 'acf-json-load';
    return $paths;
}

/***********************************************************************
 * Options Fields
 ***********************************************************************/

// CREDITS
if ( function_exists( 'acf_add_options_page' ) ) {

    // CONTENU DU SITE
    acf_add_options_page( array(
        'page_title'	=> 'Header',
        'menu_title'	=> 'Header',
        'menu_slug' 	=> 'acf-header',
        'capability'	=> 'edit_posts',
        'redirect'		=> false,
    ));

}
