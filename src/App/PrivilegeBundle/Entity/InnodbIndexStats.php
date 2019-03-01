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
    private $lastUpdate;

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



    /**
     * Set databaseName
     *
     * @param string $databaseName
     *
     * @return InnodbIndexStats
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
     * @return InnodbIndexStats
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
     * Set indexName
     *
     * @param string $indexName
     *
     * @return InnodbIndexStats
     */
    public function setIndexName($indexName)
    {
        $this->indexName = $indexName;

        return $this;
    }

    /**
     * Get indexName
     *
     * @return string
     */
    public function getIndexName()
    {
        return $this->indexName;
    }

    /**
     * Set statName
     *
     * @param string $statName
     *
     * @return InnodbIndexStats
     */
    public function setStatName($statName)
    {
        $this->statName = $statName;

        return $this;
    }

    /**
     * Get statName
     *
     * @return string
     */
    public function getStatName()
    {
        return $this->statName;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     *
     * @return InnodbIndexStats
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
     * Set statValue
     *
     * @param integer $statValue
     *
     * @return InnodbIndexStats
     */
    public function setStatValue($statValue)
    {
        $this->statValue = $statValue;

        return $this;
    }

    /**
     * Get statValue
     *
     * @return integer
     */
    public function getStatValue()
    {
        return $this->statValue;
    }

    /**
     * Set sampleSize
     *
     * @param integer $sampleSize
     *
     * @return InnodbIndexStats
     */
    public function setSampleSize($sampleSize)
    {
        $this->sampleSize = $sampleSize;

        return $this;
    }

    /**
     * Get sampleSize
     *
     * @return integer
     */
    public function getSampleSize()
    {
        return $this->sampleSize;
    }

    /**
     * Set statDescription
     *
     * @param string $statDescription
     *
     * @return InnodbIndexStats
     */
    public function setStatDescription($statDescription)
    {
        $this->statDescription = $statDescription;

        return $this;
    }

    /**
     * Get statDescription
     *
     * @return string
     */
    public function getStatDescription()
    {
        return $this->statDescription;
    }
}
