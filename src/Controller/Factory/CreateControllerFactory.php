<?php

namespace Pacificnm\CategoryType\Controller\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Pacificnm\CategoryType\Controller\CreateController;

class CreateControllerFactory
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return \Pacificnm\CategoryType\Controller\CreateController
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();

        $service = $realServiceLocator->get('Pacificnm\CategoryType\Service\ServiceInterface');

        $form = $realServiceLocator->get('Pacificnm\CategoryType\Form\Form');

        return new CreateController($service, $form);
    }


}

