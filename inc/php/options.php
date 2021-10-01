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

    // Retrieve options from database
    $options = get_option( $plugin['settings'] . '_settings' );

    // Make the "$options" array if the plugin options data in the database is not exist
    if ( ! is_array( $options ) ) {
        $options = array();
    }

    // Create an array with options
    $array = $options;
    $list = array(
        'footer_beginning' => (string) '', // custom
        'footer_end' => (string) '', // custom
        'header_beginning' => (string) '', // custom
        'header_end' => (string) '', // custom
        'hidden_scrollto' => (integer) '0', // _control_hidden
    );
    foreach ( $list as $name => $default ) {

        // Set default value if option is empty
        $array[$name] = !empty( $options[$name] ) ? $options[$name] : $default;

        // Sanitize and modify by type of option
        if ( is_string( $default ) === true ) {
            $array[$name] = (string) $array[$name];
        } elseif ( is_int( $default ) === true ) {
            $array[$name] = (integer) $array[$name];
        } elseif ( is_bool( $default ) === true ) {
            $array[$name] = ( $array[$name] == 'on' || $array[$name] == '1' || $array[$name] == 'true' ) ? true : false;
        }
    }

    // Sanitize data
    //$array['footer_beginning'] = esc_textarea( $array['footer_beginning'] );
    //$array['footer_end'] = esc_textarea( $array['footer_end'] );
    //$array['header_beginning'] = esc_textarea( $array['header_beginning'] );
    //$array['header_end'] = esc_textarea( $array['header_end'] );
    //$array['hidden_scrollto'] = esc_textarea( $array['hidden_scrollto'] );

    // Modify data


    // Return the processed data
    return $array;
}
