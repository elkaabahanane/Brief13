<?php
/*
Plugin Name: Footer Details
Plugin URI: http://www.youcode.ma
Description: Afficher differents informations sur le footer
Version: 1.0.0
Author: Hanane Elkaaba - Mohamed Kainouch
Author URI: http://www.youcode.ma
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

// Load Widget Class
require_once(plugin_dir_path(__FILE__) . '/footer-details-class.php');

// Register Widget
function register_footer_details()
{
  register_widget('Footer_Details');
}

// Hook in function
add_action('widgets_init', 'register_footer_details');
