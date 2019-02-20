<?php
namespace App\Admin;

use App\AdminBundle\Entity\Circuit;
use App\AdminBundle\Entity\Club;
use App\AdminBundle\Entity\RidingShow;
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

final class RidingShowAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('startingDate', DateType::class)
            ->add('endingDate', DateType::class)
            ->add('idCircuit', EntityType::class, [
                'class' => Circuit::class,
                'choice_label' => 'id',
            ])
            ->add('idClub', EntityType::class, [
                'class' => Club::class,
                'choice_label' => 'id',
            ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('startingDate')
            ->add('endingDate')
            ->add('idCircuit.id')
            ->add('idClub.id')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('startingDate')
            ->addIdentifier('endingDate')
            ->addIdentifier('idCircuit.id')
            ->addIdentifier('idClub.id')
        ;
    }
}