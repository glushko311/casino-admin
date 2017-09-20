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

class CommonVariableAdmin extends AbstractAdmin
{

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('delete');
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('varName', 'text', array('label' => 'variable name'))
            ->add('value', 'integer', array('label' => 'variable value'))
            ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('varName')
            ->add('value')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('varName')
            ->addIdentifier('value')

        ;
    }
}