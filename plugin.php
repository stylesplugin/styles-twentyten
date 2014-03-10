<?php
/*
Plugin Name: Styles: TwentyTen
Plugin URI: http://stylesplugin.com
Description: Add Customize options to the TwentyTen theme using the <a href="http://wordpress.org/extend/plugins/styles/" target="_blank">Styles plugin</a>.
Version: 1.0.4
Author: Paul Clark, 10up
Author URI: http://pdclark.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Require: Styles 1.0.7
Styles Class: Styles_Child_Theme
*/

if ( !class_exists( 'Styles_Child_Notices' ) ) {
    include dirname( __FILE__ ) . '/classes/styles-child-notices/styles-child-notices.php';
}