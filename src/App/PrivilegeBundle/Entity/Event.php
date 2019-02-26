<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity
 */
class Event
{
    /**
     * @var string
     *
     * @ORM\Column(name="db", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $db = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="blob", nullable=false)
     */
    private $body;

    /**
     * @var string
     *
     * @ORM\Column(name="definer", type="string", length=141, nullable=false)
     */
    private $definer = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="execute_at", type="datetime", nullable=true)
     */
    private $executeAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="interval_value", type="integer", nullable=true)
     */
    private $intervalValue;

    /**
     * @var string
     *
     * @ORM\Column(name="interval_field", type="string", nullable=true)
     */
    private $intervalField;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     */
    private $modified = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_executed", type="datetime", nullable=true)
     */
    private $lastExecuted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="starts", type="datetime", nullable=true)
     */
    private $starts;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ends", type="datetime", nullable=true)
     */
    private $ends;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'ENABLED';

    /**
     * @var string
     *
     * @ORM\Column(name="on_completion", type="string", nullable=false)
     */
    private $onCompletion = 'DROP';

    /**
     * @var array
     *
     * @ORM\Column(name="sql_mode", type="simple_array", nullable=false)
     */
    private $sqlMode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=64, nullable=false)
     */
    private $comment = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="originator", type="integer", nullable=false)
     */
    private $originator;

    /**
     * @var string
     *
     * @ORM\Column(name="time_zone", type="string", length=64, nullable=false)
     */
    private $timeZone = 'SYSTEM';

    /**
     * @var string
     *
     * @ORM\Column(name="character_set_client", type="string", length=32, nullable=true)
     */
    private $characterSetClient;

    /**
     * @var string
     *
     * @ORM\Column(name="collation_connection", type="string", length=32, nullable=true)
     */
    private $collationConnection;

    /**
     * @var string
     *
     * @ORM\Column(name="db_collation", type="string", length=32, nullable=true)
     */
    private $dbCollation;

    /**
     * @var string
     *
     * @ORM\Column(name="body_utf8", type="blob", nullable=true)
     */
    private $bodyUtf8;


}

