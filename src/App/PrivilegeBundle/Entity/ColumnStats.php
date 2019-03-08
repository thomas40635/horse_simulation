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



    /**
     * Set dbName
     *
     * @param string $dbName
     *
     * @return ColumnStats
     */
    public function setDbName($dbName)
    {
        $this->dbName = $dbName;

        return $this;
    }

    /**
     * Get dbName
     *
     * @return string
     */
    public function getDbName()
    {
        return $this->dbName;
    }

    /**
     * Set tableName
     *
     * @param string $tableName
     *
     * @return ColumnStats
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * Get tableName
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * Set columnName
     *
     * @param string $columnName
     *
     * @return ColumnStats
     */
    public function setColumnName($columnName)
    {
        $this->columnName = $columnName;

        return $this;
    }

    /**
     * Get columnName
     *
     * @return string
     */
    public function getColumnName()
    {
        return $this->columnName;
    }

    /**
     * Set minValue
     *
     * @param string $minValue
     *
     * @return ColumnStats
     */
    public function setMinValue($minValue)
    {
        $this->minValue = $minValue;

        return $this;
    }

    /**
     * Get minValue
     *
     * @return string
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * Set maxValue
     *
     * @param string $maxValue
     *
     * @return ColumnStats
     */
    public function setMaxValue($maxValue)
    {
        $this->maxValue = $maxValue;

        return $this;
    }

    /**
     * Get maxValue
     *
     * @return string
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * Set nullsRatio
     *
     * @param string $nullsRatio
     *
     * @return ColumnStats
     */
    public function setNullsRatio($nullsRatio)
    {
        $this->nullsRatio = $nullsRatio;

        return $this;
    }

    /**
     * Get nullsRatio
     *
     * @return string
     */
    public function getNullsRatio()
    {
        return $this->nullsRatio;
    }

    /**
     * Set avgLength
     *
     * @param string $avgLength
     *
     * @return ColumnStats
     */
    public function setAvgLength($avgLength)
    {
        $this->avgLength = $avgLength;

        return $this;
    }

    /**
     * Get avgLength
     *
     * @return string
     */
    public function getAvgLength()
    {
        return $this->avgLength;
    }

    /**
     * Set avgFrequency
     *
     * @param string $avgFrequency
     *
     * @return ColumnStats
     */
    public function setAvgFrequency($avgFrequency)
    {
        $this->avgFrequency = $avgFrequency;

        return $this;
    }

    /**
     * Get avgFrequency
     *
     * @return string
     */
    public function getAvgFrequency()
    {
        return $this->avgFrequency;
    }

    /**
     * Set histSize
     *
     * @param boolean $histSize
     *
     * @return ColumnStats
     */
    public function setHistSize($histSize)
    {
        $this->histSize = $histSize;

        return $this;
    }

    /**
     * Get histSize
     *
     * @return boolean
     */
    public function getHistSize()
    {
        return $this->histSize;
    }

    /**
     * Set histType
     *
     * @param string $histType
     *
     * @return ColumnStats
     */
    public function setHistType($histType)
    {
        $this->histType = $histType;

        return $this;
    }

    /**
     * Get histType
     *
     * @return string
     */
    public function getHistType()
    {
        return $this->histType;
    }

    /**
     * Set histogram
     *
     * @param binary $histogram
     *
     * @return ColumnStats
     */
    public function setHistogram($histogram)
    {
        $this->histogram = $histogram;

        return $this;
    }

    /**
     * Get histogram
     *
     * @return binary
     */
    public function getHistogram()
    {
        return $this->histogram;
    }
}
