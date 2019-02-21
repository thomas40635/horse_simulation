<?php
namespace App\Admin;

use App\AdminBundle\Entity\Breed;
use App\AdminBundle\Entity\Club;
use App\AdminBundle\Entity\Disease;
use App\AdminBundle\Entity\InfraType;
use App\AdminBundle\Entity\RidingSchool;
use App\AdminBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class InfrastructureAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('level', IntegerType::class)
            ->add('idClub', EntityType::class, [
                'class' => Club::class,
                'choice_label' => 'id',
            ])
            ->add('idInfratype', EntityType::class, [
                'class' => InfraType::class,
                'choice_label' => 'label',
            ])
            ->add('idRidingSchool', EntityType::class, [
                'class' => RidingSchool::class,
                'choice_label' => 'id',
            ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('level')
            ->add('idClub.id')
            ->add('idInfratype.label')
            ->add('idRidingSchool.id')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('level')
            ->addIdentifier('idClub.id')
            ->addIdentifier('idInfratype.label')
            ->addIdentifier('idRidingSchool.id')
        ;
    }
}