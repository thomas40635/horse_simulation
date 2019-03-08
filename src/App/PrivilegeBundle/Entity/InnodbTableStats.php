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



    /**
     * Set databaseName
     *
     * @param string $databaseName
     *
     * @return InnodbTableStats
     */
    public function setDatabaseName($databaseName)
    {
        $this->databaseName = $databaseName;

        return $this;
    }

    /**
     * Get databaseName
     *
     * @return string
     */
    public function getDatabaseName()
    {
        return $this->databaseName;
    }

    /**
     * Set tableName
     *
     * @param string $tableName
     *
     * @return InnodbTableStats
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
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     *
     * @return InnodbTableStats
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set nRows
     *
     * @param integer $nRows
     *
     * @return InnodbTableStats
     */
    public function setNRows($nRows)
    {
        $this->nRows = $nRows;

        return $this;
    }

    /**
     * Get nRows
     *
     * @return integer
     */
    public function getNRows()
    {
        return $this->nRows;
    }

    /**
     * Set clusteredIndexSize
     *
     * @param integer $clusteredIndexSize
     *
     * @return InnodbTableStats
     */
    public function setClusteredIndexSize($clusteredIndexSize)
    {
        $this->clusteredIndexSize = $clusteredIndexSize;

        return $this;
    }

    /**
     * Get clusteredIndexSize
     *
     * @return integer
     */
    public function getClusteredIndexSize()
    {
        return $this->clusteredIndexSize;
    }

    /**
     * Set sumOfOtherIndexSizes
     *
     * @param integer $sumOfOtherIndexSizes
     *
     * @return InnodbTableStats
     */
    public function setSumOfOtherIndexSizes($sumOfOtherIndexSizes)
    {
        $this->sumOfOtherIndexSizes = $sumOfOtherIndexSizes;

        return $this;
    }

    /**
     * Get sumOfOtherIndexSizes
     *
     * @return integer
     */
    public function getSumOfOtherIndexSizes()
    {
        return $this->sumOfOtherIndexSizes;
    }
}
