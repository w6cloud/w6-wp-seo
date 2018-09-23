<?php
/**
 * Meta tags tab of dashboard panel
 *
 * This class handles the meta tags tab of the dashboard panel
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo\Admin\Panels\Dashboard;

/**
 * This class handles the meta tags tab of the dashboard panel
 *
 * @package   W6\Wp_Seo\Admin\Panels\Dashboard\Metas
 */
class Metas {

	/**
	 * Tab initiation
	 *
	 * @param object $panel The panel.
	 *
	 * @return void
	 */
	public static function init( $panel ) {

		$tab = $panel->createTab(array(
			'name' => __( 'Meta tags', 'w6-wp-seo' ),
			'desc' => __( 'Set the meta tags templates. These templates can be overridden By specific content types settings.', 'w6-wp-seo' ),
		));

		// Meta tags - Title.
		$tab->createOption( array(
			'name' => __( 'Title', 'w6-wp-seo' ),
			'id'   => 'meta_title_template',
			'type' => 'text',
			'desc' => __( 'Enter the default page title. Available tags : {TITLE}, {SITE_NAME}', 'w6-wp-seo' ),
		) );

		// Meta tags - Description.
		$tab->createOption( array(
			'name' => __( 'Description', 'w6-wp-seo' ),
			'id'   => 'meta_description_template',
			'type' => 'text',
			'desc' => __( 'Enter the default mesta description. Available tags : {TITLE}, {SITE_NAME}, {EXCERPT}', 'w6-wp-seo' ),
		) );

		// Meta tags - Keywords.
		$tab->createOption( array(
			'name' => __( 'Keywords', 'w6-wp-seo' ),
			'id'   => 'meta_keywords_template',
			'type' => 'text',
			'desc' => __( 'Enter the default keywods meta. Available tags : {TITLE}, {SITE_NAME}, {TAGS}', 'w6-wp-seo' ),
		) );

		// Meta tags - Save button.
		$tab->createOption( array(
			'type' => 'save',
		) );

	}
}
