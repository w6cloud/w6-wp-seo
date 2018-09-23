<?php
/**
 * General tab of dashboard panel
 *
 * This class handles the general tab of the dashboard panel
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo\Admin\Panels\Dashboard;

/**
 * This class handles the general tab of the dashboard panel
 *
 * @package   W6\Wp_Seo\Admin\Panels\Dashboard\General
 */
class General {

	/**
	 * Tab initiation
	 *
	 * @param object $panel The panel.
	 *
	 * @return void
	 */
	public static function init( $panel ) {

		$tab = $panel->createTab(array(
			'name' => __( 'General', 'w6-wp-seo' ),
			'desc' => __( 'General settings', 'w6-wp-seo' ),
		));


		// Content types.
		$tab->createOption( array(
			'name' => __( 'Content types', 'w6-wp-seo' ),
			'id'   => 'general_content_types',
			'type' => 'multicheck-post-types',
			'desc' => __( 'Check the post types you want to optimize. ', 'w6-wp-seo' ),
		) );

		// Meta tags - Save button.
		$tab->createOption( array(
			'type' => 'save',
		) );

	}
}
