<?php


namespace Adyen\Service\ResourceModel\Markerplace;

/**
 * Class GetAccountHolder.
 */
class GetAccountHolder extends \Adyen\Service\AbstractResource
{

    /**
     * CloseAccount constructor.
     *
     * @param \Adyen\Service $service
     */
    public function __construct(\Adyen\Service $service)
    {
        $this->_service = $service;
        $this->_endpoint = $service->getClient()
                                   ->getConfig()
                                   ->get('marketplaceEndpoint') . '/cal/services/Account/' . $service->getClient()
                                                                                                     ->getApiMarketplaceVersion() . '/getAccountHolder';
    }

    /**
     * @param $params
     *
     * @throws \Adyen\AdyenException
     */
    protected function _validate($params)
    {
        if (!isset($params['accountHolderCode']) && !isset($params['accountCode'])) {
            $msg = 'At least the following fields are required: accountHolderCode accountCode';
            $this->_service->getClient()->getLogger()->error($msg);
            throw new \Adyen\AdyenException($msg);
        }
    }

}