<?php
/**
 * Activator
 *
 * Activates & Deactivates the plugin
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo;

/**
 * Activator
 *
 * @package   W6\WpSeo\Activator
 */
class Activator {

	/**
	 * Acivatior initiation
	 *
	 * Register hooks
	 *
	 * @return void
	 */
	public static function init() {
		register_activation_hook( W6_WP_SEO_ROOT . '/w6-wp-seo.php', '\W6\Wp_Seo\Activator::activate' );
		register_deactivation_hook( W6_WP_SEO_ROOT . '/w6-wp-seo.php', '\W6\Wp_Seo\Activator::deactivate' );
	}

	/**
	 * Plugin activation
	 *
	 * @link https://codex.wordpress.org/Function_Reference/register_activation_hook
	 * @return void
	 */
	public static function activate() {
	}

	/**
	 * Plugin deactivation
	 *
	 * @link https://codex.wordpress.org/Function_Reference/register_deactivation_hook
	 * @return void
	 */
	public static function deactivate() {
	}
}
