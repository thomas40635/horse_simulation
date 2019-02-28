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



    /**
     * Set dbName
     *
     * @param string $dbName
     *
     * @return TableStats
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
     * @return TableStats
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
     * Set cardinality
     *
     * @param integer $cardinality
     *
     * @return TableStats
     */
    public function setCardinality($cardinality)
    {
        $this->cardinality = $cardinality;

        return $this;
    }

    /**
     * Get cardinality
     *
     * @return integer
     */
    public function getCardinality()
    {
        return $this->cardinality;
    }
}
