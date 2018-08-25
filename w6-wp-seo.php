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
\W6\Wp_Seo\Wp_Seo::init();

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
/*
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-activator.php';
	Plugin_Name_Activator::activate();
}
register_activation_hook( __FILE__, 'activate_plugin_name' );
*/

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );
 */


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name.php';
 */

