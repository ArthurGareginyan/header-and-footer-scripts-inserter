<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Inject scripts in the frontend head and footer
 *
 * @since 4.1
 */
add_action( 'wp_head', HFSINS_PREFIX . '_inject_head_beginning', 0 );
add_action( 'wp_head', HFSINS_PREFIX . '_inject_head_end', 1000 );
add_action( 'wp_footer', HFSINS_PREFIX . '_inject_footer_beginning', 0 );
add_action( 'wp_footer', HFSINS_PREFIX . '_inject_footer_end', 1000 );

/**
 * Prepare scripts for outputing
 *
 * @since 1.0
 */
function HFScriptsIns_inject_head_beginning() { HFScriptsIns_output('header_beginning'); }
function HFScriptsIns_inject_head_end() { HFScriptsIns_output('header_end'); }
function HFScriptsIns_inject_footer_beginning() { HFScriptsIns_output('footer_beginning'); }
function HFScriptsIns_inject_footer_end() { HFScriptsIns_output('footer_end'); }

/**
 * Outputs the given setting, if conditions are met
 *
 * @param string $option Option Name
 * @return output
 *
 * @since 4.1
 */
function HFScriptsIns_output( $option ) {

    // Ignore admin, feed, robots or trackbacks
    if (is_admin() || is_feed() || is_robots() || is_trackback()) {
        return;
    }

    // Read options from database and declare variables
    $options = get_option( HFSINS_SETTINGS . '_settings' );
    $data = $options[$option];

    // If data is empty then exit
    if( empty( $data ) ) {
        return;
    }

    // Add comments to output
    $data_out = "\n<!-- [BEGIN] Scripts added via Head-and-Footer-Scripts-Inserter plugin by Arthur Gareginyan. -->\n";
    $data_out .= $data;
    $data_out .= "\n<!-- [END] Scripts added via Head-and-Footer-Scripts-Inserter plugin by Arthur Gareginyan. -->\n\n";

    // Output
    echo $data_out;
}
