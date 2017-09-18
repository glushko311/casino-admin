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

        $em = $this->modelManager->getEntityManager('CasinoAdminBundle\Entity\Test');

        $qb = $em->createQueryBuilder();

        $qb = $qb->add('select', 'u')
            ->add('from', 'CasinoAdminBundle\Entity\Test u');

        $query = $qb->getQuery();
        $arrayType = $query->getArrayResult();

        $formMapper
            ->add('affectProperty', 'choice', array('choices' => array(
                'Speed'=>'Speed',
                'Stamina'=>'Stamina',
                'Acceleration'=>'Acceleration',
                'Finishing'=>'Finishing',
                'Starting'=>'Starting',
                'Pacing'=>'Pacing'
            )))
            ->add('affectValue', 'integer', array('label' => 'affect value'))
            ->add('duration', 'integer', array('label' => 'duration'))
            ->add('actions', 'text', array('label' => 'actions'))
            ->add('actionCount', 'integer', array('label' => 'action count'))
            ->add('picture', 'text', array('label' => 'picture url'))
            ->add('name', 'text', array('label' => 'name'))
            ->add('description', 'textarea', array('label' => 'description'))

            ->add('tests', 'sonata_type_model', array(
                'class'=>'CasinoAdminBundle\Entity\Test',
                'property'=>'text',
                'multiple' => true));
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
//            ->add('Id')
            ->add('name')
            ->add('affectProperty')
            ->add('affectValue')
            ->add('duration')
            ->add('actions')
            ->add('actionCount')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->addIdentifier('affectProperty')
            ->addIdentifier('affectValue')
            ->addIdentifier('duration')
            ->addIdentifier('actions')
            ->addIdentifier('actionCount')
            ->addIdentifier('picture')
        ;
    }
}