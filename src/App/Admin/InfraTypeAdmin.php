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

final class InfraTypeAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('label', TextType::class)
            ->add('description', TextareaType::class)
            ->add('category', TextType::class)
            ->add('price', IntegerType::class)
            ->add('consumption', IntegerType::class)
            ->add('itemCapacity', IntegerType::class)
            ->add('horseCapacity', IntegerType::class)
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('label')
            ->add('description')
            ->add('category')
            ->add('price')
            ->add('consumption')
            ->add('itemCapacity')
            ->add('horseCapacity')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('label')
            ->addIdentifier('description')
            ->addIdentifier('category')
            ->addIdentifier('price')
            ->addIdentifier('consumption')
            ->addIdentifier('itemCapacity')
            ->addIdentifier('horseCapacity')
        ;
    }
}