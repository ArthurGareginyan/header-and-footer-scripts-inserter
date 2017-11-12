<?php
/**
 * Plugin Name: Head and Footer Scripts Inserter
 * Plugin URI: https://github.com/ArthurGareginyan/header-and-footer-scripts-inserter
 * Description: Easily add your scripts to the WordPress website's head and footer sections. This is a must have tool for authors and website's owners.
 * Author: Arthur Gareginyan
 * Author URI: https://www.arthurgareginyan.com
 * Version: 4.14
 * License: GPL3
 * Text Domain: header-and-footer-scripts-inserter
 * Domain Path: /languages/
 *
 * Copyright 2016-2017 Space X-Chimp Studio ( website : https://www.spacexchimp.com )
 *
 * This plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this plugin. If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *               █████╗ ██████╗ ████████╗██╗  ██╗██╗   ██╗██████╗
 *              ██╔══██╗██╔══██╗╚══██╔══╝██║  ██║██║   ██║██╔══██╗
 *              ███████║██████╔╝   ██║   ███████║██║   ██║██████╔╝
 *              ██╔══██║██╔══██╗   ██║   ██╔══██║██║   ██║██╔══██╗
 *              ██║  ██║██║  ██║   ██║   ██║  ██║╚██████╔╝██║  ██║
 *              ╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═╝
 *
 *   ██████╗  █████╗ ██████╗ ███████╗ ██████╗ ██╗███╗   ██╗██╗   ██╗ █████╗ ███╗   ██╗
 *  ██╔════╝ ██╔══██╗██╔══██╗██╔════╝██╔════╝ ██║████╗  ██║╚██╗ ██╔╝██╔══██╗████╗  ██║
 *  ██║  ███╗███████║██████╔╝█████╗  ██║  ███╗██║██╔██╗ ██║ ╚████╔╝ ███████║██╔██╗ ██║
 *  ██║   ██║██╔══██║██╔══██╗██╔══╝  ██║   ██║██║██║╚██╗██║  ╚██╔╝  ██╔══██║██║╚██╗██║
 *  ╚██████╔╝██║  ██║██║  ██║███████╗╚██████╔╝██║██║ ╚████║   ██║   ██║  ██║██║ ╚████║
 *   ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝ ╚═════╝ ╚═╝╚═╝  ╚═══╝   ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═══╝
 *
 */


/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Define global constants
 */
$plugin_data = get_file_data( __FILE__,
                              array(
                                     'name'    => 'Plugin Name',
                                     'version' => 'Version',
                                     'text'    => 'Text Domain'
                                   )
                            );
function spacexchimp_p006_define_constants( $constant_name, $value ) {
    $constant_name = 'SPACEXCHIMP_P006_' . $constant_name;
    if ( !defined( $constant_name ) )
        define( $constant_name, $value );
}
spacexchimp_p006_define_constants( 'DIR', dirname( plugin_basename( __FILE__ ) ) );
spacexchimp_p006_define_constants( 'BASE', plugin_basename( __FILE__ ) );
spacexchimp_p006_define_constants( 'URL', plugin_dir_url( __FILE__ ) );
spacexchimp_p006_define_constants( 'PATH', plugin_dir_path( __FILE__ ) );
spacexchimp_p006_define_constants( 'SLUG', dirname( plugin_basename( __FILE__ ) ) );
spacexchimp_p006_define_constants( 'NAME', $plugin_data['name'] );
spacexchimp_p006_define_constants( 'VERSION', $plugin_data['version'] );
spacexchimp_p006_define_constants( 'TEXT', $plugin_data['text'] );
spacexchimp_p006_define_constants( 'PREFIX', 'spacexchimp_p006' );
spacexchimp_p006_define_constants( 'SETTINGS', 'spacexchimp_p006' );

/**
 * Load the plugin modules
 */
require_once( SPACEXCHIMP_P006_PATH . 'inc/php/core.php' );
require_once( SPACEXCHIMP_P006_PATH . 'inc/php/upgrade.php' );
require_once( SPACEXCHIMP_P006_PATH . 'inc/php/versioning.php' );
require_once( SPACEXCHIMP_P006_PATH . 'inc/php/enqueue.php' );
require_once( SPACEXCHIMP_P006_PATH . 'inc/php/functional.php' );
require_once( SPACEXCHIMP_P006_PATH . 'inc/php/page.php' );
require_once( SPACEXCHIMP_P006_PATH . 'inc/php/messages.php' );
require_once( SPACEXCHIMP_P006_PATH . 'inc/php/uninstall.php' );
