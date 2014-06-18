<?php
/*
 * This file is part of the sandbox package.
 *
 * (c) Muhammadali Shaduli <ali@comogroup.com.au>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Como\FormBuilderBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

class FormBuilderType extends AbstractType
{
    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'como_form_builder';
    }

} 