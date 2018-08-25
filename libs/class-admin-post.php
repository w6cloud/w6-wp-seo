<?php
/**
 * Admin Post Class
 *
 * Creates the admin meta box on post edit page
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo;

use \W6\Wp_Seo\File_System as FS;

/**
 * Admin Post
 *
 * @package   W6\WpSeo\Admin_Post
 */
class Admin_Post {

	/**
	 * Init metabox
	 */
	public static function init() {
		// Create the seo metabox.
		add_action( 'add_meta_boxes', '\W6\Wp_Seo\Admin_Post::metabox' );
		// Save data.
		add_action( 'save_post', '\W6\Wp_Seo\Admin_Post::save', 10, 2 );
		// Add stylesheet.
		add_action( 'admin_enqueue_scripts', '\W6\Wp_Seo\Admin_Post::scripts' );
	}

	/**
	 * Create the seo metabox
	 */
	public static function metabox() {
		$args = array();
		add_meta_box(
			'w6_wpseo_metabox',
			esc_html__( 'Search Engine Optimization', 'w6-wp-seo' ),
			'\W6\Wp_Seo\Admin_Post::form',
			array( 'post', 'page' ),
			'normal',
			'high',
			$args
		);
	}

	/**
	 * Create the form of the metabox
	 *
	 * @param array $args Parameters.
	 * @return void
	 */
	public static function form( $args ) {
		global $post;
		wp_nonce_field( basename( __FILE__ ), 'w6wpseo_meta_box_nonce' );
		View::render( 'metabox', array(
			'title'       => get_post_meta( $post->ID, '_w6wpseo_page_title', true ),
			'description' => get_post_meta( $post->ID, '_w6wpseo_page_description', true ),
			'keywords'    => get_post_meta( $post->ID, '_w6wpseo_page_keywords', true ),
		));
	}

	/**
	 * Save the metabox
	 *
	 * @param int $post_id Post ID.
	 * @return void
	 */
	public static function save( $post_id ) {

		$data = wp_unlash( $_POST );

		if ( ! isset( $data['w6wpseo_meta_box_nonce'] ) || ! wp_verify_nonce( $data['w6wpseo_meta_box_nonce'], basename( __FILE__ ) ) ) {
			return;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		if ( isset( $data['w6wpseo_title'] ) ) {
			update_post_meta( $post_id, '_w6wpseo_page_title', sanitize_text_field( $data['w6wpseo_title'] ) );
		}

		if ( isset( $data['w6wpseo_description'] ) ) {
			update_post_meta( $post_id, '_w6wpseo_page_description', sanitize_text_field( $data['w6wpseo_description'] ) );
		}

		if ( isset( $data['w6wpseo_keywords'] ) ) {
			update_post_meta( $post_id, '_w6wpseo_page_keywords', sanitize_text_field( $data['w6wpseo_keywords'] ) );
		}
	}

	/**
	 * Add script & stylesheet to admin area
	 *
	 * @return void
	 */
	public static function scripts() {
		wp_enqueue_style(
			'w6wpseo-metabox-admin',
			FS::url( 'assets/css/metabox.css' ),
			array(),
			filemtime( FS::path( 'assets/css/metabox.css' ) ),
			'all'
		);
	}
}
