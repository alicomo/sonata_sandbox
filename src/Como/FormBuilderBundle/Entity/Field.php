<?php

namespace Como\FormBuilderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Field
 */
class Field
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $fieldLabel;

    /**
     * @var string
     */
    private $fieldLength;

    /**
     * @var boolean
     */
    private $fieldNullable;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


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
     * Set fieldLabel
     *
     * @param string $fieldLabel
     * @return Field
     */
    public function setFieldLabel($fieldLabel)
    {
        $this->fieldLabel = $fieldLabel;

        return $this;
    }

    /**
     * Get fieldLabel
     *
     * @return string 
     */
    public function getFieldLabel()
    {
        return $this->fieldLabel;
    }

    /**
     * Set fieldLength
     *
     * @param string $fieldLength
     * @return Field
     */
    public function setFieldLength($fieldLength)
    {
        $this->fieldLength = $fieldLength;

        return $this;
    }

    /**
     * Get fieldLength
     *
     * @return string 
     */
    public function getFieldLength()
    {
        return $this->fieldLength;
    }

    /**
     * Set fieldNullable
     *
     * @param boolean $fieldNullable
     * @return Field
     */
    public function setFieldNullable($fieldNullable)
    {
        $this->fieldNullable = $fieldNullable;

        return $this;
    }

    /**
     * Get fieldNullable
     *
     * @return boolean 
     */
    public function getFieldNullable()
    {
        return $this->fieldNullable;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Field
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
     * @return Field
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
}
