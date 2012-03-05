<?php 
/*
Plugin Name: Highlight Scheduled Posts
Plugin URI: http://www.darinkotter.com/
Description: Plugin to highlight any posts that are scheduled on the Posts screen
Author: Darin Kotter
Author URI: http://www.darinkotter.com/
Version: 0.1
*/


/******************************
* Global Variables
******************************/
$hsp_plugin_name = 'Highlight Scheduled Posts';

// Retrieve Plugin Settings from Options Table
$hsp_options = get_option('hsp_settings');

/******************************
* Includes
******************************/
include('includes/scripts.php'); // this controls all JS and CSS

?>