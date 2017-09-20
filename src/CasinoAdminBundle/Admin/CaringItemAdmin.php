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




class CaringItemAdmin extends AbstractAdmin
{
    protected function configureRoutes(RouteCollection $collection)
    {
        // to remove a single route
        $collection->remove('delete');
//        // OR remove all route except named ones
//        $collection->clearExcept(array('list', 'show'));
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array('label' => 'name'))
            ->add('description', 'textarea', array('label' => 'description'))
            ->add('costCoins', 'text', array('label' => 'cost in coins'))
            ->add('happiness', 'integer', array('label' => 'happiness bonus'))
            ->add('picture', 'text', array('label' => 'picture'))
            ->add('buffId', 'sonata_type_model', array(
                'class'=>'CasinoAdminBundle\Entity\Buff',
                'property'=>'name',
                'multiple' => false));
//            ->add('buffId', 'text', array('label' => 'buffId'))

        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('Id')
            ->add('name')
            ->add('costCoins')
            ->add('happiness')
//            ->add('buffId')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('Id')
            ->addIdentifier('name')
            ->addIdentifier('costCoins')
            ->addIdentifier('happiness')
//            ->addIdentifier('buffId')

        ;
    }
}