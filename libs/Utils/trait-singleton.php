<?php
/**
 * Singleton trait
 *
 * Used to create singletons
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

namespace W6\Wp_Seo\Utils;

/**
 * Singleton
 *
 * @package W6\Wp_Seo\Wp_Seo
 */
trait Singleton {

	/**
	 * Instance
	 *
	 * @var object
	 */
	private static $instance = null;

	/**
	 * Constructor
	 *
	 * @return void
	 */
	private function __construct() {
	}

	/**
	 * Block cloning
	 *
	 * @return void
	 */
	private function __clone() {
	}

	/**
	 * Block wakeup
	 *
	 * @return void
	 */
	private function __wakeup() {
	}

	/**
	 * Get instance
	 *
	 * @return object The current instance
	 */
	public static function instance() {
		return null === self::$instance ? self::$instance = new static() : self::$instance;
	}
}
