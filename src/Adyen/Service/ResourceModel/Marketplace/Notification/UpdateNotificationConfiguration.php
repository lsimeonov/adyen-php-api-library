<?php


namespace Adyen\Service\ResourceModel\Marketplace\Notification;


class UpdateNotificationConfiguration extends \Adyen\Service\AbstractResource
{

    /**
     * @var array
     */
    protected $_requiredFields = [
        'configurationDetails',
        'configurationDetails.active',
        'configurationDetails.description',
        'configurationDetails.eventConfigs',
        'configurationDetails.messageFormat',
        'configurationDetails.notifyURL',
        'configurationDetails.notificationId',
        'configurationDetails.notifyUsername',
        'configurationDetails.notifyPassword',
        'configurationDetails.sendActionHeader',
        'configurationDetails.sslProtocol',
    ];

    public function __construct(\Adyen\Service $service)
    {
        $this->_service = $service;
        $this->_endpoint = $service->getClient()
                                   ->getConfig()
                                   ->get('marketplaceEndpoint').'/cal/services/Notification/'.$service->getClient()
                                                                                                      ->getApiNotificationVersion().'/updateNotificationConfiguration';
    }

}