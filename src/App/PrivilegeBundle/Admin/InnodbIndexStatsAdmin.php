<?php
namespace App\PrivilegeBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class InnodbIndexStatsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $date = new \DateTime('NOW');
        $formMapper
            ->add('databaseName', TextType::class, array('data' => 'horse_simulation', 'disabled' => 'disabled'))
            ->add('tableName', TextType::class)
            ->add('indexName', TextType::class)
            ->add('statName', TextType::class)
            ->add('lastUpdate', DateTimeType::class, array('data' => $date, 'disabled' => 'disabled'))
            ->add('statValue', IntegerType::class)
            ->add('sampleSize', IntegerType::class)
            ->add('statDescription', TextType::class)
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('databaseName')
            ->add('indexName')
            ->add('tableName')
            ->add('statName')
            ->add('lastUpdate')
            ->add('statValue')
            ->add('sampleSize')
            ->add('statDescription')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('databaseName')
            ->addIdentifier('indexName')
            ->addIdentifier('tableName')
            ->addIdentifier('statName')
            ->addIdentifier('lastUpdate')
            ->addIdentifier('statValue')
            ->addIdentifier('sampleSize')
            ->addIdentifier('statDescription')
        ;
    }

    public function createQuery($context = 'list')
    {
        $query = parent::createQuery($context);
        $rootAlias = $query->getRootAliases()[0];

        $query->andWhere(
            $query->expr()->eq($rootAlias.'.databaseName', ':databaseName')
        );

        $query->setParameter(':databaseName', 'horse_simulation');

        return $query;
    }

   public function prePersist($object)
   {
       $object->setDatabaseName('horse_simulation');
       $date = new \DateTime('NOW');
       $object->setLastUpdate($date);
   }
}