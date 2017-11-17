<?php


namespace Adyen\Service;


use Adyen\Service\ResourceModel\Marketplace\CreateAccountHolder;

/**
 * Class Marketplace.
 */
class Marketplace extends \Adyen\Service
{

    /**
     * @var \Adyen\Service\ResourceModel\Marketplace\CreateAccountHolder
     */
    protected $_createAccountHolder;

    /**
     * Marketplace constructor.
     *
     * @param \Adyen\Client $client
     *
     * @throws \Adyen\AdyenException
     */
    public function __construct(\Adyen\Client $client)
    {
        parent::__construct($client);

        $this->_createAccountHolder = new CreateAccountHolder($this);
    }

    /**
     * @param $params
     *
     * @return mixed
     * @throws \Adyen\AdyenException
     */
    public function createAccountHolder($params)
    {
        return $this->_createAccountHolder->request($params);
    }
}