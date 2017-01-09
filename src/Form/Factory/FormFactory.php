<?php

namespace Pacificnm\CategoryType\Form\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Pacificnm\CategoryType\Form\Form;

class FormFactory
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return \CategoryType\Form\Form
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        return new Form();
    }


}

