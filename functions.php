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


add_action('add_meta_boxes', 'w6_wpseo_add_metabox');
function w6_wpseo_add_metabox()
{
    $args = array();
    add_meta_box(
        'w6_wpseo_metabox', # id
        __('SEO', 'w6_wpseo'), # box title
        'w6_wpseo_metabox_content', # content callback
        array('post', 'page'), # post types
        'normal', # priority
        'normal', # position
        $args # callback args
    );
}


function w6_wpseo_metabox_content($args)
{
    echo 'OK';
}
