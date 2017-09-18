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




class CaringItemAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('costCoins', 'text', array('label' => 'affect property'))
            ->add('picture', 'integer', array('label' => 'affect value'))
            ->add('happiness', 'integer', array('label' => 'duration'))
            ->add('buffId', 'text', array('label' => 'actions'))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('costCoins')
            ->add('picture')
            ->add('happiness')
            ->add('buffId')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('Id')
            ->addIdentifier('costCoins')
            ->addIdentifier('picture')
            ->addIdentifier('buffId')

        ;
    }
}