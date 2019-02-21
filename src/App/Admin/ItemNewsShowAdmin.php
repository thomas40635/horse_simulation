<?php
namespace App\Admin;

use App\AdminBundle\Entity\Horse;
use App\AdminBundle\Entity\News;
use App\AdminBundle\Entity\RidingShow;
use App\AdminBundle\Entity\User;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

final class ItemNewsShowAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('idUser', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'username',
            ])
            ->add('idRidingShow', EntityType::class, [
                'class' => RidingShow::class,
                'choice_label' => 'id',
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
            ->add('idRidingShow.id')
            ->add('idNews.id')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('idUser.username')
            ->addIdentifier('idRidingShow.id')
            ->addIdentifier('idNews.id')
        ;
    }
}