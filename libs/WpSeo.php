<?php
namespace W6\WpSeo;

/**
 * WpSeo
 */
class WpSeo
{
    use \W6\WpSeo\Singleton;

    /**
     * Path to plugin folder (without trailing slash)
     *
     * @var string
     */
    public $base = '';

    public static function init()
    {
        $t = self::instance();

        

        // Create the seo metabox
        add_action('add_meta_boxes', '\W6\WpSeo\Metabox::add');
    }

    /**
     * Path to plugin folder (without trailing slash)
     *
     * @return string
     */
    public static function base()
    {
        $t = self::instance();
        if (empty($t->base)) {
            $t->base = dirname(dirname(__FILE__));
        }
        return $t->base;
    }
}
