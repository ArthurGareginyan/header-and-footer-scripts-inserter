<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Inject scripts in the frontend head and footer
 */
add_action( 'wp_head', 'spacexchimp_p006_inject_head_beginning', 0 );
add_action( 'wp_head', 'spacexchimp_p006_inject_head_end', 1000 );
add_action( 'wp_footer', 'spacexchimp_p006_inject_footer_beginning', 0 );
add_action( 'wp_footer', 'spacexchimp_p006_inject_footer_end', 1000 );

/**
 * Prepare scripts for outputing
 */
function spacexchimp_p006_inject_head_beginning() { spacexchimp_p006_output('header_beginning'); }
function spacexchimp_p006_inject_head_end() { spacexchimp_p006_output('header_end'); }
function spacexchimp_p006_inject_footer_beginning() { spacexchimp_p006_output('footer_beginning'); }
function spacexchimp_p006_inject_footer_end() { spacexchimp_p006_output('footer_end'); }

/**
 * Outputs the given setting, if conditions are met
 */
function spacexchimp_p006_output( $option ) {

    // Ignore admin, feed, robots or trackbacks
    if (is_admin() || is_feed() || is_robots() || is_trackback()) {
        return;
    }

    // Read options from database and declare variables
    $options = get_option( SPACEXCHIMP_P006_SETTINGS . '_settings' );
    $data = $options[$option];

    // If data is empty then exit
    if( empty( $data ) ) {
        return;
    }

    // Add comments to output
    $data_out = "\n<!-- [BEGIN] Scripts added via Head-and-Footer-Scripts-Inserter plugin by Space X-Chimp Studio ( https://www.spacexchimp.com ) -->\n";
    $data_out .= $data;
    $data_out .= "\n<!-- [END] Scripts added via Head-and-Footer-Scripts-Inserter plugin by Space X-Chimp Studio ( https://www.spacexchimp.com ) -->\n\n";

    // Output
    echo $data_out;
}
