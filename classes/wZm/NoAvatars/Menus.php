<?php
/**
 * No Avatars
 * @author Nikolai Shcherbin
 * @package No Avatars
 * @license GNU Affero General Public License version 3
 * @copyright (c) Nikolai Shcherbin 2021
 * @link https://wzm.me
**/

namespace wZm\NoAvatars;

use Elgg\Hook;
use ElggMenuItem;

class Menus {

	public static function userPageMenu(Hook $hook) {

		$menu = $hook->getValue();
		/* @var $menu \Elgg\Menu\MenuItems */
		
		$menu->remove('edit_avatar');
		
		return $menu;
	}
	
	public static function userHoverMenu(Hook $hook) {
		$user = $hook->getEntityParam();
		if (!$user instanceof \ElggUser) {
			return;
		}
		
		$menu = $hook->getValue();
		/* @var $menu \Elgg\Menu\MenuItems */
		
		$menu->remove('avatar:edit');
		
		return $menu;
	}
	
	public static function userTitleMenu(Hook $hook) {

		$menu = $hook->getValue();
		/* @var $menu \Elgg\Menu\MenuItems */
		
		$menu->remove('avatar:edit');
		
		return $menu;
	}
}
