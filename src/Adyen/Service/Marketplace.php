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
     * @var \Adyen\Service\ResourceModel\Markerplace\CloseAccountHolder
     */
    protected $_closeAccountHolder;

    /**
     * @var \Adyen\Service\ResourceModel\Markerplace\SuspendAccountHolder
     */
    protected $_suspendAccountHolder;
    
    /**
     * @var \Adyen\Service\ResourceModel\Markerplace\UnSuspendAccountHolder
     */
    protected $_unSuspendAccountHolder;

    /**
     * @var \Adyen\Service\ResourceModel\Markerplace\UploadDocument
     */
    protected $_uploadDocument;

    /**
     * @var \Adyen\Service\ResourceModel\Marketplace\UpdateAccountHolder
     */
    protected $_updateAccountHolder;

    /**
     * @var \Adyen\Service\ResourceModel\Markerplace\DeleteBankAccounts
     */
    protected $_deleteBankAccounts;

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
        $this->_closeAccountHolder = new \Adyen\Service\ResourceModel\Markerplace\CloseAccountHolder($this);
        $this->_suspendAccountHolder = new \Adyen\Service\ResourceModel\Markerplace\SuspendAccountHolder($this);
        $this->_unSuspendAccountHolder = new \Adyen\Service\ResourceModel\Markerplace\UnSuspendAccountHolder($this);
        $this->_uploadDocument = new \Adyen\Service\ResourceModel\Markerplace\UploadDocument($this);
        $this->_deleteBankAccounts = new \Adyen\Service\ResourceModel\Markerplace\DeleteBankAccounts($this);

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
    public function deleteBankAccounts($params)
    {
        return $this->_deleteBankAccounts->request($params);
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
    public function closeAccountHolder($params)
    {
        return $this->_closeAccountHolder->request($params);
    }

    /**
     * @param $params
     *
     * @return mixed
     */
    public function suspendAccountHolder($params)
    {
        return $this->_suspendAccountHolder->request($params);
    }
    
    /**
     * @param $params
     *
     * @return mixed
     */
    public function unSuspendAccountHolder($params)
    {
        return $this->_unSuspendAccountHolder->request($params);
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
