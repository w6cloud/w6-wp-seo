<?php
/**
 * Admin metaboxes
 *
 * This class handles the admin metaboxes
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo\Admin;

/**
 * This class handles the admin metaboxes
 *
 * @package   W6\Wp_Seo\Admin\Metaboxes
 */
class Metaboxes {

	/**
	 * Panels initiation
	 *
	 * @return void
	 */
	public static function init() {
		Metaboxes\Post::init();
	}

}
