<?php 
/**
* Plugin Name: City Guides
* Plugin URI: https://github.com/zimal/wp-city-guides
* Description: Plugin pro správu ECT City Guides
* Version: 0.1
* Author: Luboš Zíma
* Author URI: http://luboszima.cz
* Text Domain: city-guidess
* License: GPL-2.0+
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

# security - deny direct acces to this files
defined( 'ABSPATH' ) or die( 'You can\'t directly access to this file' );

# init function
function ect_city_guides_init($params)
{
	return "Hello world";
}

# add shortcode
add_shortcode("city_guides", "ect_city_guides_init");