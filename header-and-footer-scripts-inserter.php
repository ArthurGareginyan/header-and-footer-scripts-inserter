<?php
/**
 * Plugin Name: Header and Footer Scripts Inserter
 * Plugin URI: http://mycyberuniverse.com/my_programs/wp-plugin-header-and-footer-scripts-inserter.html
 * Description: Easily add your scripts to the WordPress website's head or/and footer section. This is a must have tool for authors and website's owners.
 * Author: Arthur "Berserkr" Gareginyan
 * Author URI: http://www.arthurgareginyan.com
 * Version: 1.2
 * License: GPL3
 * Text Domain: HFScriptsIns
 * Domain Path: /languages/
 *
 * Copyright 2016  Arthur "Berserkr" Gareginyan  (email : arthurgareginyan@gmail.com)
 *
 * This file is part of "Header and Footer Scripts Inserter".
 *
 * "Header and Footer Scripts Inserter" is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * "Header and Footer Scripts Inserter" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with "Header and Footer Scripts Inserter".  If not, see <http://www.gnu.org/licenses/>.
 *
 */

/**
 * Prevent Direct Access
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Register text domain
 *
 * @since 0.1
 */
function HFScriptsIns_textdomain() {
	load_plugin_textdomain( 'HFScriptsIns', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'init', 'HFScriptsIns_textdomain' );

/**
 * Print direct link to Header and Footer Scripts Inserter admin page
 *
 * Fetches array of links generated by WP Plugin admin page ( Deactivate | Edit )
 * and inserts a link to the Header and Footer Scripts Inserter admin page
 *
 * @since  0.1
 * @param  array $links Array of links generated by WP in Plugin Admin page.
 * @return array        Array of links to be output on Plugin Admin page.
 */
function HFScriptsIns_settings_link( $links ) {
	$settings_page = '<a href="' . admin_url( 'options-general.php?page=header-and-footer-scripts-inserter.php' ) .'">' . __( 'Settings', 'HFScriptsIns' ) . '</a>';
	array_unshift( $links, $settings_page );
	return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'HFScriptsIns_settings_link' );

/**
 * Register "Header and Footer Scripts Inserter" submenu in "Settings" Admin Menu
 *
 * @since 0.1
 */
function HFScriptsIns_register_submenu_page() {
	add_options_page( __( 'Header and Footer Scripts Inserter', 'HFScriptsIns' ), __( 'Header and Footer Scripts Inserter', 'HFScriptsIns' ), 'manage_options', basename( __FILE__ ), 'HFScriptsIns_render_submenu_page' );
}
add_action( 'admin_menu', 'HFScriptsIns_register_submenu_page' );

/**
 * Attach Settings Page
 *
 * @since 0.1
 */
require_once( plugin_dir_path( __FILE__ ) . 'inc/settings_page.php' );

/**
 *  Enqueue style sheet for setting's page
 *
 * @since 0.1
 */
function HFScriptsIns_enqueue_scripts($hook) {

    // Return if the page is not a settings page of this plugin
    if ( 'settings_page_header-and-footer-scripts-inserter' != $hook ) {
        return;
    }

    wp_enqueue_style('styles', plugin_dir_url(__FILE__) . 'inc/style.css');
}
add_action('admin_enqueue_scripts', 'HFScriptsIns_enqueue_scripts');

/**
 * Register settings
 *
 * @since 0.1
 */
function HFScriptsIns_register_settings() {
	register_setting( 'HFScriptsIns_settings_group', 'HFScriptsIns_settings' );
}
add_action( 'admin_init', 'HFScriptsIns_register_settings' );

/**
 * Inject scripts in the frontend header and footer
 *
 * @since 1.0
 */
add_action('wp_head', 'HFScriptsIns_inject_head_beginning', 0);
add_action('wp_head', 'HFScriptsIns_inject_head_end', 1000);
add_action('wp_footer', 'HFScriptsIns_inject_footer_beginning', 0);
add_action('wp_footer', 'HFScriptsIns_inject_footer_end', 1000);

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
 * @since 1.0
 */
function HFScriptsIns_output($option) {

    // Ignore admin, feed, robots or trackbacks
    if (is_admin() || is_feed() || is_robots() || is_trackback()) {
        return;
    }

    // Read options from BD and declare variables
    $options = get_option( 'HFScriptsIns_settings' );
    $data = $options[$option];

    // If data is empty then exit
    if( empty( $data ) ){
        return;
    }

    // Add comments and Output
    echo "\n<!-- [BEGIN] Scripts added via Header-and-Footer-Scripts-Inserter plugin by Arthur Gareginyan. -->\n";
    echo $data;
    echo "\n<!-- [END] Scripts added via Header-and-Footer-Scripts-Inserter plugin by Arthur Gareginyan. -->\n\n";

}

/**
 * Delete options on uninstall
 *
 * @since 0.1
 */
function HFScriptsIns_uninstall() {
    delete_option( 'HFScriptsIns_settings' );
}
register_uninstall_hook( __FILE__, 'HFScriptsIns_uninstall' );

/* That's all folks! */
?>