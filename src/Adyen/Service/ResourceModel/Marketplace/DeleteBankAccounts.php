<?php


namespace Adyen\Service\ResourceModel\Marketplace;


class DeleteBankAccounts extends \Adyen\Service\AbstractResource
{

    /**
     * @var array
     */
    protected $_requiredFields = [
        'accountHolderCode',
        'bankAccountUUIDs',
    ];

    public function __construct(\Adyen\Service $service)
    {
        $this->_service = $service;
        $this->_endpoint = $service->getClient()
                                   ->getConfig()
                                   ->get('marketplaceEndpoint') . '/cal/services/Account/' . $service->getClient()
                                                                                                     ->getApiMarketplaceVersion() . '/deleteBankAccounts';
    }

}