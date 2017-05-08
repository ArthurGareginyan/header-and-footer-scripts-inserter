<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.0
 */
function HFScriptsIns_load_scripts_admin($hook) {

    // Return if the page is not a settings page of this plugin
    if ( 'settings_page_header-and-footer-scripts-inserter' != $hook ) {
        return;
    }

    // Style sheet
    wp_enqueue_style( 'HFScriptsIns-admin-css', HFSINS_URL . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( 'HFScriptsIns-admin-js', HFSINS_URL . 'inc/js/admin.js', array(), false, true );

    // Bootstrap library
    wp_enqueue_style( 'HFScriptsIns-bootstrap-css', HFSINS_URL . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( 'HFScriptsIns-bootstrap-theme-css', HFSINS_URL . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( 'HFScriptsIns-bootstrap-js', HFSINS_URL . 'inc/lib/bootstrap/bootstrap.js' );

    // CodeMirror library
    wp_enqueue_style( 'HFScriptsIns-codemirror-css', HFSINS_URL . 'inc/lib/codemirror/codemirror.css' );
    wp_enqueue_script( 'HFScriptsIns-codemirror-js', HFSINS_URL . 'inc/lib/codemirror/codemirror.js' );
    wp_enqueue_script( 'HFScriptsIns-codemirror-mode-htmlmixed-js', HFSINS_URL . 'inc/lib/codemirror/mode/htmlmixed.js' );
    wp_enqueue_script( 'HFScriptsIns-codemirror-mode-javascript-js', HFSINS_URL . 'inc/lib/codemirror/mode/javascript.js' );
    wp_enqueue_script( 'HFScriptsIns-codemirror-mode-xml-js', HFSINS_URL . 'inc/lib/codemirror/mode/xml.js' );
    wp_enqueue_script( 'HFScriptsIns-codemirror-mode-css-js', HFSINS_URL . 'inc/lib/codemirror/mode/css.js' );
    wp_enqueue_script( 'HFScriptsIns-codemirror-mode-active-line-js', HFSINS_URL . 'inc/lib/codemirror/addons/active-line.js' );

}
add_action( 'admin_enqueue_scripts', 'HFScriptsIns_load_scripts_admin' );
