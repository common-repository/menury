<?php
/*
Plugin Name: Menury
Description: Enables Menury pages
Version:     1.0.0
Author:      Florian Röll
Author URI:  https://www.menury.com
Text Domain: menury
*/

defined( 'ABSPATH' ) or die;

define( 'MENURY_VER', '1.0.0' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */

require plugin_dir_path( __FILE__ ) . 'includes/menury.php';

function run_menury() {

	$plugin = new Menury();
	$plugin->run();

}
run_menury();

