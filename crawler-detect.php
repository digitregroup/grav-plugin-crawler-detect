<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Plugin\CrawlerDetect\Twig\CrawlerDetectTwigExtension;

/**
 * Class CrawlerDetectPlugin
 * @package Grav\Plugin
 */
class CrawlerDetectPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        require_once __DIR__ . '/vendor/autoload.php';

        $this->enable([
            'onTwigExtensions' => ['onTwigExtensions', 0]
        ]);

    }

    public function onTwigExtensions()
    {
        $this->grav['twig']->twig->addExtension(new CrawlerDetectTwigExtension());
    }
}
