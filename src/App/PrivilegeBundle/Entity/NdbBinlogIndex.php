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


}

