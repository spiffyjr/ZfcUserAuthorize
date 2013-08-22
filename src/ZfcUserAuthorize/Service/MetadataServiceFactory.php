<?php

namespace ZfcUserAuthorize\Service;

use Zend\ServiceManager\ServiceLocatorInterface;
use ZfcUser\Service\AbstractServiceFactory;

class MetadataServiceFactory extends AbstractServiceFactory
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @throws \InvalidArgumentException
     * @return LoginService
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var \ZfcUserAuthorize\ModuleOptions $options */
        $options = $serviceLocator->get('ZfcUserAuthorize\ModuleOptions');
        $service = new MetadataService();

        foreach ($options->getPlugins() as $plugin) {
            $service->registerPlugin($this->get($serviceLocator, $plugin));
        }

        return $service;
    }
}