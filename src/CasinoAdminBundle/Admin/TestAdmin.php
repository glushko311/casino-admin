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
use Sonata\AdminBundle\Route\RouteCollection;

class TestAdmin extends AbstractAdmin
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
        ->add('text', 'text');
//        ->add('buff_id', 'integer');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('text');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('text')
            ->addIdentifier('buff_id');
    }
}