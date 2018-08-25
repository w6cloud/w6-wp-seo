<?php
/**
 * SEO Plugin for WordPress
 *
 * This plugin's goal is to have a perfect control over your WordPress SEO
 *
 * @package   w6\wp_seo
 * @since     1.0.0
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 *
 * @wordpress-plugin
 * Plugin Name:   W6 WordPress SEO
 * Plugin URI:    https://github.com/web6-fr/w6-wp-seo
 * Description:   SEO plugin for WordPress
 * Version:       1.0.0
 * Author:        WEB6
 * Author URI:    https://web6.fr
 * License:       GPL-3.0
 * License URI:   https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:   w6-wp-seo
 * Domain Path:   /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Plugin version.
 */
define( 'W6_WP_SEO_VERSION', '1.0.0' );

/**
 * Plugin version.
 */
define( 'W6_WP_SEO_ROOT', dirname( __FILE__ ) );

/**
 * Functions
 */
require_once 'libs/functions.php';

/**
 * Autoload
 */
spl_autoload_register( 'w6wpseo_autoload' );

/**
 * Composer
 */
require_once 'vendor/autoload.php';

/**
 * Init plugin
 */
add_action( 'init', '\W6\Wp_Seo\Wp_Seo::init' );
