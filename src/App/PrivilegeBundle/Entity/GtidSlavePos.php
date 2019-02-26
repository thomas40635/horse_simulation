<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GtidSlavePos
 *
 * @ORM\Table(name="gtid_slave_pos")
 * @ORM\Entity
 */
class GtidSlavePos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="domain_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $domainId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sub_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $subId;

    /**
     * @var integer
     *
     * @ORM\Column(name="server_id", type="integer", nullable=false)
     */
    private $serverId;

    /**
     * @var integer
     *
     * @ORM\Column(name="seq_no", type="bigint", nullable=false)
     */
    private $seqNo;


}

