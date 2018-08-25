<?php
/**
 * Main W6-Wp-Seo class
 *
 * This class handles the plugin's initialisation
 * - Init admin page
 * - Init admin metaboxes
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
 * Render views
 *
 * @package   W6\Wp_Seo\Wp_Seo
 */
class View {
	/**
	 * Render a view
	 *
	 * View are located in the views/ folder
	 *
	 * @param string $path Path to the view you want to render widthout php extension.
	 * @param array  $vars Vars to path to the view.
	 * @param bool   $echo Echo the output ? (if false, output will be returned).
	 * @return mixed
	 */
	public static function render( $path = null, $vars = array(), $echo = true ) {
		$full_path = FS::path( 'views/' . ltrim( $path, '/\\' ) . '.php' );
		if ( file_exists( $full_path ) ) {
			extract( $vars, EXTR_OVERWRITE );
			if ( $echo ) {
				require $full_path;
			} else {
				ob_start();
				require $full_path;
				return ob_get_clean();
			}
		}
	}
}
