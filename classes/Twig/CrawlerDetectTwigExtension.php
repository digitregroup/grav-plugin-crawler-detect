<?php
namespace Grav\Plugin\CrawlerDetect\Twig;

use Jaybizzle\CrawlerDetect\CrawlerDetect;

class CrawlerDetectTwigExtension extends \Twig_Extension
{
    /**
     * Instanciate CrawlerDetect
     */
    public function __construct()
    {
        $this->crawlerDetect = new CrawlerDetect;
    }

    /**
     * Initialize twig functions
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('isCrawler', [$this, 'isCrawler'])
        ];
    }

    /**
     * Check the user agent of the current 'visitor'
     *
     * @param string $userAgent Pass a user agent as a string
     * @return mixed
     */
    public function isCrawler($userAgent = null)
    {
        return $this->crawlerDetect->isCrawler($userAgent);
    }
}
