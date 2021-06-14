<?php
/*
Author: Beaver Coffee
Author URI: https://beaver.coffee
Description: Add Google Sans to Beaver Builder font families.
Domain Path:
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Network: true
Plugin Name: BC BB Google Sans
Plugin URI: https://github.com/beavercoffee/bc-bb-google-sans
Requires at least: 5.7
Requires PHP: 5.6
Text Domain: bc-bb-google-sans
Version: 1.6.13
*/

if(defined('ABSPATH')){
    require_once(plugin_dir_path(__FILE__) . 'classes/class-bc-bb-google-sans.php');
    BC_BB_Google_Sans::get_instance(__FILE__);
}
