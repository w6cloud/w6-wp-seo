<?php
/**
 * Plugin Name: Web 6 - WP SEO
 * Plugin URI: https://web6.fr
 * Description: SEO plugin for wordpress
 * Version: 0.1
 * Author: Pierre Aboucaya
 * Author URI: https://pierre.aboucaya.name
 * License: MIT
 */

require_once('vendor/autoload.php');

// Init framework
\W6\WpSeo\WpSeo::init();
