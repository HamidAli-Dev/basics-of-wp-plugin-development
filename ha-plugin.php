<?php
/*
 * Plugin Name:       HA Plugin 
 * Plugin URI:        https://itactivities.com/
 * Description:       This is a test plugin for WP.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            Hamid Ali
 * Author URI:        https://itactivities.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ha-plugin
 */

if(!defined("ABSPATH")){
    exit; // Exit if accessed directly
}

// Define Plugin Version Constant
if ( ! defined( 'HA_PLUGIN_VERSION' ) ) {
    define( 'HA_PLUGIN_VERSION', '1.0.0' );
}
// Define Plugin Directory Path Constant
if( ! defined( 'HA_PLUGIN_DIR_PATH' ) ) {
    define( "HA_PLUGIN_DIR_PATH", plugin_dir_path( __FILE__ ) );
}

// Define Plugin URL Constant
if(!defined("HA_PLUGIN_DIR_URL")){
    define("HA_PLUGIN_DIR_URL", plugin_dir_url( __FILE__ ));
}

// include scripts
require_once HA_PLUGIN_DIR_PATH . 'inc/scripts.php';

// include hooks: actions and filters
require_once HA_PLUGIN_DIR_PATH . 'inc/hooks.php';

// include custom post types
require_once HA_PLUGIN_DIR_PATH . 'inc/cpt.php';

// include custom taxonomies
require_once HA_PLUGIN_DIR_PATH . 'inc/texonomy.php';

// include metaboxes
require_once HA_PLUGIN_DIR_PATH . 'inc/metaboxes.php';

// include shortcodes
require_once HA_PLUGIN_DIR_PATH . 'inc/shortcodes.php';