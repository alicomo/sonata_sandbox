<?php
/*
 * This file is part of the sandbox package.
 *
 * (author) Muhammadali Shaduli <ali@comogroup.com.au>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Como\FormBuilderBundle\Model;


abstract class Option implements WidgetOptionInterface
{

    protected $name;
    protected $value;
    protected $widget;
    /**
     * Sets the option_id
     *
     * @param mixed $id
     *
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Sets the name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Returns the name
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return WidgetInterface
     */
    public function getWidget()
    {
        return $this->widget;
    }

    /**
     * @param WidgetInterface $widget The related widget
     *
     * @return mixed
     */
    public function setWidget(WidgetInterface $widget = null)
    {
        $this->widget = $widget;
    }


}