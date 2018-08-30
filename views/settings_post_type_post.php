<?php
/**
 * Admin settings field : Title template
 *
 * Displays the title template on the admin settongs page
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

?>
<input 
	name="w6wpseo_settings[w6wpseo_post_type_post]" 
	id="w6wpseo_post_type_post" 
	type="checkbox" 
	value="1" 
	class="code" 
	checked="<?php echo (bool) $options['w6wpseo_title_template'] ? 'checked' : ''; ?>"
/>
