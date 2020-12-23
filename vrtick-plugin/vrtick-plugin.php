<?php
/**
* @package VrtickPlugin
*/
/*
Plugin Name: VRTickPlugin
Plugin URI: https://www.youtube.com/watch?v=dQw4w9WgXcQ
Description: My first attempt on writing Wordpress Plugin :)
Version: 0.0.1
Author: Marek Kwinta
Author URI: https://www.youtube.com/watch?v=dQw4w9WgXcQ
License: GPLv2 or Later
Text Domain: vrtick-plugin
*/

/*
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

	Copyright 2005-2015 Automattic, Inc.
*/

if ( ! defined( 'ABSPATH'))
{
 	 die;	
}

////////////////////////////////////////////////////////////
//Za pomocą Compossera został stworzony Autoload 

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


///////// HOOKI ///////////////////

	/**
	 * Kod wywoływany podczas aktywacji
	 */
	function activate_vrtick_plugin() {
		// generated a CPT
		Inc\Base\Activate::activate();
	}
	// activation Hook
	register_activation_hook( __FILE__, 'activate_vrtick_plugin' );

	/**
	 * Kod wywoływany podczas deaktywacji
	 */
	function deactivate_vrtick_plugin(){
		// flush rewrite rules
		Inc\Base\Deactivate::deactivate();
	}
	// deactivation Hook
	register_deactivation_hook( __FILE__, 'deactivate_vrtick_plugin' );


/**
 * Wywołuje wszyskie corowe classy pluginu
 */
if (class_exists( 'Inc\\Init' ) ) {
	Inc\Init::register_services();
}










