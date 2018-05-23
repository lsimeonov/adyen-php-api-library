<?php


namespace Adyen\Service\ResourceModel\Marketplace\Notification;


class GetNotificationConfiguration extends \Adyen\Service\AbstractResource
{

    /**
     * @var array
     */
    protected $_requiredFields = [
        'notificationId',
    ];

    public function __construct(\Adyen\Service $service)
    {
        $this->_service = $service;
        $this->_endpoint = $service->getClient()
                                   ->getConfig()
                                   ->get('marketplaceEndpoint').'/cal/services/Notification/'.$service->getClient()
                                                                                                      ->getApiNotificationVersion().'/getNotificationConfiguration';
    }
}