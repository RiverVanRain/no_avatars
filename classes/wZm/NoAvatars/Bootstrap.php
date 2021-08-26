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

use Elgg\PluginBootstrap;
use Elgg\Includer;

class Bootstrap extends PluginBootstrap {

	protected function getRoot() {
		return $this->plugin->getPath();
	}
	/**
	 * Executed during 'plugin_boot:before', 'system' event
	 *
	 * Allows the plugin to require additional files, as well as configure services prior to booting the plugin
	 *
	 * @return void
	 */
	public function load() {
		Includer::requireFileOnce($this->getRoot() . '/autoloader.php');
	}

	/**
	 * Executed during 'plugin_boot:before', 'system' event
	 *
	 * Allows the plugin to register handlers for 'plugin_boot', 'system' and 'init', 'system' events,
	 * as well as implement boot time logic
	 *
	 * @return void
	 */
	public function boot() {
		
	}

	/**
	 * Executed during 'init', 'system' event
	 *
	 * Allows the plugin to implement business logic and register all other handlers
	 *
	 * @return void
	 */
	public function init() {
		$hooks = $this->elgg()->hooks;
		
		$hooks->registerHandler('register', 'menu:page', [Menus::class, 'userPageMenu'], 1000);
		$hooks->registerHandler('register', 'menu:user_hover', [Menus::class, 'userHoverMenu'], 1000);
		$hooks->registerHandler('register', 'menu:title', [Menus::class, 'userTitleMenu'], 1000);
	}

	/**
	 * Executed during 'ready', 'system' event
	 *
	 * Allows the plugin to implement logic after all plugins are initialized
	 *
	 * @return void
	 */
	public function ready() {

	}

	/**
	 * Executed during 'shutdown', 'system' event
	 *
	 * Allows the plugin to implement logic during shutdown
	 *
	 * @return void
	 */
	public function shutdown() {

	}

	/**
	 * Executed when plugin is activated, after 'activate', 'plugin' event and before activate.php is included
	 *
	 * @return void
	 */
	public function activate() {

	}

	/**
	 * Executed when plugin is deactivated, after 'deactivate', 'plugin' event and before deactivate.php is included
	 *
	 * @return void
	 */
	public function deactivate() {

	}

	/**
	 * Registered as handler for 'upgrade', 'system' event
	 *
	 * Allows the plugin to implement logic during system upgrade
	 *
	 * @return void
	 */
	public function upgrade() {

	}
}