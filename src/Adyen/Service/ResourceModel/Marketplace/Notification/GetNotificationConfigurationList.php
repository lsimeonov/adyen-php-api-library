<?php


namespace Adyen\Service\ResourceModel\Marketplace\Notification;


class GetNotificationConfigurationList extends \Adyen\Service\AbstractResource
{

    /**
     * GetNotificationConfigurationList constructor.
     *
     * @param \Adyen\Service $service
     */
    public function __construct(\Adyen\Service $service)
    {
        $this->_service = $service;
        $this->_endpoint = $service->getClient()
                                   ->getConfig()
                                   ->get('marketplaceEndpoint').'/cal/services/Notification/'.$service->getClient()
                                                                                                      ->getApiNotificationVersion().'/getNotificationConfigurationList';
    }
}