<?php
namespace W6\WpSeo;

/**
 * Metabox
 */
class Metabox
{
    /**
     * Init metabox
     */
    public static function init()
    {
        // Create the seo metabox
        add_action('add_meta_boxes', '\W6\WpSeo\Metabox::add');
        // Save data
        add_action('save_post', '\W6\WpSeo\Metabox::save', 10, 2);
    }

    /**
     * Create the seo metabox
     */
    public static function add()
    {
        $args = array();
        add_meta_box(
            'w6_wpseo_metabox', # id
            'SEO', # box title
            '\W6\WpSeo\Metabox::content', # content callback
            array('post', 'page'), # screens
            'normal', # context
            'high', # priority
            $args # callback args
        );
    }

    /**
     * Create the content of the metabox
     *
     * @param array $args
     * @return void
     */
    public static function content($args)
    {
        global $post;
        wp_nonce_field(basename(__FILE__), 'w6wpseo_meta_box_nonce');
        View::render('metabox', array(
            'title' => get_post_meta($post->ID, '_w6wpseo_page_title', true)
        ));
    }

    /**
     * Save the metabox
     *
     * @param int $post_id
     * @return void
     */
    public static function save($post_id)
    {
        if (!isset($_POST['w6wpseo_meta_box_nonce']) || !wp_verify_nonce($_POST['w6wpseo_meta_box_nonce'], basename(__FILE__))) {
            return;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }

        if (!current_user_can('edit_post', $post_id)) {
            return;
        }

        if (isset($_POST['w6wpseo_title'])) {
            update_post_meta($post_id, '_w6wpseo_page_title', sanitize_text_field($_POST['w6wpseo_title']));
        }
    }
}
