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


}

