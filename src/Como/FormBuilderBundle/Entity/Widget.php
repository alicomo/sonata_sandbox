<?php

namespace Como\FormBuilderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Como\FormBuilderBundle\Model\Widget as BaseWidget;
use Como\FormBuilderBundle\Model\AttributeInterface;
use Como\FormBuilderBundle\Model\OptionInterface;

/**
 * Widget
 */
class Widget extends BaseWidget
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
     * Constructor
     */
    public function __construct()
    {
        $this->attributes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->widget_options = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Remove attributes
     *
     * @param AttributeInterface $attribute
     */
    public function removeAttribute(AttributeInterface $attribute)
    {
        $this->attributes->removeElement($attribute);
    }



    /**
     * Remove widget_option
     *
     * @param OptionInterface $option
     */
    public function removeWidgetOption(OptionInterface $option)
    {
        $this->widget_options->removeElement($option);
    }

}
