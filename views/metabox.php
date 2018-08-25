<?php
/**
 * Post edit metabox template
 *
 * Displays the form displayed in the metabox on the post edit page
 *
 * @package   W6\Wp_Seo
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-seo
 */

?>
<!-- Begin : W6 Wp Seo Metabox -->
<p>
	<label for="w6wpseo_title">
		<?php esc_html_e( 'Title', 'w6-wp-seo' ); ?>
	</label>
	<input type="text" name="w6wpseo_title" id="w6wpseo_title" value="<?php echo esc_attr( $title ); ?>" placeholder="<?php esc_attr_e( 'Insert page title here', 'w6-wp-seo' ); ?>" />
	<span class="howto">
		<?php esc_html_e( 'This text will be displayed as the title of search results', 'w6-wp-seo' ); ?>
	</span>
</p>
<p>
	<label for="w6wpseo_description">
		<?php esc_html_e( 'Description', 'w6-wp-seo' ); ?>
	</label>
	<textarea type="text" name="w6wpseo_description" id="w6wpseo_description" rows="2" placeholder="<?php esc_attr_e( 'Insert page description here', 'w6-wp-seo' ); ?>"><?php echo esc_attr( $description ); ?></textarea>
	<span class="howto">
		<?php esc_html_e( 'This text will be displayed as the description of search results', 'w6-wp-seo' ); ?>
	</span>
</p>
<p>
	<label for="w6wpseo_keywords">
		<?php esc_html_e( 'Keywords', 'w6-wp-seo' ); ?>
	</label>
	<textarea type="text" name="w6wpseo_keywords" id="w6wpseo_keywords" rows="2" placeholder="<?php esc_attr_e( 'Insert comma separated keywords here', 'w6-wp-seo' ); ?>"><?php echo esc_attr( $keywords ); ?></textarea>
	<span class="howto">
		<?php esc_html_e( 'These keywords won\'t be displayed in search results', 'w6-wp-seo' ); ?>
	</span>
</p>
<!-- End : W6 Wp Seo Metabox -->
