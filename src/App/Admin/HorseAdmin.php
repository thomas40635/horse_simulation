<?php
namespace App\Admin;

use App\AdminBundle\Entity\Breed;
use App\AdminBundle\Entity\Disease;
use App\AdminBundle\Entity\Infrastructure;
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

final class HorseAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', TextType::class)
            ->add('sociability', IntegerType::class)
            ->add('intelligence', IntegerType::class)
            ->add('temperament', IntegerType::class)
            ->add('health', IntegerType::class)
            ->add('mentalHealth', IntegerType::class)
            ->add('stress', IntegerType::class)
            ->add('hunger', IntegerType::class)
            ->add('cleanliness', IntegerType::class)
            ->add('experience', IntegerType::class)
            ->add('level', IntegerType::class)
            ->add('score', IntegerType::class)
            ->add('idBreed', EntityType::class, [
                'class' => Breed::class,
                'choice_label' => 'label',
            ])
            ->add('idDisease', EntityType::class, [
                'class' => Disease::class,
                'choice_label' => 'label',
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
            ->add('name')
            ->add('sociability')
            ->add('intelligence')
            ->add('temperament')
            ->add('health')
            ->add('mentalHealth')
            ->add('stress')
            ->add('hunger')
            ->add('cleanliness')
            ->add('experience')
            ->add('level')
            ->add('score')
            ->add('idBreed.label')
            ->add('idInfrastructure.id')
            ->add('idDisease.label')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->addIdentifier('sociability')
            ->addIdentifier('intelligence')
            ->addIdentifier('temperament')
            ->addIdentifier('health')
            ->addIdentifier('mentalHealth')
            ->addIdentifier('stress')
            ->addIdentifier('hunger')
            ->addIdentifier('cleanliness')
            ->addIdentifier('experience')
            ->addIdentifier('level')
            ->addIdentifier('score')
            ->addIdentifier('idBreed.label')
            ->addIdentifier('idInfrastructure.id')
            ->addIdentifier('idDisease.label')

        ;
    }
}