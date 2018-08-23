<?php
namespace W6\WpSeo;

use \W6\WpSeo\FileSystem as FS;

/**
 * Manages views
 */
class View
{
    /**
     * Render a view
     *
     * View are located in the views/ folder
     *
     * @param string $path Path to the view you want to render widthout php extension
     * @param array $vars Vars to path to the view
     * @param bool $echo Echo the output ? (if false, output will be returned)
     * @return void
     */
    public static function render($path = null, $vars = array(), $echo = true)
    {
        $fullPath = FS::path('views/'.ltrim($path, '/\\').'.php');
        if (!file_exists($fullPath)) {
            trigger_error("View $path not found (path : $fullPath).", E_USER_WARNING);
        } else {
            extract($vars, EXTR_OVERWRITE);
            if ($echo) {
                require($fullPath);
            } else {
                ob_start();
                require($fullPath);
                return ob_get_clean();
            }
        }
    }
}
