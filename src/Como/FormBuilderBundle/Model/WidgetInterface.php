<?php
/*
 * This file is part of the como-form-builder package.
 *
 * (author) Muhammadali Shaduli <ali@comogroup.com.au>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Como\FormBuilderBundle\Model;

/**
 * Interface of Widget
 */

interface WidgetInterface
{
    /**
     * Sets the widget Id
     *
     * @param mixed $id
     *
     * @return void
     */
    public function setId($id);

    /**
     * Returns the widget id
     *
     * @return mixed void
     */
    public function getId();

    /**
     * Sets the name
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName();

    /**
     * Sets the code
     *
     * @param string $code
     */
    public function setCode($code);

    /**
     * Returns the code
     *
     * @return string
     */
    public function getCode();

    /**
     * Sets the class
     *
     * @param string $class
     */
    public function setClass($class);

    /**
     * Returns the class
     *
     * @return string
     */
    public function getClass();


    /**
     * Sets the style
     *
     * @param string $style
     */
    public function setStyle($style);

    /**
     * Returns the style
     *
     * @return string
     */
    public function getStyle();


    /**
     * Sets the creation date and time
     *
     * @param \Datetime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt = null);

    /**
     * Returns the creation date and time
     *
     * @return \Datetime $createdAt
     */
    public function getCreatedAt();

    /**
     * Set the last update date and time
     *
     * @param \Datetime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * Returns the last update date and time
     *
     * @return \Datetime $updatedAt
     */
    public function getUpdatedAt();


    /**
     * Add attribute
     *
     * @param AttributeInterface $attribute
     */
    public function addAttribute(AttributeInterface $attribute);



    /**
     * Remove attribute
     *
     * @param AttributeInterface $attribute
     */
    public function removeAttribute(AttributeInterface $attribute);


    /**
     * Get attributes
     *
     * @return array
     */
    public function getAttributes();


    /**
     * Add widget_option
     *
     * @param OptionInterface $option
     */
    public function addWidgetOption(OptionInterface $option);


    /**
     * Remove widget_option
     *
     * @param OptionInterface $option
     */
    public function removeWidgetOption(OptionInterface $option);


    /**
     * Get widget_options
     *
     * @return array
     */
    public function getWidgetOptions();



} 