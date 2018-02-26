<?php


namespace Adyen\Service;


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
     * @var \Adyen\Service\ResourceModel\Markerplace\GetAccountHolder
     */
    protected $_getAccountHolder;

    /**
     * @var \Adyen\Service\ResourceModel\Markerplace\CloseAccount
     */
    protected $_closeAccount;

    /**
     * @var \Adyen\Service\ResourceModel\Markerplace\UploadDocument
     */
    protected $_uploadDocument;
    /**
     * @var \Adyen\Service\ResourceModel\Marketplace\UpdateAccountHolder
     */
    protected $_updateAccountHolder;

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

        $this->_createAccountHolder = new \Adyen\Service\ResourceModel\Marketplace\CreateAccountHolder($this);
        $this->_updateAccountHolder = new \Adyen\Service\ResourceModel\Marketplace\UpdateAccountHolder($this);
        $this->_getAccountHolder = new \Adyen\Service\ResourceModel\Markerplace\GetAccountHolder($this);
        $this->_closeAccount = new \Adyen\Service\ResourceModel\Markerplace\CloseAccount($this);
        $this->_uploadDocument = new \Adyen\Service\ResourceModel\Markerplace\UploadDocument($this);
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

    /**
     * @param $params
     *
     * @return mixed
     * @throws \Adyen\AdyenException
     */
    public function updateAccountHolder($params)
    {
        return $this->_updateAccountHolder->request($params);
    }

    /**
     * @param $params
     *
     * @return mixed
     */
    public function getAccountHolder($params)
    {
        return $this->_getAccountHolder->request($params);
    }

    /**
     * @param $params
     *
     * @return mixed
     */
    public function closeAccount($params)
    {
        return $this->_closeAccount->request($params);
    }

    /**
     * @param $params
     *
     * @return mixed
     */
    public function uploadDocument($params)
    {
        return $this->_uploadDocument->request($params);
    }

}