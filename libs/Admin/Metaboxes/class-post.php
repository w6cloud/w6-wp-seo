<?php
/**
 * Post metabox
 *
 * This class handles the post metabox
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo\Admin\Metaboxes;

/**
 * This class handles the post metabox
 *
 * @package   W6\Wp_Seo\Admin\Metaboxes\Post
 */
class Post {

	/**
	 * Metabox initiation
	 *
	 * @return void
	 */
	public static function init() {

		$box = \W6\Wp_Seo\Wp_Seo::instance()->titan->createMetaBox( array(
			'name' => 'SEO',
			'desc' => esc_html__( 'Description of the metabox.', 'w6-wp-seo' ),
			'post_type' => array(
				'page',
				'post',
			),
		) );

		// Meta tags - Title.
		$box->createOption( array(
			'name' => esc_html__( 'Title', 'w6-wp-seo' ),
			'id'   => 'meta_title',
			'type' => 'text',
			'desc' => esc_html__( 'Enter the page title. Available tags : {TITLE}, {SITE_NAME}. Defaults to the template defined in general settings.', 'w6-wp-seo' ),
		) );

		// Meta tags - Description.
		$box->createOption( array(
			'name' => esc_html__( 'Description', 'w6-wp-seo' ),
			'id'   => 'meta_description',
			'type' => 'text',
			'desc' => esc_html__( 'Enter the meta description. Available tags : {TITLE}, {SITE_NAME}, {EXCERPT}. Defaults to the template defined in general settings.', 'w6-wp-seo' ),
		) );

		// Meta tags - Keywords.
		$box->createOption( array(
			'name' => esc_html__( 'Keywords', 'w6-wp-seo' ),
			'id'   => 'meta_keywords',
			'type' => 'text',
			'desc' => esc_html__( 'Enter the keywods meta. Available tags : {TITLE}, {SITE_NAME}, {TAGS}. Defaults to the template defined in general settings.', 'w6-wp-seo' ),
		) );

	}
}
