<?php
namespace W6\WpSeo;

/**
 * Working with file system
 */
class FileSystem
{
    /**
     * Get a path prepended with plugin root path
     *
     * @param string $path Path to append to plugin root path (leave empty to get root path)
     * @return string The full path
     */
    public static function path($path = null)
    {
        return trailingslashit(dirname(dirname(__FILE__))).ltrim($path, '/\\');
    }
}
