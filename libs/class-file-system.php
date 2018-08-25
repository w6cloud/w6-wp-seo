<?php
/**
 * File system class
 *
 * Easy file manipulation within the plugin
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo;

/**
 * Working with file system
 */
class File_System {

	/**
	 * Get the path of a file located within plugin
	 *
	 * @param string $path Path to the file.
	 * @return string The full path
	 */
	public static function path( $path = null ) {
		return trailingslashit( dirname( dirname( __FILE__ ) ) ) . ltrim( $path, '/\\' );
	}

	/**
	 * Get the url of a file located within plugin
	 *
	 * @param string $path Path to the file.
	 * @return string The url
	 */
	public static function url( $path = null ) {
		return plugins_url( 'w6-wp-seo/' . ltrim( $path, '/\\' ) );
	}
}
