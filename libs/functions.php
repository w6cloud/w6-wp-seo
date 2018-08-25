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
 */

/**
 * Autoload
 *
 * @param string $class_name Class name.
 */
function w6wpseo_autoload( $class_name ) {

	if ( false === strpos( $class_name, 'W6\Wp_Seo' ) ) {
		return;
	}

	$path = str_replace( '_', '-', $class_name );
	$path = str_replace( '\\', '/', $path );
	$path = ltrim( $path, '/' );
	$path = strtolower( $path );

	$types = array(
		'class',
		'trait',
		'interface',
	);

	foreach ( $types as $type ) {
		$_path = W6_WP_SEO_ROOT . '/' . str_replace( 'w6/wp-seo/', 'libs/' . $type . '-', $path ) . '.php';
		if ( file_exists( $_path ) ) {
			require_once $_path;
			break;
		}
	}
}
