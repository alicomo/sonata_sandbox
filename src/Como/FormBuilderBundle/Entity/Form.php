<?php

namespace Como\FormBuilderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Sonata\PageBundle\Entity\Page;

/**
 * Form
 */
class Form
{
   
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $fields;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


    public $formBuilder;

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
     * Set title
     *
     * @param string $title
     * @return Form
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Form
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Form
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fields
     *
     * @param string $fields
     * @return Form
     */
    public function setFields($fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Get fields
     *
     * @return string 
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Form
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
     * @return Form
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
    private $thankYouType;

    /**
     * @var string
     */
    private $thankYouExternalPage;

    /**
     * @var string
     */
    private $thankYouMessage;

    /**
     * @var \Sonata\PageBundle\Entity\Page
     */
    private $thankYouInternalPage;


    /**
     * Set thankYouType
     *
     * @param string $thankYouType
     * @return Form
     */
    public function setThankYouType($thankYouType)
    {
        $this->thankYouType = $thankYouType;

        return $this;
    }

    /**
     * Get thankYouType
     *
     * @return string 
     */
    public function getThankYouType()
    {
        return $this->thankYouType;
    }

    /**
     * Set thankYouExternalPage
     *
     * @param string $thankYouExternalPage
     * @return Form
     */
    public function setThankYouExternalPage($thankYouExternalPage)
    {
        $this->thankYouExternalPage = $thankYouExternalPage;

        return $this;
    }

    /**
     * Get thankYouExternalPage
     *
     * @return string 
     */
    public function getThankYouExternalPage()
    {
        return $this->thankYouExternalPage;
    }

    /**
     * Set thankYouMessage
     *
     * @param string $thankYouMessage
     * @return Form
     */
    public function setThankYouMessage($thankYouMessage)
    {
        $this->thankYouMessage = $thankYouMessage;

        return $this;
    }

    /**
     * Get thankYouMessage
     *
     * @return string 
     */
    public function getThankYouMessage()
    {
        return $this->thankYouMessage;
    }

    /**
     * Set thankYouInternalPage
     *
     * @param Page $thankYouInternalPage
     * @return Form
     */
    public function setThankYouInternalPage(Page $thankYouInternalPage = null)
    {
        $this->thankYouInternalPage = $thankYouInternalPage;

        return $this;
    }

    /**
     * Get thankYouInternalPage
     *
     * @return Page
     */
    public function getThankYouInternalPage()
    {
        return $this->thankYouInternalPage;
    }
}
