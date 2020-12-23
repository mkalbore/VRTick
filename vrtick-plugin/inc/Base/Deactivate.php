<?php
/**
 * @package  VrtickPlugins
 */
namespace Inc\Base;


//Wszystko co się dzieje podczas deaktywacji pluginu
class Deactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}