<?php

namespace Pacificnm\CategoryType\Mapper;

use Zend\Hydrator\HydratorInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\Sql\Update;
use Zend\Db\Sql\Insert;
use Zend\Db\Sql\Delete;
use Pacificnm\Mapper\AbstractMysqlMapper;
use Pacificnm\CategoryType\Entity\Entity;

class MysqlMapper extends AbstractMysqlMapper implements MysqlMapperInterface
{

    /**
     * Mysql Mapper Construct
     *
     * @param AdapterInterface $readAdapter
     * @param AdapterInterface $writeAdapter
     * @param HydratorInterface $hydrator
     * @param Entity $prototype
     */
    public function __construct(AdapterInterface $readAdapter, AdapterInterface $writeAdapter, HydratorInterface $hydrator, Entity $prototype)
    {
        $this->hydrator = $hydrator;
            
        $this->prototype = $prototype;
            
        parent::__construct($readAdapter, $writeAdapter);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Pacificnm\CategoryType\Mapper\MysqlMapperInterface::getAll()
     */
    public function getAll(array $filter)
    {
        $this->select = $this->readSql->select('category_type');
                    
        $this->filter($filter); 

        if (array_key_exists('pagination', $filter)) {
            if ($filter['pagination'] == 'off') {  
                return $this->getRows();    
            }
        }

        return $this->getPaginator();
    }

    /**
     * {@inheritdoc}
     *
     * @see \Pacificnm\CategoryType\Mapper\MysqlMapperInterface::get()
     */
    public function get($id)
    {
        $this->select = $this->readSql->select('category_type');

        $this->select->where(array(
            'category_type.category_type_id = ?' => $id  
        ));
                    
        return $this->getRow();
    }

    /**
     * {@inheritdoc}
     *
     * @see \Pacificnm\CategoryType\Mapper\MysqlMapperInterface::save()
     */
    public function save(Entity $entity)
    {
        $postData = $this->hydrator->extract($entity);
                    
        if ($entity->getCategoryTypeId()) {
            $this->update = new Update('category_type'); 
                
            $this->update->set($postData);  
                
            $this->update->where(array(
                'category_type.category_type_id = ?' => $entity->getCategoryTypeId()
            ));
                    
            $this->updateRow();            
        } else {
            $this->insert = new Insert('category_type'); 
                
            $this->insert->values($postData);
                
            $id = $this->createRow();
                
            $entity->setCategoryTypeId($id);        
        }
                    
        return $this->get($entity->getCategoryTypeId());
    }

    /**
     * {@inheritdoc}
     *
     * @see \Pacificnm\CategoryType\Mapper\MysqlMapperInterface::delete()
     */
    public function delete(Entity $entity)
    {
        $this->delete = new Delete('category_type');
        $this->delete->where(array(
             'category_type.category_type_id = ?' => $entity->getCategoryTypeId()
        ));
                 
        return $this->deleteRow();
    }

    /**
     * Filters and search
     *
     * @param array $filter
     * @return \CategoryType\Mapper\MysqlMapper
     */
    protected function filter(array $filter)
    {
        // categoryTypeActive
        if(array_key_exists('categoryTypeActive', $filter) && strlen($filter['categoryTypeActive']) > 0) {
            $this->select->where(array(
                'category_type.category_type_active = ?' => $filter['categoryTypeActive']
            ));
        }
        
        return $this;
    }


}

