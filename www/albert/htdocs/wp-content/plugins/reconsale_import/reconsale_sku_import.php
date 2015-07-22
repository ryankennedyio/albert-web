<?php
/*
	Plugin Name: reconsale SKU import
	Plugin URI: http://allaerd.org/
	Description: Forked from Woocommerce CSV Import by Allaerd Mensonides
	
	Version: 3.0.5
	
	License: GPLv2 or later
	
	Author: Allaerd Mensonides

	
	Text Domain: woocsv-import
	Domain Path: /languages
*/


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//include the main classes
include dirname( __FILE__ ) . '/include/class-woocsv-import.php';

//global stuff
$woocsv_import = new woocsv_import();
$woocsv_product = '';

//languages
add_action('init', 'woocsv_load_plugin_textdomain');

if (!function_exists('woocsv_load_plugin_textdomain')) {

function woocsv_load_plugin_textdomain()
	{
	    load_plugin_textdomain('woocsv-import', FALSE, dirname(plugin_basename(__FILE__)).'/languages/');
	}
}

@ini_set('auto_detect_line_endings', true);

// the good hook for loading add-ons. others will be removed
do_action ('woocsv_after_init');



