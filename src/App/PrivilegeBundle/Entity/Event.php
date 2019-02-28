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



    /**
     * Set db
     *
     * @param string $db
     *
     * @return Event
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
     * Set name
     *
     * @param string $name
     *
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Event
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set definer
     *
     * @param string $definer
     *
     * @return Event
     */
    public function setDefiner($definer)
    {
        $this->definer = $definer;

        return $this;
    }

    /**
     * Get definer
     *
     * @return string
     */
    public function getDefiner()
    {
        return $this->definer;
    }

    /**
     * Set executeAt
     *
     * @param \DateTime $executeAt
     *
     * @return Event
     */
    public function setExecuteAt($executeAt)
    {
        $this->executeAt = $executeAt;

        return $this;
    }

    /**
     * Get executeAt
     *
     * @return \DateTime
     */
    public function getExecuteAt()
    {
        return $this->executeAt;
    }

    /**
     * Set intervalValue
     *
     * @param integer $intervalValue
     *
     * @return Event
     */
    public function setIntervalValue($intervalValue)
    {
        $this->intervalValue = $intervalValue;

        return $this;
    }

    /**
     * Get intervalValue
     *
     * @return integer
     */
    public function getIntervalValue()
    {
        return $this->intervalValue;
    }

    /**
     * Set intervalField
     *
     * @param string $intervalField
     *
     * @return Event
     */
    public function setIntervalField($intervalField)
    {
        $this->intervalField = $intervalField;

        return $this;
    }

    /**
     * Get intervalField
     *
     * @return string
     */
    public function getIntervalField()
    {
        return $this->intervalField;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Event
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return Event
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set lastExecuted
     *
     * @param \DateTime $lastExecuted
     *
     * @return Event
     */
    public function setLastExecuted($lastExecuted)
    {
        $this->lastExecuted = $lastExecuted;

        return $this;
    }

    /**
     * Get lastExecuted
     *
     * @return \DateTime
     */
    public function getLastExecuted()
    {
        return $this->lastExecuted;
    }

    /**
     * Set starts
     *
     * @param \DateTime $starts
     *
     * @return Event
     */
    public function setStarts($starts)
    {
        $this->starts = $starts;

        return $this;
    }

    /**
     * Get starts
     *
     * @return \DateTime
     */
    public function getStarts()
    {
        return $this->starts;
    }

    /**
     * Set ends
     *
     * @param \DateTime $ends
     *
     * @return Event
     */
    public function setEnds($ends)
    {
        $this->ends = $ends;

        return $this;
    }

    /**
     * Get ends
     *
     * @return \DateTime
     */
    public function getEnds()
    {
        return $this->ends;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Event
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set onCompletion
     *
     * @param string $onCompletion
     *
     * @return Event
     */
    public function setOnCompletion($onCompletion)
    {
        $this->onCompletion = $onCompletion;

        return $this;
    }

    /**
     * Get onCompletion
     *
     * @return string
     */
    public function getOnCompletion()
    {
        return $this->onCompletion;
    }

    /**
     * Set sqlMode
     *
     * @param array $sqlMode
     *
     * @return Event
     */
    public function setSqlMode($sqlMode)
    {
        $this->sqlMode = $sqlMode;

        return $this;
    }

    /**
     * Get sqlMode
     *
     * @return array
     */
    public function getSqlMode()
    {
        return $this->sqlMode;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Event
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set originator
     *
     * @param integer $originator
     *
     * @return Event
     */
    public function setOriginator($originator)
    {
        $this->originator = $originator;

        return $this;
    }

    /**
     * Get originator
     *
     * @return integer
     */
    public function getOriginator()
    {
        return $this->originator;
    }

    /**
     * Set timeZone
     *
     * @param string $timeZone
     *
     * @return Event
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * Get timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Set characterSetClient
     *
     * @param string $characterSetClient
     *
     * @return Event
     */
    public function setCharacterSetClient($characterSetClient)
    {
        $this->characterSetClient = $characterSetClient;

        return $this;
    }

    /**
     * Get characterSetClient
     *
     * @return string
     */
    public function getCharacterSetClient()
    {
        return $this->characterSetClient;
    }

    /**
     * Set collationConnection
     *
     * @param string $collationConnection
     *
     * @return Event
     */
    public function setCollationConnection($collationConnection)
    {
        $this->collationConnection = $collationConnection;

        return $this;
    }

    /**
     * Get collationConnection
     *
     * @return string
     */
    public function getCollationConnection()
    {
        return $this->collationConnection;
    }

    /**
     * Set dbCollation
     *
     * @param string $dbCollation
     *
     * @return Event
     */
    public function setDbCollation($dbCollation)
    {
        $this->dbCollation = $dbCollation;

        return $this;
    }

    /**
     * Get dbCollation
     *
     * @return string
     */
    public function getDbCollation()
    {
        return $this->dbCollation;
    }

    /**
     * Set bodyUtf8
     *
     * @param string $bodyUtf8
     *
     * @return Event
     */
    public function setBodyUtf8($bodyUtf8)
    {
        $this->bodyUtf8 = $bodyUtf8;

        return $this;
    }

    /**
     * Get bodyUtf8
     *
     * @return string
     */
    public function getBodyUtf8()
    {
        return $this->bodyUtf8;
    }
}
