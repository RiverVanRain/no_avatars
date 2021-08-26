<?php
/**
 * Invite Elgg plugin [Plugin]
 * @author subterraneanwebZ
 * @package Plugin
 * @license MIT License
 * @copyright (c) wZm 2019
 * @link https://wzm.me
**/
$plugin_root = __DIR__;
if (file_exists("{$plugin_root}/vendor/autoload.php")) {
	// check if composer dependencies are distributed with the plugin
	require_once "{$plugin_root}/vendor/autoload.php";
}