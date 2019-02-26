<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SlaveRelayLogInfo
 *
 * @ORM\Table(name="slave_relay_log_info")
 * @ORM\Entity
 */
class SlaveRelayLogInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Number_of_lines", type="integer", nullable=false)
     */
    private $numberOfLines;

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
     * @var integer
     *
     * @ORM\Column(name="Sql_delay", type="integer", nullable=false)
     */
    private $sqlDelay;

    /**
     * @var integer
     *
     * @ORM\Column(name="Number_of_workers", type="integer", nullable=false)
     */
    private $numberOfWorkers;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

