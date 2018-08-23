<?php
namespace W6\WpSeo;

/**
 * Singleton
 */
trait Singleton
{
    private static $instance = null;
    
    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function instance()
    {
        return self::$instance === null ? self::$instance = new static() : self::$instance;
    }
}
