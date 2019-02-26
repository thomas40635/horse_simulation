<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SlaveMasterInfo
 *
 * @ORM\Table(name="slave_master_info")
 * @ORM\Entity
 */
class SlaveMasterInfo
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
     * @ORM\Column(name="Host", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $host = '';

    /**
     * @var string
     *
     * @ORM\Column(name="User_name", type="text", length=65535, nullable=true)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="User_password", type="text", length=65535, nullable=true)
     */
    private $userPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="Port", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $port;

    /**
     * @var integer
     *
     * @ORM\Column(name="Connect_retry", type="integer", nullable=false)
     */
    private $connectRetry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Enabled_ssl", type="boolean", nullable=false)
     */
    private $enabledSsl;

    /**
     * @var string
     *
     * @ORM\Column(name="Ssl_ca", type="text", length=65535, nullable=true)
     */
    private $sslCa;

    /**
     * @var string
     *
     * @ORM\Column(name="Ssl_capath", type="text", length=65535, nullable=true)
     */
    private $sslCapath;

    /**
     * @var string
     *
     * @ORM\Column(name="Ssl_cert", type="text", length=65535, nullable=true)
     */
    private $sslCert;

    /**
     * @var string
     *
     * @ORM\Column(name="Ssl_cipher", type="text", length=65535, nullable=true)
     */
    private $sslCipher;

    /**
     * @var string
     *
     * @ORM\Column(name="Ssl_key", type="text", length=65535, nullable=true)
     */
    private $sslKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Ssl_verify_server_cert", type="boolean", nullable=false)
     */
    private $sslVerifyServerCert;

    /**
     * @var float
     *
     * @ORM\Column(name="Heartbeat", type="float", precision=10, scale=0, nullable=false)
     */
    private $heartbeat;

    /**
     * @var string
     *
     * @ORM\Column(name="Bind", type="text", length=65535, nullable=true)
     */
    private $bind;

    /**
     * @var string
     *
     * @ORM\Column(name="Ignored_server_ids", type="text", length=65535, nullable=true)
     */
    private $ignoredServerIds;

    /**
     * @var string
     *
     * @ORM\Column(name="Uuid", type="text", length=65535, nullable=true)
     */
    private $uuid;

    /**
     * @var integer
     *
     * @ORM\Column(name="Retry_count", type="bigint", nullable=false)
     */
    private $retryCount;

    /**
     * @var string
     *
     * @ORM\Column(name="Ssl_crl", type="text", length=65535, nullable=true)
     */
    private $sslCrl;

    /**
     * @var string
     *
     * @ORM\Column(name="Ssl_crlpath", type="text", length=65535, nullable=true)
     */
    private $sslCrlpath;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Enabled_auto_position", type="boolean", nullable=false)
     */
    private $enabledAutoPosition;


}

