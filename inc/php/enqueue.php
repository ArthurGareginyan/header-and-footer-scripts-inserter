<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.5
 */
function HFScriptsIns_load_scripts_admin( $hook ) {

    // Put value of constants to variables for easier access
    $slug = HFSINS_SLUG;
    $prefix = HFSINS_PREFIX;
    $url = HFSINS_URL;

    // Return if the page is not a settings page of this plugin
    $settings_page = 'settings_page_' . $slug;
    if ( $settings_page != $hook ) {
        return;
    }

    // Load jQuery library
    wp_enqueue_script( 'jquery' );

    // Bootstrap library
    wp_enqueue_style( $prefix . '-bootstrap-css', $url . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( $prefix . '-bootstrap-theme-css', $url . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( $prefix . '-bootstrap-js', $url . 'inc/lib/bootstrap/bootstrap.js' );

    // CodeMirror library
    wp_enqueue_style( $prefix . '-codemirror-css', $url . 'inc/lib/codemirror/codemirror.css' );
    wp_enqueue_script( $prefix . '-codemirror-js', $url . 'inc/lib/codemirror/codemirror.js' );
    wp_enqueue_script( $prefix . '-codemirror-mode-htmlmixed-js', $url . 'inc/lib/codemirror/mode/htmlmixed.js' );
    wp_enqueue_script( $prefix . '-codemirror-mode-javascript-js', $url . 'inc/lib/codemirror/mode/javascript.js' );
    wp_enqueue_script( $prefix . '-codemirror-mode-xml-js', $url . 'inc/lib/codemirror/mode/xml.js' );
    wp_enqueue_script( $prefix . '-codemirror-mode-css-js', $url . 'inc/lib/codemirror/mode/css.js' );
    wp_enqueue_script( $prefix . '-codemirror-mode-active-line-js', $url . 'inc/lib/codemirror/addons/active-line.js' );

    // Style sheet
    wp_enqueue_style( $prefix . '-admin-css', $url . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( $prefix . '-admin-js', $url . 'inc/js/admin.js', array(), false, true );

}
add_action( 'admin_enqueue_scripts', HFSINS_PREFIX . '_load_scripts_admin' );
