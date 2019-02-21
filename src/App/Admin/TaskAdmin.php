<?php
namespace App\Admin;

use App\AdminBundle\Entity\Horse;
use App\AdminBundle\Entity\Infrastructure;
use App\AdminBundle\Entity\RidingSchool;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class TaskAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('action', TextType::class)
            ->add('frequency', TextType::class)
            ->add('idHorse', EntityType::class, [
                'class' => Horse::class,
                'choice_label' => 'name',
            ])
            ->add('idRidingSchool', EntityType::class, [
                'class' => RidingSchool::class,
                'choice_label' => 'id',
            ])
            ->add('idInfrastructure', EntityType::class, [
                'class' => Infrastructure::class,
                'choice_label' => 'id',
            ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('action')
            ->add('frequency')
            ->add('idHorse.name')
            ->add('idRidingSchool.id')
            ->add('idInfrastructure.id')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('action')
            ->addIdentifier('frequency')
            ->addIdentifier('idHorse.name')
            ->addIdentifier('idRidingSchool.id')
            ->addIdentifier('idInfrastructure.id')
        ;
    }
}