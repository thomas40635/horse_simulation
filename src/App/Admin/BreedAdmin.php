<?php
namespace App\Admin;

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

final class BreedAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('label', TextType::class)
            ->add('description', TextareaType::class)
            ->add('resistance', IntegerType::class)
            ->add('stamina', IntegerType::class)
            ->add('speed', IntegerType::class)
            ->add('springiness', IntegerType::class)
            ->add('modifierMin', IntegerType::class)
            ->add('modifierMax', IntegerType::class)
            ->add('rarity', TextType::class)
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('label')
            ->add('description')
            ->add('resistance')
            ->add('stamina')
            ->add('speed')
            ->add('springiness')
            ->add('modifierMin')
            ->add('modifierMax')
            ->add('rarity')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('label')
            ->addIdentifier('description')
            ->addIdentifier('resistance')
            ->addIdentifier('stamina')
            ->addIdentifier('speed')
            ->addIdentifier('springiness')
            ->addIdentifier('modifierMin')
            ->addIdentifier('modifierMax')
            ->addIdentifier('rarity')
        ;
    }
}