<?php

namespace Como\FormBuilderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attribute
 */
class Attribute
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


    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * @var \Como\FormBuilderBundle\Entity\Widget
     */
    private $widget;


    /**
     * Set name
     *
     * @param string $name
     * @return Attribute
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Attribute
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set widget
     *
     * @param \Como\FormBuilderBundle\Entity\Widget $widget
     * @return Attribute
     */
    public function setWidget(\Como\FormBuilderBundle\Entity\Widget $widget = null)
    {
        $this->widget = $widget;

        return $this;
    }

    /**
     * Get widget
     *
     * @return \Como\FormBuilderBundle\Entity\Widget 
     */
    public function getWidget()
    {
        return $this->widget;
    }
}
