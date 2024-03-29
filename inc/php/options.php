<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Callback function that returns an array with the value of the plugin options
 * @return array
 */
function spacexchimp_p006_options() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p006_plugin();

    // Retrieve the plugin options data from the database
    $array = get_option( $plugin['settings'] . '_settings' );

    // Fill in the "$array" variable if the plugin options data in the database is not exist
    if ( ! is_array( $array ) ) {
        $array = array();
    }

    // Prepare the plugin options data for use
    $list = array(
        'footer_beginning' => (string) '', // custom
        'footer_end' => (string) '', // custom
        'header_beginning' => (string) '', // custom
        'header_end' => (string) '', // custom
        'hidden_scrollto' => (integer) '0', // _control_hidden
    );
    foreach ( $list as $name => $default ) {

        // Set default value if option is empty
        $array[$name] = ! empty( $array[$name] ) ? $array[$name] : $default;

        // Cast and validate by type of option
        if ( is_string( $default ) === true ) {
            $array[$name] = (string) $array[$name];
        } elseif ( is_int( $default ) === true ) {
            $array[$name] = (integer) $array[$name];
        } elseif ( is_bool( $default ) === true ) {
            $array[$name] = filter_var( $array[$name], FILTER_VALIDATE_BOOLEAN );
        }
    }

    // Sanitize data
    //$array['footer_beginning'] = esc_textarea( $array['footer_beginning'] );
    //$array['footer_end'] = esc_textarea( $array['footer_end'] );
    //$array['header_beginning'] = esc_textarea( $array['header_beginning'] );
    //$array['header_end'] = esc_textarea( $array['header_end'] );

    // Modify data


    // Return the processed data
    return $array;
}

/**
 * Write the options to a text file for development/testing purposes
 */
function spacexchimp_p006_test() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p006_plugin();

    // Put the value of the plugin options into an array for easier access
    $options = spacexchimp_p006_options();

    // Prepare a variable for storing the processed data
    $data = print_r( $options, true );

    // Name and destination of the backup files
    $date = date( 'm-d-Y_hia' );
    $file_location_date = $plugin['path'] . '/test/' . $date . '.txt';
    $file_location_last = $plugin['path'] . '/test/last.txt';

    // Make two backup files
    file_put_contents( $file_location_date, $data );
    file_put_contents( $file_location_last, $data );
}
//spacexchimp_p006_test();
