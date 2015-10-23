<?php
/**
 * Plugin Name: WatuPRO & qTranslate-X
 * Plugin URI: 
 * Description: Enables multilingual framework for plugin "WatuPRO".
 * Version: 0.4
 * Author: Kiboko Labs
 * Author URI: http://kibokolabs.com
 * License: GPL2
 * Tags: multilingual, multi, language, translation, qTranslate-X, WatuPRO
 * Author e-mail: support@kibokolabs.com
 */
if(!defined('ABSPATH'))exit;
define('WATUPQTR_VERSION','1.0');
add_filter('qtranslate_compatibility', 'watupqtr_qtrans_compatibility');
function watupqtr_qtrans_compatibility($compatibility){ return true; }
function watupqtr_init_language($url_info)
{
	if($url_info['doing_front_end']) {
		require_once(dirname(__FILE__)."/front.php");
	}else{
		require_once(dirname(__FILE__)."/admin.php");
	}
}
add_action('qtranslate_init_language','watupqtr_init_language');