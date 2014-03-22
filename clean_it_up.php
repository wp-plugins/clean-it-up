<?php
/*
Plugin Name: Clean It Up
Plugin URI: http://wordpress.org/plugins/clean-it-up/
Description: clean up unwanted tag, category and post revision and optimize wordpress database.
Version: 0.0.3
Author: onmouseenter
Author URI: http://onmouseenter.com/how-to-easily-optimize-and-clean-up-your-wordpress-database/
License: GPLv2
*/

/* Copyright 2014 onmouseenter.com (e-mail : arie3456@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, please visit <http://www.gnu.org/licenses/>.

*/

/* Include various files need for major plugin file */

include_once('clean_it_up_create_main_menu.inc.php');

add_filter('plugin_action_links', 'clean_it_up_plugin_settings_link', 10, 2);
function clean_it_up_plugin_settings_link($links, $file) {

    if ( $file == 'clean-it-up/clean_it_up.php' ) {
        /* Insert the setting link */
        $links['settings'] = sprintf( '<a href="%s">%s</a>', admin_url( 'options-general.php?page=clean-it-up/clean_it_up_create_main_menu.inc.php' ), __( 'Settings', 'clean_it_up' ) );
        
    }
    return $links;

}
?>