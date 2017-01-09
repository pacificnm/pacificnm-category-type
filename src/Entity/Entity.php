<?php
namespace Pacificnm\CategoryType\Entity;

class Entity
{

    /**
     *
     * @var number
     */
    protected $categoryTypeId;

    /**
     *
     * @var string
     */
    protected $categoryTypeName;

    /**
     *
     * @var boolean
     */
    protected $categoryTypeActive;

    /**
     *
     * @return the $categoryTypeId
     */
    public function getCategoryTypeId()
    {
        return $this->categoryTypeId;
    }

    /**
     *
     * @return the $categoryTypeName
     */
    public function getCategoryTypeName()
    {
        return $this->categoryTypeName;
    }

    /**
     *
     * @return the $categoryTypeActive
     */
    public function getCategoryTypeActive()
    {
        return $this->categoryTypeActive;
    }

    /**
     *
     * @param number $categoryTypeId            
     */
    public function setCategoryTypeId($categoryTypeId)
    {
        $this->categoryTypeId = $categoryTypeId;
    }

    /**
     *
     * @param string $categoryTypeName            
     */
    public function setCategoryTypeName($categoryTypeName)
    {
        $this->categoryTypeName = $categoryTypeName;
    }

    /**
     *
     * @param boolean $categoryTypeActive            
     */
    public function setCategoryTypeActive($categoryTypeActive)
    {
        $this->categoryTypeActive = $categoryTypeActive;
    }
}

