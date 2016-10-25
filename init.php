<?php
/*
 * Plugin Name: Version Control for jQuery
 * Plugin URI: https://github.com/IversenCarpeNoctem/version-control-for-query
 * Description: Version Control for jQuery is the easiest way to control the version of jQuery used on your website.
 * Version: 1.0.1
 * Author: Iversen - Carpe Noctem
 * Author URI: https://github.com/IversenCarpeNoctem
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: version-control-for-jquery
 * Domain Path: /languages
 */

// Block direct access
if(!defined('ABSPATH'))exit;

// Load translation
function vcfj_load_plugin_textdomain() {
    load_plugin_textdomain( 'version-control-for-query', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'vcfj_load_plugin_textdomain' );

// Include the settings page
include_once( plugin_dir_path( __FILE__ ) . 'settings.php');
