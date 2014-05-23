<?php

namespace Como\FormBuilderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Como\FormBuilderBundle\Model\Attribute as BaseAttribute;

/**
 * Attribute
 */
class Attribute extends BaseAttribute
{
    /**
     * @var integer
     */
    private $id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


}
