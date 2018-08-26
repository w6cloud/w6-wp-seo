<?php
/**
 * Main W6-Wp-Seo class
 *
 * This class handles the plugin's initialisation
 * - Init admin page
 * - Init admin metaboxes
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo;

/**
 * This class handles the plugin's initialisation
 *
 * @package   W6\Wp_Seo\Wp_Seo
 */
class Wp_Seo {
	/**
	 * Plugin initiation
	 *
	 * @return void
	 */
	public static function init() {
		if ( is_admin() ) {
			Admin_Post::init();
			Admin_Settings::init();
		} else {
			Front_Post::init();
		}
	}
}
