<?php
/**
 * Social panel
 *
 * This class handles the social panel
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo\Admin\Panels;

/**
 * This class handles the social panel
 *
 * @package   W6\Wp_Seo\Admin\Panels\Social
 */
class Social {

	/**
	 * Panel initiation
	 *
	 * @param object $options_page The options page.
	 *
	 * @return void
	 */
	public static function init( $options_page ) {

		$panel = $options_page->createAdminPanel(array(
			'name' => esc_html__( 'Social', 'w6-wp-seo' ),
			'desc' => esc_html__( 'Description displayed just below the title of this admin page.', 'w6-wp-seo' ),
		));

		Social\Facebook::init( $panel );

		Social\Twitter::init( $panel );

		Social\LinkedIn::init( $panel );

	}
}
