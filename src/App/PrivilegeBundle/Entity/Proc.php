<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proc
 *
 * @ORM\Table(name="proc")
 * @ORM\Entity
 */
class Proc
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
     * @ORM\Column(name="type", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="specific_name", type="string", length=64, nullable=false)
     */
    private $specificName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", nullable=false)
     */
    private $language = 'SQL';

    /**
     * @var string
     *
     * @ORM\Column(name="sql_data_access", type="string", nullable=false)
     */
    private $sqlDataAccess = 'CONTAINS_SQL';

    /**
     * @var string
     *
     * @ORM\Column(name="is_deterministic", type="string", nullable=false)
     */
    private $isDeterministic = 'NO';

    /**
     * @var string
     *
     * @ORM\Column(name="security_type", type="string", nullable=false)
     */
    private $securityType = 'DEFINER';

    /**
     * @var string
     *
     * @ORM\Column(name="param_list", type="blob", length=65535, nullable=false)
     */
    private $paramList;

    /**
     * @var string
     *
     * @ORM\Column(name="returns", type="blob", nullable=false)
     */
    private $returns;

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
     * @var array
     *
     * @ORM\Column(name="sql_mode", type="simple_array", nullable=false)
     */
    private $sqlMode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

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
     * @return Proc
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
     * @return Proc
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
     * Set type
     *
     * @param string $type
     *
     * @return Proc
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set specificName
     *
     * @param string $specificName
     *
     * @return Proc
     */
    public function setSpecificName($specificName)
    {
        $this->specificName = $specificName;

        return $this;
    }

    /**
     * Get specificName
     *
     * @return string
     */
    public function getSpecificName()
    {
        return $this->specificName;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Proc
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set sqlDataAccess
     *
     * @param string $sqlDataAccess
     *
     * @return Proc
     */
    public function setSqlDataAccess($sqlDataAccess)
    {
        $this->sqlDataAccess = $sqlDataAccess;

        return $this;
    }

    /**
     * Get sqlDataAccess
     *
     * @return string
     */
    public function getSqlDataAccess()
    {
        return $this->sqlDataAccess;
    }

    /**
     * Set isDeterministic
     *
     * @param string $isDeterministic
     *
     * @return Proc
     */
    public function setIsDeterministic($isDeterministic)
    {
        $this->isDeterministic = $isDeterministic;

        return $this;
    }

    /**
     * Get isDeterministic
     *
     * @return string
     */
    public function getIsDeterministic()
    {
        return $this->isDeterministic;
    }

    /**
     * Set securityType
     *
     * @param string $securityType
     *
     * @return Proc
     */
    public function setSecurityType($securityType)
    {
        $this->securityType = $securityType;

        return $this;
    }

    /**
     * Get securityType
     *
     * @return string
     */
    public function getSecurityType()
    {
        return $this->securityType;
    }

    /**
     * Set paramList
     *
     * @param string $paramList
     *
     * @return Proc
     */
    public function setParamList($paramList)
    {
        $this->paramList = $paramList;

        return $this;
    }

    /**
     * Get paramList
     *
     * @return string
     */
    public function getParamList()
    {
        return $this->paramList;
    }

    /**
     * Set returns
     *
     * @param string $returns
     *
     * @return Proc
     */
    public function setReturns($returns)
    {
        $this->returns = $returns;

        return $this;
    }

    /**
     * Get returns
     *
     * @return string
     */
    public function getReturns()
    {
        return $this->returns;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Proc
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
     * @return Proc
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Proc
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
     * @return Proc
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
     * Set sqlMode
     *
     * @param array $sqlMode
     *
     * @return Proc
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
     * @return Proc
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
     * Set characterSetClient
     *
     * @param string $characterSetClient
     *
     * @return Proc
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
     * @return Proc
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
     * @return Proc
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
     * @return Proc
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
