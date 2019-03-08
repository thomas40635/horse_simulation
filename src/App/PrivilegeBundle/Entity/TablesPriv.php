<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TablesPriv
 *
 * @ORM\Table(name="tables_priv", indexes={@ORM\Index(name="Grantor", columns={"Grantor"})})
 * @ORM\Entity
 */
class TablesPriv
{
    /**
     * @var string
     *
     * @ORM\Column(name="Host", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $host = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Db", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $db = '';

    /**
     * @var string
     *
     * @ORM\Column(name="User", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $user = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Table_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tableName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Grantor", type="string", length=141, nullable=false)
     */
    private $grantor = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Timestamp", type="datetime", nullable=false)
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var array
     *
     * @ORM\Column(name="Table_priv", type="simple_array", nullable=false)
     */
    private $tablePriv = '';

    /**
     * @var array
     *
     * @ORM\Column(name="Column_priv", type="simple_array", nullable=false)
     */
    private $columnPriv = '';



    /**
     * Set host
     *
     * @param string $host
     *
     * @return TablesPriv
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set db
     *
     * @param string $db
     *
     * @return TablesPriv
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    /**
     * Get db
     *
     * @return string
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return TablesPriv
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set tableName
     *
     * @param string $tableName
     *
     * @return TablesPriv
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
     * Set grantor
     *
     * @param string $grantor
     *
     * @return TablesPriv
     */
    public function setGrantor($grantor)
    {
        $this->grantor = $grantor;

        return $this;
    }

    /**
     * Get grantor
     *
     * @return string
     */
    public function getGrantor()
    {
        return $this->grantor;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return TablesPriv
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set tablePriv
     *
     * @param array $tablePriv
     *
     * @return TablesPriv
     */
    public function setTablePriv($tablePriv)
    {
        $this->tablePriv = $tablePriv;

        return $this;
    }

    /**
     * Get tablePriv
     *
     * @return array
     */
    public function getTablePriv()
    {
        return $this->tablePriv;
    }

    /**
     * Set columnPriv
     *
     * @param array $columnPriv
     *
     * @return TablesPriv
     */
    public function setColumnPriv($columnPriv)
    {
        $this->columnPriv = $columnPriv;

        return $this;
    }

    /**
     * Get columnPriv
     *
     * @return array
     */
    public function getColumnPriv()
    {
        return $this->columnPriv;
    }
}
