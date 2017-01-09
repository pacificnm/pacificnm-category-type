<?php
return array(
    'module' => array(
        'CategoryType' => array(
            'name' => 'CategoryType',
            'version' => '1.0.0',
            'install' => array(
                'require' => array(),
                'sql' => 'sql/category-type.sql'
            )
        )
    ),
    'controllers' => array(
        'factories' => array(
            'Pacificnm\CategoryType\Controller\ConsoleController' => 'Pacificnm\CategoryType\Controller\Factory\ConsoleControllerFactory',
            'Pacificnm\CategoryType\Controller\CreateController' => 'Pacificnm\CategoryType\Controller\Factory\CreateControllerFactory',
            'Pacificnm\CategoryType\Controller\DeleteController' => 'Pacificnm\CategoryType\Controller\Factory\DeleteControllerFactory',
            'Pacificnm\CategoryType\Controller\IndexController' => 'Pacificnm\CategoryType\Controller\Factory\IndexControllerFactory',
            'Pacificnm\CategoryType\Controller\RestController' => 'Pacificnm\CategoryType\Controller\Factory\RestControllerFactory',
            'Pacificnm\CategoryType\Controller\UpdateController' => 'Pacificnm\CategoryType\Controller\Factory\UpdateControllerFactory',
            'Pacificnm\CategoryType\Controller\ViewController' => 'Pacificnm\CategoryType\Controller\Factory\ViewControllerFactory'
        )
    ),
    'service_manager' => array(
        'factories' => array(
            'Pacificnm\CategoryType\Service\ServiceInterface' => 'Pacificnm\CategoryType\Service\Factory\ServiceFactory',
            'Pacificnm\CategoryType\Mapper\MysqlMapperInterface' => 'Pacificnm\CategoryType\Mapper\Factory\MysqlMapperFactory',
            'Pacificnm\CategoryType\Form\Form' => 'Pacificnm\CategoryType\Form\Factory\FormFactory'
        )
    ),
    'router' => array(
        'routes' => array(
            'category-type-create' => array(
                'pageTitle' => 'CategoryType',
                'pageSubTitle' => 'New',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'category-type-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'literal',
                'options' => array(
                    'route' => '/admin/category-type/create',
                    'defaults' => array(
                        'controller' => 'Pacificnm\CategoryType\Controller\CreateController',
                        'action' => 'index'
                    )
                )
            ),
            'category-type-delete' => array(
                'pageTitle' => 'CategoryType',
                'pageSubTitle' => 'Delete',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'category-type-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'segment',
                'options' => array(
                    'route' => '/admin/category-type/delete/[:id]',
                    'defaults' => array(
                        'controller' => 'Pacificnm\CategoryType\Controller\DeleteController',
                        'action' => 'index'
                    )
                )
            ),
            'category-type-index' => array(
                'pageTitle' => 'CategoryType',
                'pageSubTitle' => 'Home',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'category-type-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'literal',
                'options' => array(
                    'route' => '/admin/category-type',
                    'defaults' => array(
                        'controller' => 'Pacificnm\CategoryType\Controller\IndexController',
                        'action' => 'index'
                    )
                )
            ),
            'category-type-rest' => array(
                'pageTitle' => 'CategoryType',
                'pageSubTitle' => 'Rest',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'category-type-index',
                'icon' => 'fa fa-gear',
                'layout' => 'rest',
                'type' => 'segment',
                'options' => array(
                    'route' => '/api/category-type[/:id]',
                    'defaults' => array(
                        'controller' => 'Pacificnm\CategoryType\Controller\RestController'
                    )
                )
            ),
            'category-type-update' => array(
                'pageTitle' => 'CategoryType',
                'pageSubTitle' => 'Edit',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'category-type-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'segment',
                'options' => array(
                    'route' => '/admin/category-type/update/[:id]',
                    'defaults' => array(
                        'controller' => 'Pacificnm\CategoryType\Controller\UpdateController',
                        'action' => 'index'
                    )
                )
            ),
            'category-type-view' => array(
                'pageTitle' => 'CategoryType',
                'pageSubTitle' => 'View',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'category-type-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'segment',
                'options' => array(
                    'route' => '/admin/category-type/view/[:id]',
                    'defaults' => array(
                        'controller' => 'Pacificnm\CategoryType\Controller\ViewController',
                        'action' => 'index'
                    )
                )
            )
        )
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
                'category-type-console-index' => array(
                    'options' => array(
                        'route' => 'category-type',
                        'defaults' => array(
                            'controller' => 'Pacificnm\CategoryType\Controller\ConsoleController',
                            'action' => 'index'
                        )
                    )
                )
            )
        )
    ),
    'view_manager' => array(
        'controller_map' => array(
            'Pacificnm\CategoryType' => true
        ),
        'template_map' => array(
            'pacificnm/category-type/create/index' => __DIR__ . '/../view/category-type/create/index.phtml',
            'pacificnm/category-type/delete/index' => __DIR__ . '/../view/category-type/delete/index.phtml',
            'pacificnm/category-type/index/index' => __DIR__ . '/../view/category-type/index/index.phtml',
            'pacificnm/category-type/update/index' => __DIR__ . '/../view/category-type/update/index.phtml',
            'pacificnm/category-type/view/index' => __DIR__ . '/../view/category-type/view/index.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view'
        )
    ),
    'acl' => array(
        'default' => array(
            'guest' => array(),
            'administrator' => array(
                'category-type-create',
                'category-type-delete',
                'category-type-index',
                'category-type-update',
                'category-type-view'
            )
        )
    ),
    'menu' => array(
        'default' => array()
    ),
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Admin',
                'route' => 'admin-index',
                'useRouteMatch' => true,
                'pages' => array(
                    array(
                        'label' => 'Category',
                        'route' => 'category-index',
                        'useRouteMatch' => true,
                        'pages' => array(
                            array(
                                'label' => 'CategoryType',
                                'route' => 'category-type-index',
                                'useRouteMatch' => true,
                                'pages' => array(
                                    array(
                                        'label' => 'View',
                                        'route' => 'category-type-view',
                                        'useRouteMatch' => true,
                                        'pages' => array(
                                            array(
                                                'label' => 'Edit',
                                                'route' => 'category-type-update',
                                                'useRouteMatch' => true
                                            ),
                                            array(
                                                'label' => 'Delete',
                                                'route' => 'category-type-delete',
                                                'useRouteMatch' => true
                                            )
                                        )
                                    ),
                                    array(
                                        'label' => 'New',
                                        'route' => 'category-type-create',
                                        'useRouteMatch' => true
                                    )
                                )
                            )
                        )
                    )
                )
                
            )
        )
    )
);