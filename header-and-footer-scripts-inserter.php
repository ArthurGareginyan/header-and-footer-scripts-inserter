<?php
/**
 * Plugin Name: Head and Footer Scripts Inserter
 * Plugin URI: https://github.com/ArthurGareginyan/header-and-footer-scripts-inserter
 * Description: Easily add your scripts to the WordPress website's head and footer sections. This is a must have tool for authors and website's owners.
 * Author: Arthur Gareginyan
 * Author URI: http://www.arthurgareginyan.com
 * Version: 4.1
 * License: GPL3
 * Text Domain: header-and-footer-scripts-inserter
 * Domain Path: /languages/
 *
 * Copyright 2016-2017 Arthur Gareginyan (email : arthurgareginyan@gmail.com)
 *
 * This file is part of "Head and Footer Scripts Inserter".
 *
 * "Head and Footer Scripts Inserter" is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * "Head and Footer Scripts Inserter" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with "Head and Footer Scripts Inserter".  If not, see <http://www.gnu.org/licenses/>.
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
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Define global constants
 *
 * @since 4.1
 */
defined( 'HFSINS_DIR' ) or define( 'HFSINS_DIR', dirname( plugin_basename( __FILE__ ) ) );
defined( 'HFSINS_BASE' ) or define( 'HFSINS_BASE', plugin_basename( __FILE__ ) );
defined( 'HFSINS_URL' ) or define( 'HFSINS_URL', plugin_dir_url( __FILE__ ) );
defined( 'HFSINS_PATH' ) or define( 'HFSINS_PATH', plugin_dir_path( __FILE__ ) );
defined( 'HFSINS_TEXT' ) or define( 'HFSINS_TEXT', 'header-and-footer-scripts-inserter' );
defined( 'HFSINS_SLUG' ) or define( 'HFSINS_SLUG', 'header-and-footer-scripts-inserter' );
defined( 'HFSINS_PREFIX' ) or define( 'HFSINS_PREFIX', 'HFScriptsIns' );
defined( 'HFSINS_SETTINGS' ) or define( 'HFSINS_SETTINGS', 'HFScriptsIns' );
defined( 'HFSINS_NAME' ) or define( 'HFSINS_NAME', 'Head and Footer Scripts Inserter' );
defined( 'HFSINS_VERSION' ) or define( 'HFSINS_VERSION', get_file_data( __FILE__, array( 'Version' ) ) );

/**
 * Load the plugin modules
 *
 * @since 4.0
 */
require_once( HFSINS_PATH . 'inc/php/core.php' );
require_once( HFSINS_PATH . 'inc/php/enqueue.php' );
require_once( HFSINS_PATH . 'inc/php/version.php' );
require_once( HFSINS_PATH . 'inc/php/functional.php' );
require_once( HFSINS_PATH . 'inc/php/page.php' );
require_once( HFSINS_PATH . 'inc/php/messages.php' );
require_once( HFSINS_PATH . 'inc/php/uninstall.php' );
