<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndexStats
 *
 * @ORM\Table(name="index_stats")
 * @ORM\Entity
 */
class IndexStats
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
     * @ORM\Column(name="index_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $indexName;

    /**
     * @var integer
     *
     * @ORM\Column(name="prefix_arity", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prefixArity;

    /**
     * @var string
     *
     * @ORM\Column(name="avg_frequency", type="decimal", precision=12, scale=4, nullable=true)
     */
    private $avgFrequency;



    /**
     * Set dbName
     *
     * @param string $dbName
     *
     * @return IndexStats
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
     * @return IndexStats
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
     * @return IndexStats
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
     * Set prefixArity
     *
     * @param integer $prefixArity
     *
     * @return IndexStats
     */
    public function setPrefixArity($prefixArity)
    {
        $this->prefixArity = $prefixArity;

        return $this;
    }

    /**
     * Get prefixArity
     *
     * @return integer
     */
    public function getPrefixArity()
    {
        return $this->prefixArity;
    }

    /**
     * Set avgFrequency
     *
     * @param string $avgFrequency
     *
     * @return IndexStats
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
}
