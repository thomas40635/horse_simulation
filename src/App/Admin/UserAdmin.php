<?php
namespace App\Admin;

use CustomAdmin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class UserAdmin extends CustomAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', TextType::class)
            ->add('firstname', TextType::class)
            ->add('lastname', TextType::class)
            ->add('email', TextType::class)
            ->add('password', TextType::class)
            ->add('description', TextareaType::class)
            ->add('money', IntegerType::class)
            ->add('gender', TextType::class)
            ->add('birthday', DateType::class)
            ->add('phone', TextType::class)
            ->add('country', TextType::class)
            ->add('website', TextType::class)
            ->add('idAvatar', TextType::class)
            ->add('ip', TextType::class)
            ->add('registrationDate', DateTimeType::class)
            ->add('lastConnectionDate', DateTimeType::class)
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('firstname')
            ->add('lastname')
            ->add('email')
            ->add('password')
            ->add('description')
            ->add('money')
            ->add('gender')
            ->add('birthday')
            ->add('phone')
            ->add('country')
            ->add('website')
            ->add('idAvatar')
            ->add('ip')
            ->add('registrationDate')
            ->add('lastConnectionDate')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->addIdentifier('firstname')
            ->addIdentifier('lastname')
            ->addIdentifier('email')
            ->addIdentifier('password')
            ->addIdentifier('description')
            ->addIdentifier('money')
            ->addIdentifier('gender')
            ->addIdentifier('birthday')
            ->addIdentifier('phone')
            ->addIdentifier('country')
            ->addIdentifier('website')
            ->addIdentifier('idAvatar')
            ->addIdentifier('ip')
            ->addIdentifier('registrationDate')
            ->addIdentifier('lastConnectionDate')
        ;
    }
}