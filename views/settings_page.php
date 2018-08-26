<?php
/**
 * Admin settings page
 *
 * Displays the admin configuration page
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

?>
<form action='options.php' method='post'>
	<h2>W6 WordPress SEO</h2>
	<?php
	settings_fields( 
		'w6wpseo_settings_option_group_general' // Option group
	);
	do_settings_sections( 
		'w6wpseo_settings_page' 
	);
	submit_button();
	?>
</form>
