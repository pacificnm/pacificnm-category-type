<?php

namespace Pacificnm\CategoryType\Service\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Pacificnm\CategoryType\Service\Service;

class ServiceFactory
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return Pacificnm\CategoryType\Service\Service
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        $mapper = $serviceLocator->get('Pacificnm\CategoryType\Mapper\MysqlMapperInterface');

        return new Service($mapper);
    }


}

