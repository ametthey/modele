<?php
add_action('wp_dashboard_setup', '_themename_remove_all_dashboard_meta_boxes', 9999 );

function _themename_remove_all_dashboard_meta_boxes()
{
    global $wp_meta_boxes;
    $wp_meta_boxes['dashboard']['normal']['core'] = array();
    $wp_meta_boxes['dashboard']['side']['core'] = array();
}
