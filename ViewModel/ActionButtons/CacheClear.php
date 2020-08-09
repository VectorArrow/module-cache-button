<?php namespace VectorArrow\CacheButton\ViewModel\ActionButtons;

class CacheClear implements \Magento\Framework\View\Element\Block\ArgumentInterface {
    
    /** @var \Magento\Backend\Model\Url **/
    protected $backend_url_resolver;

    /** @var string **/
    protected $cache_flush_path = 'adminhtml/cache/flushSystem';

    public function __construct(
        \Magento\Backend\Model\Url $backend_url_resolver
    ) {
        $this->backend_url_resolver = $backend_url_resolver;
    }

    /**
     * Get a url for the Magento backend
     * @return string
     */
    public function getUrl( $route_path = null, $route_params = null ) {
        return $this->backend_url_resolver->getUrl( $route_path, $route_params );
    }

    /**
     * Get the Magento cache flush url
     * @return string
     */
    public function getCacheFlushUrl() {
        return $this->getUrl( $this->cache_flush_path );
    }
}
