<?php
/**
 * Admin panels
 *
 * This class handles the admin panels
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo\Admin;

/**
 * This class handles the admin panels
 *
 * @package   W6\Wp_Seo\Admin\Panel
 */
class Panels {

	/**
	 * Panels initiation
	 *
	 * @return void
	 */
	public static function init() {
		add_action( 'tf_create_options', '\W6\Wp_Seo\Admin\Panels::create' );
	}

	/**
	 * Create the panels
	 *
	 * @return void
	 */
	public static function create() {

		$options_page = \W6\Wp_Seo\Wp_Seo::instance()->titan->createAdminPanel( array(
			'name' => __( 'W6 SEO', 'w6-wp-seo' ),
			'id'   => 'w6-wp-seo',
			'desc' => __( 'Description displayed just below the title of this admin page.', 'w6-wp-seo' ),
			'icon' => 'dashicons-awards',
		) );

		Panels\Dashboard::init( $options_page );

		Panels\Social::init( $options_page );
	}
}
