<?php
/**
 * Front Post Class
 *
 * Modifies single post output to add SEO features
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo;

/**
 * Front Post
 *
 * @package   W6\WpSeo\Front_Post
 */
class Front_Post {

	/**
	 * Init front post
	 *
	 * @return void
	 */
	public static function init() {
		// Setup theme.
		add_action( 'after_setup_theme', '\W6\Wp_Seo\Front_Post::setup_theme' );
		// Build page title.
		add_filter( 'document_title_parts', '\W6\Wp_Seo\Front_Post::page_title' );
		// Other head meta tags.
		add_filter( 'wp_head', '\W6\Wp_Seo\Front_Post::meta_tags' );
	}

	/**
	 * Theme setup
	 *
	 * @return void
	 */
	public static function setup_theme() {
		// Let WordPress manage the title tag.
		add_theme_support( 'title-tag' );
	}

	/**
	 * Theme setup
	 *
	 * @see https://developer.wordpress.org/reference/functions/wp_get_document_title/
	 * @param array $title Title parts.
	 * @return array The modifed title parts
	 */
	public static function page_title( $title ) {
		global $post;
		$seo_title = get_post_meta( $post->ID, '_w6wpseo_page_title', true );
		if ( ! empty( $seo_title ) ) {
			return array( $seo_title );
		}
		return $title;
	}

	/**
	 * Meta tags
	 *
	 * @return void
	 */
	public static function meta_tags() {
		global $post;
		$out = '';
		$desc = get_post_meta( $post->ID, '_w6wpseo_page_description', true );
		if ( ! empty( $desc ) ) {
			$out .= '<meta name="description" content="' . $desc . '" />';
		}
		$keywords = get_post_meta( $post->ID, '_w6wpseo_page_keywords', true );
		if ( ! empty( $keywords ) ) {
			$out .= '<meta name="keywords" content="' . $desc . '" />';
		}
		echo $out;
	}
}
