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


}

