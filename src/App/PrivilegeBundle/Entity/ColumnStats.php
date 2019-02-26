<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ColumnStats
 *
 * @ORM\Table(name="column_stats")
 * @ORM\Entity
 */
class ColumnStats
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
     * @var string
     *
     * @ORM\Column(name="column_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $columnName;

    /**
     * @var string
     *
     * @ORM\Column(name="min_value", type="string", length=255, nullable=true)
     */
    private $minValue;

    /**
     * @var string
     *
     * @ORM\Column(name="max_value", type="string", length=255, nullable=true)
     */
    private $maxValue;

    /**
     * @var string
     *
     * @ORM\Column(name="nulls_ratio", type="decimal", precision=12, scale=4, nullable=true)
     */
    private $nullsRatio;

    /**
     * @var string
     *
     * @ORM\Column(name="avg_length", type="decimal", precision=12, scale=4, nullable=true)
     */
    private $avgLength;

    /**
     * @var string
     *
     * @ORM\Column(name="avg_frequency", type="decimal", precision=12, scale=4, nullable=true)
     */
    private $avgFrequency;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hist_size", type="boolean", nullable=true)
     */
    private $histSize;

    /**
     * @var string
     *
     * @ORM\Column(name="hist_type", type="string", nullable=true)
     */
    private $histType;

    /**
     * @var binary
     *
     * @ORM\Column(name="histogram", type="binary", nullable=true)
     */
    private $histogram;


}

