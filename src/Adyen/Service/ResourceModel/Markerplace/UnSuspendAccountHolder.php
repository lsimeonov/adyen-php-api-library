<?php

namespace Adyen\Service\ResourceModel\Markerplace;

class UnSuspendAccountHolder extends \Adyen\Service\AbstractResource
{
    protected $_requiredFields = [
        'accountHolderCode',
    ];

    /**
     * UnSuspendAccountHolder constructor.
     *
     * @param \Adyen\Service $service
     */
    public function __construct(\Adyen\Service $service)
    {
        $this->_service = $service;
        $this->_endpoint = $service->getClient()
          ->getConfig()
          ->get('marketplaceEndpoint').'/cal/services/Account/'.$service->getClient()
          ->getApiMarketplaceVersion().'/unSuspendAccountHolder';
    }
}
