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

class EquipmentAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper

            ->add('name', 'text', array('label' => 'name'))
            ->add('costCoins', 'text', array('label' => 'cost in coins'))
            ->add('usesNumber', 'integer', array('label' => 'uses number'))
            ->add('type', 'choice', array('choices' => array(
                'BLINKERS'=>'1',
                'BRIDLES'=>'2',
                'REINS'=>'3',
                'SADDLE'=>'4',
                'STIRRUPS'=>'5',
                'BOOTS' =>'6',
                'CROP'=>'7',
                'GOGGLES'=>'8',
                'HELMET'=>'9'
            )))
            ->add('description', 'textarea', array('label' => 'description'))
            ->add('buffs', 'text', array('label' => 'buff ids'))
            ->add('picture', 'text', array('label' => 'picture url'))
//
//            ->add('tests', 'sonata_type_model', array(
//                'class'=>'CasinoAdminBundle\Entity\Test',
//                'property'=>'text',
//                'multiple' => true));
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
//            ->add('Id')
            ->add('name')
            ->add('costCoins')
            ->add('usesNumber')
            ->add('type')
            ->add('description')
            ->add('picture')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('Id')
            ->addIdentifier('name')
            ->addIdentifier('costCoins')
            ->addIdentifier('usesNumber')
            ->addIdentifier('type')
            ->addIdentifier('description')
            ->addIdentifier('picture')
        ;
    }
}