<?php
namespace W6\WpSeo;

class Metabox
{
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
        wp_nonce_field(basename(__FILE__), 'food_meta_box_nonce');
        View::render('metabox', array(
            'title' => get_post_meta($post->ID, '_w6wpseo_page_title', true)
        ));
    }
}
