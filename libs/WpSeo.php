<?php
namespace W6\WpSeo;

/**
 * WpSeo
 */
class WpSeo
{
    use Singleton;

    /**
     * Init plugn
     *
     * @return void
     */
    public static function init()
    {
        $t = self::instance();
        Metabox::init();
    }
}
