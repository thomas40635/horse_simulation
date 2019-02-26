<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InnodbIndexStats
 *
 * @ORM\Table(name="innodb_index_stats")
 * @ORM\Entity
 */
class InnodbIndexStats
{
    /**
     * @var string
     *
     * @ORM\Column(name="database_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $databaseName;

    /**
     * @var string
     *
     * @ORM\Column(name="table_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tableName;

    /**
     * @var string
     *
     * @ORM\Column(name="index_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $indexName;

    /**
     * @var string
     *
     * @ORM\Column(name="stat_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $statName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="stat_value", type="bigint", nullable=false)
     */
    private $statValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="sample_size", type="bigint", nullable=true)
     */
    private $sampleSize;

    /**
     * @var string
     *
     * @ORM\Column(name="stat_description", type="string", length=1024, nullable=false)
     */
    private $statDescription;


}

