<?php
/**
 * Plugin Name: Simple Youtube Subscribe 
 * Plugin URI:  https://github.com/sajib735/Simple-Youtube-Subscribe
 * Description: Simple wordpress youtube subscribe plugin
 * Version:     1.0
 * Author:      dev-sajib
 * Author URI:  https://github.com/sajib735
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/*
================================
* This function add all import script
=======================================
*/
function sus_script_add()
{
	// add google api script
	wp_register_script('sus_google_api_script', 'https://apis.google.com/js/platform.js', '', '', true);
	wp_enqueue_script('sus_google_api_script');
}
add_action('wp_enqueue_scripts', 'sus_script_add');

/*
=========================================
* This function run when this plugin is active 
=================================================
*/
function sus_plugin_active()
{
	// call the wp_enqueue_script function
	sus_script_add();
}
register_activation_hook(__FILE__, 'sus_plugin_active');


/*
=========================================
* This function run when this plugin is deactive 
===================================================
*/
function sus_plugin_deactive()
{

}

/*
===================================================
* This function run when this plugin is uninstall/remove
===========================================================
*/
function sus_plugin_uninstall()
{

}


