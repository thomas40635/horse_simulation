<?php
namespace App\Admin;

use App\AdminBundle\Entity\Horse;
use App\AdminBundle\Entity\Item;
use App\AdminBundle\Entity\News;
use App\AdminBundle\Entity\RidingShow;
use App\AdminBundle\Entity\User;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

final class RewardAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('position', IntegerType::class)
            ->add('idItem', EntityType::class, [
                'class' => Item::class,
                'choice_label' => 'label',
            ])
            ->add('idRidingShow', EntityType::class, [
                'class' => RidingShow::class,
                'choice_label' => 'id',
            ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('position')
            ->add('idItem.label')
            ->add('idRidingShow.id')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('position')
            ->addIdentifier('idItem.label')
            ->addIdentifier('idRidingShow.id')
        ;
    }
}