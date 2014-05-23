<?php

namespace Como\FormBuilderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Como\FormBuilderBundle\Model\Option as BaseOption;

/**
 * WidgetOption
 */
class WidgetOption extends BaseOption
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
