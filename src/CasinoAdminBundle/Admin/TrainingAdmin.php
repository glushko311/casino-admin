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
use Sonata\AdminBundle\Route\RouteCollection;




class TrainingAdmin extends AbstractAdmin
{

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('delete');
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array('label' => 'name'))
//            ->add('description', 'textarea', array('label' => 'description'))
            ->add('level', 'integer', array('label' => 'level'))
            ->add('costCoins', 'integer', array('label' => 'cost in coins'))
            ->add('age', 'integer', array('label' => 'age'))
            ->add('consistency', 'integer', array('label' => 'consistency'))
            ->add('propertyValue', 'integer', array('label' => 'propertyValue'))
            ->add('trainingBuildingId', 'sonata_type_model', array(
                'class'=>'CasinoAdminBundle\Entity\TrainingBuilding',
                'property'=>'trainableProperty',
                'multiple' => false))
            ->add('picture', 'text', array('label' => 'picture'))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('Id')
            ->add('name')
            ->add('level')
            ->add('costCoins')
            ->add('age')
            ->add('consistency')
            ->add('propertyValue')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('Id')
            ->addIdentifier('name')
            ->addIdentifier('level')
            ->addIdentifier('costCoins')
            ->addIdentifier('age')
            ->addIdentifier('consistency')
            ->addIdentifier('propertyValue')
        ;
    }
}