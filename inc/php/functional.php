<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Prepare the custom code
 * @return string by using "echo"
 */
function spacexchimp_p006_prepare( $option ) {

    // Ignore admin, feed, robots or trackbacks
    if (is_admin() || is_feed() || is_robots() || is_trackback()) {
        return;
    }

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p006_plugin();

    // Put the value of the plugin options into an array for easier access
    $options = spacexchimp_p006_options();

    // Prepare a variable for storing the processed data
    $data_out = "";

    // If data is not empty...
    if ( ! empty( $options[$option] ) ) {

        $data_out .= $options[$option];

    }

    // Return the processed data
    echo $data_out;
}

/**
 * Process the custom code
 */
function spacexchimp_p006_exec_head_0() { spacexchimp_p006_prepare('header_beginning'); }
function spacexchimp_p006_exec_head_1() { spacexchimp_p006_prepare('header_end'); }
function spacexchimp_p006_exec_footer_0() { spacexchimp_p006_prepare('footer_beginning'); }
function spacexchimp_p006_exec_footer_1() { spacexchimp_p006_prepare('footer_end'); }

/**
 * Inject the custom code into the website's frontend (head and footer sections)
 */
add_action( 'wp_head', 'spacexchimp_p006_exec_head_0', 0 );
add_action( 'wp_head', 'spacexchimp_p006_exec_head_1', 1000 );
add_action( 'wp_footer', 'spacexchimp_p006_exec_footer_0', 0 );
add_action( 'wp_footer', 'spacexchimp_p006_exec_footer_1', 1000 );
