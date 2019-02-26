<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InnodbTableStats
 *
 * @ORM\Table(name="innodb_table_stats")
 * @ORM\Entity
 */
class InnodbTableStats
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
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="n_rows", type="bigint", nullable=false)
     */
    private $nRows;

    /**
     * @var integer
     *
     * @ORM\Column(name="clustered_index_size", type="bigint", nullable=false)
     */
    private $clusteredIndexSize;

    /**
     * @var integer
     *
     * @ORM\Column(name="sum_of_other_index_sizes", type="bigint", nullable=false)
     */
    private $sumOfOtherIndexSizes;


}

