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

/**
 * Interface of Option
 */

interface OptionInterface
{
    /**
     * Sets the option_id
     *
     * @param mixed $id
     *
     * @return void
     */
    public function setId($id);

    /**
     * Returns the option_id
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
     * Sets the value
     *
     * @param string $value
     */
    public function setValue($value);

    /**
     * Returns the name
     *
     * @return string
     */
    public function getValue();

} 