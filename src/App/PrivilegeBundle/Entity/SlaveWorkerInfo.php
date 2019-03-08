<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SlaveWorkerInfo
 *
 * @ORM\Table(name="slave_worker_info")
 * @ORM\Entity
 */
class SlaveWorkerInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Relay_log_name", type="text", length=65535, nullable=false)
     */
    private $relayLogName;

    /**
     * @var integer
     *
     * @ORM\Column(name="Relay_log_pos", type="bigint", nullable=false)
     */
    private $relayLogPos;

    /**
     * @var string
     *
     * @ORM\Column(name="Master_log_name", type="text", length=65535, nullable=false)
     */
    private $masterLogName;

    /**
     * @var integer
     *
     * @ORM\Column(name="Master_log_pos", type="bigint", nullable=false)
     */
    private $masterLogPos;

    /**
     * @var string
     *
     * @ORM\Column(name="Checkpoint_relay_log_name", type="text", length=65535, nullable=false)
     */
    private $checkpointRelayLogName;

    /**
     * @var integer
     *
     * @ORM\Column(name="Checkpoint_relay_log_pos", type="bigint", nullable=false)
     */
    private $checkpointRelayLogPos;

    /**
     * @var string
     *
     * @ORM\Column(name="Checkpoint_master_log_name", type="text", length=65535, nullable=false)
     */
    private $checkpointMasterLogName;

    /**
     * @var integer
     *
     * @ORM\Column(name="Checkpoint_master_log_pos", type="bigint", nullable=false)
     */
    private $checkpointMasterLogPos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Checkpoint_seqno", type="integer", nullable=false)
     */
    private $checkpointSeqno;

    /**
     * @var integer
     *
     * @ORM\Column(name="Checkpoint_group_size", type="integer", nullable=false)
     */
    private $checkpointGroupSize;

    /**
     * @var string
     *
     * @ORM\Column(name="Checkpoint_group_bitmap", type="blob", length=65535, nullable=false)
     */
    private $checkpointGroupBitmap;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set relayLogName
     *
     * @param string $relayLogName
     *
     * @return SlaveWorkerInfo
     */
    public function setRelayLogName($relayLogName)
    {
        $this->relayLogName = $relayLogName;

        return $this;
    }

    /**
     * Get relayLogName
     *
     * @return string
     */
    public function getRelayLogName()
    {
        return $this->relayLogName;
    }

    /**
     * Set relayLogPos
     *
     * @param integer $relayLogPos
     *
     * @return SlaveWorkerInfo
     */
    public function setRelayLogPos($relayLogPos)
    {
        $this->relayLogPos = $relayLogPos;

        return $this;
    }

    /**
     * Get relayLogPos
     *
     * @return integer
     */
    public function getRelayLogPos()
    {
        return $this->relayLogPos;
    }

    /**
     * Set masterLogName
     *
     * @param string $masterLogName
     *
     * @return SlaveWorkerInfo
     */
    public function setMasterLogName($masterLogName)
    {
        $this->masterLogName = $masterLogName;

        return $this;
    }

    /**
     * Get masterLogName
     *
     * @return string
     */
    public function getMasterLogName()
    {
        return $this->masterLogName;
    }

    /**
     * Set masterLogPos
     *
     * @param integer $masterLogPos
     *
     * @return SlaveWorkerInfo
     */
    public function setMasterLogPos($masterLogPos)
    {
        $this->masterLogPos = $masterLogPos;

        return $this;
    }

    /**
     * Get masterLogPos
     *
     * @return integer
     */
    public function getMasterLogPos()
    {
        return $this->masterLogPos;
    }

    /**
     * Set checkpointRelayLogName
     *
     * @param string $checkpointRelayLogName
     *
     * @return SlaveWorkerInfo
     */
    public function setCheckpointRelayLogName($checkpointRelayLogName)
    {
        $this->checkpointRelayLogName = $checkpointRelayLogName;

        return $this;
    }

    /**
     * Get checkpointRelayLogName
     *
     * @return string
     */
    public function getCheckpointRelayLogName()
    {
        return $this->checkpointRelayLogName;
    }

    /**
     * Set checkpointRelayLogPos
     *
     * @param integer $checkpointRelayLogPos
     *
     * @return SlaveWorkerInfo
     */
    public function setCheckpointRelayLogPos($checkpointRelayLogPos)
    {
        $this->checkpointRelayLogPos = $checkpointRelayLogPos;

        return $this;
    }

    /**
     * Get checkpointRelayLogPos
     *
     * @return integer
     */
    public function getCheckpointRelayLogPos()
    {
        return $this->checkpointRelayLogPos;
    }

    /**
     * Set checkpointMasterLogName
     *
     * @param string $checkpointMasterLogName
     *
     * @return SlaveWorkerInfo
     */
    public function setCheckpointMasterLogName($checkpointMasterLogName)
    {
        $this->checkpointMasterLogName = $checkpointMasterLogName;

        return $this;
    }

    /**
     * Get checkpointMasterLogName
     *
     * @return string
     */
    public function getCheckpointMasterLogName()
    {
        return $this->checkpointMasterLogName;
    }

    /**
     * Set checkpointMasterLogPos
     *
     * @param integer $checkpointMasterLogPos
     *
     * @return SlaveWorkerInfo
     */
    public function setCheckpointMasterLogPos($checkpointMasterLogPos)
    {
        $this->checkpointMasterLogPos = $checkpointMasterLogPos;

        return $this;
    }

    /**
     * Get checkpointMasterLogPos
     *
     * @return integer
     */
    public function getCheckpointMasterLogPos()
    {
        return $this->checkpointMasterLogPos;
    }

    /**
     * Set checkpointSeqno
     *
     * @param integer $checkpointSeqno
     *
     * @return SlaveWorkerInfo
     */
    public function setCheckpointSeqno($checkpointSeqno)
    {
        $this->checkpointSeqno = $checkpointSeqno;

        return $this;
    }

    /**
     * Get checkpointSeqno
     *
     * @return integer
     */
    public function getCheckpointSeqno()
    {
        return $this->checkpointSeqno;
    }

    /**
     * Set checkpointGroupSize
     *
     * @param integer $checkpointGroupSize
     *
     * @return SlaveWorkerInfo
     */
    public function setCheckpointGroupSize($checkpointGroupSize)
    {
        $this->checkpointGroupSize = $checkpointGroupSize;

        return $this;
    }

    /**
     * Get checkpointGroupSize
     *
     * @return integer
     */
    public function getCheckpointGroupSize()
    {
        return $this->checkpointGroupSize;
    }

    /**
     * Set checkpointGroupBitmap
     *
     * @param string $checkpointGroupBitmap
     *
     * @return SlaveWorkerInfo
     */
    public function setCheckpointGroupBitmap($checkpointGroupBitmap)
    {
        $this->checkpointGroupBitmap = $checkpointGroupBitmap;

        return $this;
    }

    /**
     * Get checkpointGroupBitmap
     *
     * @return string
     */
    public function getCheckpointGroupBitmap()
    {
        return $this->checkpointGroupBitmap;
    }
}
