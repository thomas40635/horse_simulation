<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NdbBinlogIndex
 *
 * @ORM\Table(name="ndb_binlog_index")
 * @ORM\Entity
 */
class NdbBinlogIndex
{
    /**
     * @var integer
     *
     * @ORM\Column(name="epoch", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $epoch;

    /**
     * @var integer
     *
     * @ORM\Column(name="orig_server_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $origServerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="orig_epoch", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $origEpoch;

    /**
     * @var integer
     *
     * @ORM\Column(name="Position", type="bigint", nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="File", type="string", length=255, nullable=false)
     */
    private $file;

    /**
     * @var integer
     *
     * @ORM\Column(name="inserts", type="integer", nullable=false)
     */
    private $inserts;

    /**
     * @var integer
     *
     * @ORM\Column(name="updates", type="integer", nullable=false)
     */
    private $updates;

    /**
     * @var integer
     *
     * @ORM\Column(name="deletes", type="integer", nullable=false)
     */
    private $deletes;

    /**
     * @var integer
     *
     * @ORM\Column(name="schemaops", type="integer", nullable=false)
     */
    private $schemaops;

    /**
     * @var integer
     *
     * @ORM\Column(name="gci", type="integer", nullable=false)
     */
    private $gci;



    /**
     * Set epoch
     *
     * @param integer $epoch
     *
     * @return NdbBinlogIndex
     */
    public function setEpoch($epoch)
    {
        $this->epoch = $epoch;

        return $this;
    }

    /**
     * Get epoch
     *
     * @return integer
     */
    public function getEpoch()
    {
        return $this->epoch;
    }

    /**
     * Set origServerId
     *
     * @param integer $origServerId
     *
     * @return NdbBinlogIndex
     */
    public function setOrigServerId($origServerId)
    {
        $this->origServerId = $origServerId;

        return $this;
    }

    /**
     * Get origServerId
     *
     * @return integer
     */
    public function getOrigServerId()
    {
        return $this->origServerId;
    }

    /**
     * Set origEpoch
     *
     * @param integer $origEpoch
     *
     * @return NdbBinlogIndex
     */
    public function setOrigEpoch($origEpoch)
    {
        $this->origEpoch = $origEpoch;

        return $this;
    }

    /**
     * Get origEpoch
     *
     * @return integer
     */
    public function getOrigEpoch()
    {
        return $this->origEpoch;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return NdbBinlogIndex
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return NdbBinlogIndex
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set inserts
     *
     * @param integer $inserts
     *
     * @return NdbBinlogIndex
     */
    public function setInserts($inserts)
    {
        $this->inserts = $inserts;

        return $this;
    }

    /**
     * Get inserts
     *
     * @return integer
     */
    public function getInserts()
    {
        return $this->inserts;
    }

    /**
     * Set updates
     *
     * @param integer $updates
     *
     * @return NdbBinlogIndex
     */
    public function setUpdates($updates)
    {
        $this->updates = $updates;

        return $this;
    }

    /**
     * Get updates
     *
     * @return integer
     */
    public function getUpdates()
    {
        return $this->updates;
    }

    /**
     * Set deletes
     *
     * @param integer $deletes
     *
     * @return NdbBinlogIndex
     */
    public function setDeletes($deletes)
    {
        $this->deletes = $deletes;

        return $this;
    }

    /**
     * Get deletes
     *
     * @return integer
     */
    public function getDeletes()
    {
        return $this->deletes;
    }

    /**
     * Set schemaops
     *
     * @param integer $schemaops
     *
     * @return NdbBinlogIndex
     */
    public function setSchemaops($schemaops)
    {
        $this->schemaops = $schemaops;

        return $this;
    }

    /**
     * Get schemaops
     *
     * @return integer
     */
    public function getSchemaops()
    {
        return $this->schemaops;
    }

    /**
     * Set gci
     *
     * @param integer $gci
     *
     * @return NdbBinlogIndex
     */
    public function setGci($gci)
    {
        $this->gci = $gci;

        return $this;
    }

    /**
     * Get gci
     *
     * @return integer
     */
    public function getGci()
    {
        return $this->gci;
    }
}
