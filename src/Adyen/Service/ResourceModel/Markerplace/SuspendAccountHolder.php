<?php

namespace Adyen\Service\ResourceModel\Markerplace;

class SuspendAccountHolder extends \Adyen\Service\AbstractResource
{
    protected $_requiredFields = [
        'accountHolderCode',
    ];

    /**
     * SuspendAccountHolder constructor.
     *
     * @param \Adyen\Service $service
     */
    public function __construct(\Adyen\Service $service)
    {
        $this->_service = $service;
        $this->_endpoint = $service->getClient()
          ->getConfig()
          ->get('marketplaceEndpoint').'/cal/services/Account/'.$service->getClient()
          ->getApiMarketplaceVersion().'/suspendAccountHolder';
    }
}
