<?php
/**
 * No Avatars
 * @author Nikolai Shcherbin
 * @package No Avatars
 * @license GNU Affero General Public License version 3
 * @copyright (c) Nikolai Shcherbin 2021
 * @link https://wzm.me
**/

return [
	'bootstrap' => \wZm\NoAvatars\Bootstrap::class,
	
	'actions' => [
		'avatar/upload' => ['access' => 'admin'],
		'avatar/crop' => ['access' => 'admin'],
		'avatar/remove' => ['access' => 'admin'],
	],
	
];