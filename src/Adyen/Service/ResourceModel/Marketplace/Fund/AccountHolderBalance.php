<?php

namespace Adyen\Service\ResourceModel\Marketplace\Fund;

/**
 * Class AccountHolderBalance
 * @package Adyen\Service\ResourceModel\Marketplace\Fund
 */
class AccountHolderBalance extends \Adyen\Service\AbstractResource
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
                                   ->get('marketplaceEndpoint').'/cal/services/Fund/'.$service->getClient()
                                                                                                 ->getApiMarketplaceFundVersion().'/accountHolderBalance';
    }

}