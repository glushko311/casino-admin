<?php
/**
 * Created by PhpStorm.
 * User: splinestudio-hp-vadim
 * Date: 11.09.17
 * Time: 16:45
 */

namespace CasinoAdminBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
//use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Form\Type\CollectionType;




class BuffAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Buff')
                ->add('affectProperty', 'text', array('label' => 'affect property'))
                ->add('affectValue', 'integer', array('label' => 'affect value'))
                ->add('duration', 'integer', array('label' => 'duration'))
                ->add('actions', 'text', array('label' => 'actions'))
                ->add('actionCount', 'integer', array('label' => 'action count'))
                ->add('picture', 'text', array('label' => 'picture url'))
            ->end()
            ->with('Test')
                ->add('text','text', array('label'=>'test text'))

//
////            ->add('Id', null, array('label' => 'id'))
//            ->add('affectProperty', 'text', array('label' => 'affect property'))
//            ->add('affectValue', 'integer', array('label' => 'affect value'))
//            ->add('duration', 'integer', array('label' => 'duration'))
//            ->add('actions', 'text', array('label' => 'actions'))
//            ->add('actionCount', 'integer', array('label' => 'action count'))
//            ->add('picture', 'text', array('label' => 'picture url'))
//            ->add('Test', CollectionType::class, array(
//                'by_reference' => false
//                ),
//                array(
//                    'edit' => 'inline',
//                    'inline' => 'table',
//                    'sortable' => 'position',
//                    'limit' => 3
//            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
//            ->add('Id')
            ->add('affectProperty')
            ->add('affectValue')
            ->add('duration')
            ->add('actions')
            ->add('actionCount')
            ->add('picture')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('Id')
            ->addIdentifier('affectProperty')
            ->addIdentifier('affectValue')
            ->addIdentifier('duration')
            ->addIdentifier('actions')
            ->addIdentifier('actionCount')
            ->addIdentifier('picture')
        ;
    }
}