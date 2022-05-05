<?php
/***********************************************************************
 *
 * Remove Genericons
 *
 ***********************************************************************/

function dequeue_my_css() {
    wp_dequeue_style('genericons');
    wp_deregister_style('genericons');
}
add_action('wp_enqueue_scripts','dequeue_my_css', 100);

/***********************************************************************
 *
 * Disable emojis
 *
 ***********************************************************************/

function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
    if ( 'dns-prefetch' == $relation_type ) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

        $urls = array_diff( $urls, array( $emoji_svg_url ) );
    }

    return $urls;
}
/***********************************************************************
 *
 * Hide WORDPRESS version
 *
 ***********************************************************************/

function wp_version_remove_version() {
    return '';
}
add_filter('the_generator', 'wp_version_remove_version');

/***********************************************************************
 *
 * Remove jQuery and jQuery Migrate
 *
 ***********************************************************************/
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];

        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}

add_action('wp_default_scripts', 'remove_jquery_migrate');

/***********************************************************************
 *
 * Defer JavaScript Scripts
 * [!] ATTENTION CA CAUSE DES BUGS DANS L'ADMIN
 *
 ***********************************************************************/

function _themename_defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', '_themename_defer_parsing_of_js', 10 );

/***********************************************************************
 *
 * Remove jQuery
 *
 ***********************************************************************/

function _themename_no_more_jquery(){
    wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', '_themename_no_more_jquery');

