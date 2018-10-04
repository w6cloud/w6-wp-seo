<?php
/**
 * Twitter tab of social panel
 *
 * This class handles the Twitter tab of the social panel
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo\Admin\Panels\Social;

/**
 * This class handles the Twitter tab of the social panel
 *
 * @package   W6\Wp_Seo\Admin\Panels\Social\Twitter
 */
class Twitter {

	/**
	 * Tab initiation
	 *
	 * @param object $panel The panel.
	 *
	 * @return void
	 */
	public static function init( $panel ) {

		$tab = $panel->createTab(array(
			'name' => 'Twitter',
			'desc' => esc_html__( 'Twitter settings', 'w6-wp-seo' ),
		));

		// Title.
		$tab->createOption( array(
			'name' => esc_html__( 'Title', 'w6-wp-seo' ),
			'id'   => 'twitter_title_template',
			'type' => 'text',
			'desc' => esc_html__( 'Enter the default page preview title. Available tags : {SEO_TITLE}, {TITLE}, {SITE_NAME}. Leave empty to use default. Default : {SEO_TITLE}.', 'w6-wp-seo' ),
		) );

		// Save button.
		$tab->createOption( array(
			'type' => 'save',
		) );

	}
}
