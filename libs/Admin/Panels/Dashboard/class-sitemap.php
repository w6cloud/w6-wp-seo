<?php
/**
 * Sitemap tab of dashboard panel
 *
 * This class handles the sitemap tab of the dashboard panel
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo\Admin\Panels\Dashboard;

/**
 * This class handles the sitemap tab of the dashboard panel
 *
 * @package   W6\Wp_Seo\Admin\Panels\Dashboard\Sitemap
 */
class Sitemap {

	/**
	 * Tab initiation
	 *
	 * @param object $panel The panel.
	 *
	 * @return void
	 */
	public static function init( $panel ) {

		$panel->createTab(array(
			'name' => __( 'Sitemap', 'w6-wp-seo' ),
			'desc' => __( 'Configure sitemap options', 'w6-wp-seo' ),
		));

	}
}
