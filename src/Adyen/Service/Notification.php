<?php


namespace Adyen\Service;

use Adyen\Service\ResourceModel\Marketplace\Notification\CreateNotificationConfiguration;
use Adyen\Service\ResourceModel\Marketplace\Notification\DeleteNotificationConfigurations;
use Adyen\Service\ResourceModel\Marketplace\Notification\GetNotificationConfiguration;
use Adyen\Service\ResourceModel\Marketplace\Notification\UpdateNotificationConfiguration;

/**
 * Class Notification.
 */
class Notification extends \Adyen\Service
{

    /**
     * @var \Adyen\Service\ResourceModel\Marketplace\Notification\CreateNotificationConfiguration
     */
    protected $_createNotificationConfiguration;
    /**
     * @var \Adyen\Service\ResourceModel\Marketplace\Notification\UpdateNotificationConfiguration
     */
    protected $_updateNotificationConfiguration;
    /**
     * @var \Adyen\Service\ResourceModel\Marketplace\Notification\GetNotificationConfiguration
     */
    protected $_getNotificationConfiguration;
    /**
     * @var \Adyen\Service\ResourceModel\Marketplace\Notification\DeleteNotificationConfigurations
     */
    protected $_deleteNotificationConfigurations;

    /**
     * Notification constructor.
     *
     * @param \Adyen\Client $client
     *
     * @throws \Adyen\AdyenException
     */
    public function __construct(\Adyen\Client $client)
    {
        parent::__construct($client);

        $this->_createNotificationConfiguration = new  CreateNotificationConfiguration($this);
        $this->_updateNotificationConfiguration = new  UpdateNotificationConfiguration($this);
        $this->_getNotificationConfiguration = new  GetNotificationConfiguration($this);
        $this->_deleteNotificationConfigurations = new  DeleteNotificationConfigurations($this);
    }

    /**
     * @param $params
     *
     * @return mixed
     */
    public function createNotificationConfiguration($params)
    {
        return $this->_createNotificationConfiguration->request($params);
    }

    /**
     * @param $params
     *
     * @return mixed
     */
    public function updateNotificationConfiguration($params)
    {
        return $this->_updateNotificationConfiguration->request($params);
    }

    /**
     * @param $params
     *
     * @return mixed
     */
    public function getNotificationConfiguration($params)
    {
        return $this->_getNotificationConfiguration->request($params);
    }

    /**
     * @param $params
     *
     * @return mixed
     */
    public function deleteNotificationConfigurations($params)
    {
        return $this->_deleteNotificationConfigurations->request($params);
    }

}