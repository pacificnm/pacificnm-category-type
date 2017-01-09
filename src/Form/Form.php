<?php

namespace Pacificnm\CategoryType\Form;

use Zend\Form\Form as ZendForm;
use Zend\InputFilter\InputFilterProviderInterface;
use Pacificnm\CategoryType\Entity\Entity;
use Pacificnm\CategoryType\Hydrator\Hydrator;

class Form extends ZendForm implements InputFilterProviderInterface
{

    /**
     * @param string $name
     * @param array $options
     */
    public function __construct($name = 'categorytype-form', $options = array())
    {
        parent::__construct($name, $options);

        $this->setHydrator(new Hydrator(false));

        $this->setObject(new Entity());

        // categoryTypeId
        $this->add(array(
            'name' => 'categoryTypeId',
            'type' => 'hidden',
            'attributes' => array(
                'id' => 'categoryTypeId'
            )
        ));
        
        // categoryTypeName
        $this->add(array(
            'name' => 'categoryTypeName',
            'type' => 'Text',
            'options' => array(
                'label' => 'Type Name:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'categoryTypeName'
            )
        ));
        
        // categoryTypeActive
        $this->add(array(
            'type' => 'Checkbox',
            'name' => 'categoryTypeActive',
            'options' => array(
                'label' => 'Active',
                'use_hidden_element' => true,
                'checked_value' => '1',
                'unchecked_value' => '0'
            ),
            'attributes' => array(
                'id' => 'categoryTypeActive'
            )
        ));
        
        $this->add(array(
        	'name' => 'submit',
        	'type' => 'button',
        	'attributes' => array(
        		'value' => 'Submit',
        		'id' => 'submit',
        		'class' => 'btn btn-primary btn-flat'
        	)
        ));
    }

    /**
     * {@inheritdoc}
     *
     * @see
     * \Zend\InputFilter\InputFilterProviderInterface::getInputFilterSpecification()
     */
    public function getInputFilterSpecification()
    {
        return array();
    }


}

