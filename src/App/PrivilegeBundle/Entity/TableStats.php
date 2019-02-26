<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TableStats
 *
 * @ORM\Table(name="table_stats")
 * @ORM\Entity
 */
class TableStats
{
    /**
     * @var string
     *
     * @ORM\Column(name="db_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dbName;

    /**
     * @var string
     *
     * @ORM\Column(name="table_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tableName;

    /**
     * @var integer
     *
     * @ORM\Column(name="cardinality", type="bigint", nullable=true)
     */
    private $cardinality;


}

