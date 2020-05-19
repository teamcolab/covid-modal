<?php
/*
Plugin Name: Covid Modal
Plugin URI: https://github.com/teamcolab/covid-modal
Description: Covid-19 Modal
Version: 1.0
Author: Colab Multimedia, LLC
Author URI: https://www.teamcolab.com
License: GPL2
*/

/*
Copyright 2020  Colab Multimedia, LLC  (email : wordpress@teamcolab.com)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
namespace ColabCovidModal;

require_once('Settings.php');
require_once('Theme.php');
require_once('REST.php');

// Settings Page
add_action('admin_init', ['ColabCovidModal\Settings', 'admin_init']);
add_action('admin_menu', ['ColabCovidModal\Settings', 'admin_menu']);

// Modal Theming
add_action('wp_enqueue_scripts', ['ColabCovidModal\Theme', 'wp_enqueue_scripts']);

// Enable REST endpoint
add_action('rest_api_init', ['ColabCovidModal\REST', 'register_rest_routes'] );
