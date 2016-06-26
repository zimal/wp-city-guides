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

############################## BACKEND ##############################
# register plugin into menu in BE
add_action( 'admin_menu', 'ect_add_admin_menu' );
add_action( 'admin_init', 'ect_backend_init' );

# BE - init backend function
function ect_backend_init($params)
{
	register_setting( 'pluginPage', 'ect_settings' );

	add_settings_section(
		'ect_pluginPage_section', 
		__( 'Your section description', 'city-guides' ), 
		'ect_settings_section_callback', 
		'pluginPage'
	);
}

function ect_add_admin_menu(  ) { 

	add_menu_page( 'City Guides', 'City Guides', 'manage_options', 'city_guides', 'ect_options_page' );
}

function ect_text_field_0_render(  ) { 

	$options = get_option( 'ect_settings' );
	?>
	<input type='text' name='ect_settings[ect_text_field_0]' value='<?php echo $options['ect_text_field_0']; ?>'>
	<?php

}


function ect_settings_section_callback(  ) { 

	echo __( 'This section description', 'city-guides' );

}


function ect_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>City Guides</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php
}

############################## FRONTEND ##############################
# FE - init function
function ect_frontend_init($params)
{
	return "Hello world";
}

# add shortcode
add_shortcode("city_guides", "ect_city_guides_init");