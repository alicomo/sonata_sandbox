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


interface WidgetAttributeInterface extends AttributeInterface
{
    /**
     * @return WidgetInterface
     */
    public function getWidget();

    /**
     * @param WidgetInterface $widget The related widget
     *
     * @return mixed
     */
    public function setWidget(WidgetInterface $widget = null);
} 