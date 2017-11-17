<?php

namespace Adyen\Service\ResourceModel\Marketplace;

class CreateAccountHolder extends \Adyen\Service\AbstractResource
{

    protected $_requiredFields = [
        'accountHolderCode',
        'accountHolderDetails.email',
        'legalEntity',
    ];

    protected $_endpoint;

    public function __construct(\Adyen\Service $service)
    {
        $this->_service = $service;
        $this->_endpoint = $service->getClient()
                                   ->getConfig()
                                   ->get('endpoint') . '/cal/services/Account/' . $service->getClient()
                                                                                          ->getApiMarketplaceVersion() . '/createAccountHolder';

    }

}