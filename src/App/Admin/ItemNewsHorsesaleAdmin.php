<?php
namespace App\Admin;

use App\AdminBundle\Entity\Horse;
use App\AdminBundle\Entity\News;
use App\AdminBundle\Entity\User;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

final class ItemNewsHorsesaleAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('idUser', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'username',
            ])
            ->add('idHorse', EntityType::class, [
                'class' => Horse::class,
                'choice_label' => 'name',
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
            ->add('idHorse.name')
            ->add('idNews.id')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('idUser.username')
            ->addIdentifier('idHorse.name')
            ->addIdentifier('idNews.id')
        ;
    }
}