<?php
namespace App\Admin;

use App\AdminBundle\Entity\Horse;
use App\AdminBundle\Entity\ItemCategory;
use App\AdminBundle\Entity\Quality;
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

final class ItemAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('label', TextType::class)
            ->add('description', TextareaType::class)
            ->add('price', IntegerType::class)
            ->add('level', IntegerType::class)
            ->add('idItemCategory', EntityType::class, [
                'class' => ItemCategory::class,
                'choice_label' => 'label',
            ])
            ->add('idHorse', EntityType::class, [
                'class' => Horse::class,
                'choice_label' => 'name',
            ])
            ->add('idQuality', EntityType::class, [
                'class' => Quality::class,
                'choice_label' => 'label',
            ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('label')
            ->add('description')
            ->add('price')
            ->add('idItemCategory.label')
            ->add('idHorse.name')
            ->add('idQuality.label')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('label')
            ->addIdentifier('description')
            ->addIdentifier('price')
            ->addIdentifier('level')
            ->addIdentifier('idItemCategory.label')
            ->addIdentifier('idHorse.name')
            ->addIdentifier('idQuality.label')
        ;
    }
}