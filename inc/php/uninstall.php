<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Delete options on uninstall
 *
 * @since 4.1
 */
function HFScriptsIns_uninstall() {
    delete_option( HFSINS_SETTINGS . '_settings' );
}
register_uninstall_hook( __FILE__, HFSINS_PREFIX . '_uninstall' );
