<?php
/**
 * Admin Settings Class
 *
 * Creates the settings page and the menu item
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo;

/**
 * Admin Settings
 *
 * @package   W6\WpSeo\Admin_Settings
 */
class Admin_Settings {

	/**
	 * Init options
	 */
	public static function init() {
		add_action( 'admin_menu', '\W6\Wp_Seo\Admin_Settings::menu' );
		add_action( 'admin_init', '\W6\Wp_Seo\Admin_Settings::configure' );
	}

	/**
	 * Creates menu item
	 *
	 * @link https://codex.wordpress.org/Adding_Administration_Menus
	 * @return void
	 */
	public static function menu() {
		add_submenu_page(
			'options-general.php', // Parent Slug.
			'W6 WordPress SEO', // Page title.
			'SEO', // Menu title.
			'manage_options', // Capability.
			'w6-wp-seo', // Menu slug.
			'\W6\Wp_Seo\Admin_Settings::page' // Callback.
		);
	}

	/**
	 * Creates settings fields
	 *
	 * @return void
	 */
	public static function configure() {

		register_setting(
			'w6wpseo_settings_option_group_general', // Option Group.
			'w6wpseo_settings' // Option Name.
		);

		add_settings_section(
			'w6wpseo_section_settings_general', // ID.
			__( 'General settings', 'w6-wp-seo' ), // Title.
			'\W6\Wp_Seo\Admin_Settings::general_section_description', // Callback.
			'w6wpseo_settings_page' // Page.
		);

		add_settings_field(
			'w6wpseo_title_template', // ID.
			__( 'Title template', 'w6-wp-seo' ), // Title.
			'\W6\Wp_Seo\Admin_Settings::field_title_template', // Callback.
			'w6wpseo_settings_page', // Page.
			'w6wpseo_section_settings_general' // Section (add_settings_section->ID).
		);

		add_settings_section(
			'w6wpseo_section_settings_post_types', // ID.
			__( 'Post types', 'w6-wp-seo' ), // Title.
			'\W6\Wp_Seo\Admin_Settings::post_types_section_description', // Callback.
			'w6wpseo_settings_page' // Page.
		);

		add_settings_field(
			'w6wpseo_post_type_post', // ID.
			__( 'Post', 'w6-wp-seo' ), // Title.
			'\W6\Wp_Seo\Admin_Settings::field_post_type_post', // Callback.
			'w6wpseo_settings_page', // Page.
			'w6wpseo_section_settings_post_types' // Section (add_settings_section->ID).
		);
	}

	/**
	 * Settings page content
	 *
	 * @return void
	 */
	public static function page() {
		View::render( 'settings_page' );
	}

	/**
	 * Section description : General
	 *
	 * @return void
	 */
	public static function general_section_description() {
		esc_html_e( 'General settings description', 'w6-wp-seo' );
	}

	/**
	 * Field : Title template
	 *
	 * @return void
	 */
	public static function field_title_template() {
		View::render( 'settings_title_template', array(
			'options' => get_option( 'w6wpseo_settings' ),
		));
	}

	/**
	 * Section description : Post Types
	 *
	 * @return void
	 */
	public static function post_types_section_description() {
		esc_html_e( 'Post types settings description', 'w6-wp-seo' );
	}

	/**
	 * Field : Post types
	 *
	 * @return void
	 */
	public static function field_post_type_post() {
		View::render( 'settings_post_type_post', array(
			'options' => get_option( 'w6wpseo_settings' ),
		));
	}
}
