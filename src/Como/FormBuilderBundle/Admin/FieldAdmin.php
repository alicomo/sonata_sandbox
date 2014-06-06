<?php

namespace Como\FormBuilderBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class FieldAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fieldLabel')
            ->add('fieldNullable')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fieldLabel', null, array('label' => 'Label'))
            ->add('fieldLength', null, array('label' => 'Length'))
            ->add('fieldNullable', null, array('label' => 'Nullable'))
            ->add('createdAt')
            ->add('updatedAt')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('fieldLabel', null, array('label' => 'Label'))
            ->add('filedType', null, array('label' => 'Type', 'required' => true))
            ->add('fieldLength', null, array('label' => 'Length'))
            ->add('fieldNullable', null, array('label' => 'Nullable'))

        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('fieldLabel')
            ->add('fieldLength')
            ->add('fieldNullable')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
}
