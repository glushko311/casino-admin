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




class TrainingBuildingAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array('label' => 'name'))
            ->add('description', 'textarea', array('label' => 'description'))
            ->add('trainableProperty', 'choice', array('choices' => array(
                'Speed'=>'Speed',
                'Stamina'=>'Stamina',
                'Acceleration'=>'Acceleration',
                'Finishing'=>'Finishing',
                'Starting'=>'Starting',
                'Pacing'=>'Pacing'
            )))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('Id')
            ->add('name')
            ->add('trainableProperty')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('Id')
            ->addIdentifier('name')
            ->addIdentifier('trainableProperty')

        ;
    }
}