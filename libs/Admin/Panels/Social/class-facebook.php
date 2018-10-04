<?php
/**
 * Facebook tab of social panel
 *
 * This class handles the Facebook tab of the social panel
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo\Admin\Panels\Social;

/**
 * This class handles the Facebook tab of the social panel
 *
 * @package   W6\Wp_Seo\Admin\Panels\Social\Facebook
 */
class Facebook {

	/**
	 * Tab initiation
	 *
	 * @param object $panel The panel.
	 *
	 * @return void
	 */
	public static function init( $panel ) {

		$tab = $panel->createTab(array(
			'name' => 'Facebook',
			'desc' => esc_html__( 'Facebook settings', 'w6-wp-seo' ),
		));

		// URL.
		$tab->createOption( array(
			'name'    => esc_html__( 'URL', 'w6-wp-seo' ),
			'id'      => 'facebook_url',
			'type'    => 'select',
			'desc'    => esc_html__( 'Select the default url source.', 'w6-wp-seo' ),
			'options' => array(
				'permalink' => esc_html__( 'Permalink', 'w6-wp-seo' )
			),
			'default' => 'permalink',
		) );

		// Type.
		$tab->createOption( array(
			'name'    => esc_html__( 'Type', 'w6-wp-seo' ),
			'id'      => 'facebook_type_template',
			'type'    => 'select',
			'desc'    => esc_html__( 'Select the default Facebook type.', 'w6-wp-seo' ),
			'options' => array(
				'auto'    => esc_html__( 'Automatic', 'w6-wp-seo' ),
				'article' => esc_html__( 'Article', 'w6-wp-seo' ),
			),
		) );

		// Title.
		$tab->createOption( array(
			'name' => esc_html__( 'Title', 'w6-wp-seo' ),
			'id'   => 'facebook_title_template',
			'type' => 'text',
			'desc' => esc_html__( 'Enter the default page preview title. Available tags : {SEO_TITLE}, {TITLE}, {SITE_NAME}. Leave empty to use default. Default : {SEO_TITLE}.', 'w6-wp-seo' ),
		) );

		// Save button.
		$tab->createOption( array(
			'type' => 'save',
		) );

	}
}
