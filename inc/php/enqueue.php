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
 * @since 4.1
 */
function HFScriptsIns_load_scripts_admin( $hook ) {

    // Return if the page is not a settings page of this plugin
    $settings_page = 'settings_page_' . HFSINS_SLUG;
    if ( $settings_page != $hook ) {
        return;
    }

    // Style sheet
    wp_enqueue_style( HFSINS_PREFIX . '-admin-css', HFSINS_URL . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( HFSINS_PREFIX . '-admin-js', HFSINS_URL . 'inc/js/admin.js', array(), false, true );

    // Bootstrap library
    wp_enqueue_style( HFSINS_PREFIX . '-bootstrap-css', HFSINS_URL . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( HFSINS_PREFIX . '-bootstrap-theme-css', HFSINS_URL . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( HFSINS_PREFIX . '-bootstrap-js', HFSINS_URL . 'inc/lib/bootstrap/bootstrap.js' );

    // CodeMirror library
    wp_enqueue_style( HFSINS_PREFIX . '-codemirror-css', HFSINS_URL . 'inc/lib/codemirror/codemirror.css' );
    wp_enqueue_script( HFSINS_PREFIX . '-codemirror-js', HFSINS_URL . 'inc/lib/codemirror/codemirror.js' );
    wp_enqueue_script( HFSINS_PREFIX . '-codemirror-mode-htmlmixed-js', HFSINS_URL . 'inc/lib/codemirror/mode/htmlmixed.js' );
    wp_enqueue_script( HFSINS_PREFIX . '-codemirror-mode-javascript-js', HFSINS_URL . 'inc/lib/codemirror/mode/javascript.js' );
    wp_enqueue_script( HFSINS_PREFIX . '-codemirror-mode-xml-js', HFSINS_URL . 'inc/lib/codemirror/mode/xml.js' );
    wp_enqueue_script( HFSINS_PREFIX . '-codemirror-mode-css-js', HFSINS_URL . 'inc/lib/codemirror/mode/css.js' );
    wp_enqueue_script( HFSINS_PREFIX . '-codemirror-mode-active-line-js', HFSINS_URL . 'inc/lib/codemirror/addons/active-line.js' );

}
add_action( 'admin_enqueue_scripts', HFSINS_PREFIX . '_load_scripts_admin' );
