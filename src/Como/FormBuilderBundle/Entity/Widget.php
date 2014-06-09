<?php

namespace Como\FormBuilderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Widget
 */
class Widget
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


    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->createdAt = new \DateTime;
        $this->updatedAt = new \DateTime;
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime;
    }

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $class;

    /**
     * @var string
     */
    private $style;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $attributes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $widget_options;


    /**
     * Set name
     *
     * @param string $name
     * @return Widget
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
     * Set code
     *
     * @param string $code
     * @return Widget
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set class
     *
     * @param string $class
     * @return Widget
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set style
     *
     * @param string $style
     * @return Widget
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Widget
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Widget
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Add attributes
     *
     * @param \Como\FormBuilderBundle\Entity\Attribute $attributes
     * @return Widget
     */
    public function addAttribute(\Como\FormBuilderBundle\Entity\Attribute $attributes)
    {

        $attributes->setWidget($this);
        $this->attributes[] = $attributes;

        return $this;
    }

    /**
     * Get attributes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Add widget_options
     *
     * @param \Como\FormBuilderBundle\Entity\WidgetOption $widgetOptions
     * @return Widget
     */
    public function addWidgetOption(\Como\FormBuilderBundle\Entity\WidgetOption $widgetOptions)
    {
        $widgetOptions->setWidget($this);
        $this->widget_options[] = $widgetOptions;

        return $this;
    }

    /**
     * Get widget_options
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWidgetOptions()
    {
        return $this->widget_options;
    }
}
