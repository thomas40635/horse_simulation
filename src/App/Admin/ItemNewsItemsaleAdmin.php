<?php
namespace App\Admin;

use App\AdminBundle\Entity\Horse;
use App\AdminBundle\Entity\Item;
use App\AdminBundle\Entity\News;
use App\AdminBundle\Entity\User;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

final class ItemNewsItemsaleAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('idUser', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'username',
            ])
            ->add('idItem', EntityType::class, [
                'class' => Item::class,
                'choice_label' => 'label',
            ])
            ->add('idNews', EntityType::class, [
                'class' => News::class,
                'choice_label' => 'id',
            ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('idUser.username')
            ->add('idItem.label')
            ->add('idNews.id')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('idUser.username')
            ->addIdentifier('idItem.label')
            ->addIdentifier('idNews.id')
        ;
    }
}