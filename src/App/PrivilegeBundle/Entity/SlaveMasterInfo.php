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



    /**
     * Set numberOfLines
     *
     * @param integer $numberOfLines
     *
     * @return SlaveMasterInfo
     */
    public function setNumberOfLines($numberOfLines)
    {
        $this->numberOfLines = $numberOfLines;

        return $this;
    }

    /**
     * Get numberOfLines
     *
     * @return integer
     */
    public function getNumberOfLines()
    {
        return $this->numberOfLines;
    }

    /**
     * Set masterLogName
     *
     * @param string $masterLogName
     *
     * @return SlaveMasterInfo
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
     * @return SlaveMasterInfo
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
     * Set host
     *
     * @param string $host
     *
     * @return SlaveMasterInfo
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return SlaveMasterInfo
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     *
     * @return SlaveMasterInfo
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set port
     *
     * @param integer $port
     *
     * @return SlaveMasterInfo
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set connectRetry
     *
     * @param integer $connectRetry
     *
     * @return SlaveMasterInfo
     */
    public function setConnectRetry($connectRetry)
    {
        $this->connectRetry = $connectRetry;

        return $this;
    }

    /**
     * Get connectRetry
     *
     * @return integer
     */
    public function getConnectRetry()
    {
        return $this->connectRetry;
    }

    /**
     * Set enabledSsl
     *
     * @param boolean $enabledSsl
     *
     * @return SlaveMasterInfo
     */
    public function setEnabledSsl($enabledSsl)
    {
        $this->enabledSsl = $enabledSsl;

        return $this;
    }

    /**
     * Get enabledSsl
     *
     * @return boolean
     */
    public function getEnabledSsl()
    {
        return $this->enabledSsl;
    }

    /**
     * Set sslCa
     *
     * @param string $sslCa
     *
     * @return SlaveMasterInfo
     */
    public function setSslCa($sslCa)
    {
        $this->sslCa = $sslCa;

        return $this;
    }

    /**
     * Get sslCa
     *
     * @return string
     */
    public function getSslCa()
    {
        return $this->sslCa;
    }

    /**
     * Set sslCapath
     *
     * @param string $sslCapath
     *
     * @return SlaveMasterInfo
     */
    public function setSslCapath($sslCapath)
    {
        $this->sslCapath = $sslCapath;

        return $this;
    }

    /**
     * Get sslCapath
     *
     * @return string
     */
    public function getSslCapath()
    {
        return $this->sslCapath;
    }

    /**
     * Set sslCert
     *
     * @param string $sslCert
     *
     * @return SlaveMasterInfo
     */
    public function setSslCert($sslCert)
    {
        $this->sslCert = $sslCert;

        return $this;
    }

    /**
     * Get sslCert
     *
     * @return string
     */
    public function getSslCert()
    {
        return $this->sslCert;
    }

    /**
     * Set sslCipher
     *
     * @param string $sslCipher
     *
     * @return SlaveMasterInfo
     */
    public function setSslCipher($sslCipher)
    {
        $this->sslCipher = $sslCipher;

        return $this;
    }

    /**
     * Get sslCipher
     *
     * @return string
     */
    public function getSslCipher()
    {
        return $this->sslCipher;
    }

    /**
     * Set sslKey
     *
     * @param string $sslKey
     *
     * @return SlaveMasterInfo
     */
    public function setSslKey($sslKey)
    {
        $this->sslKey = $sslKey;

        return $this;
    }

    /**
     * Get sslKey
     *
     * @return string
     */
    public function getSslKey()
    {
        return $this->sslKey;
    }

    /**
     * Set sslVerifyServerCert
     *
     * @param boolean $sslVerifyServerCert
     *
     * @return SlaveMasterInfo
     */
    public function setSslVerifyServerCert($sslVerifyServerCert)
    {
        $this->sslVerifyServerCert = $sslVerifyServerCert;

        return $this;
    }

    /**
     * Get sslVerifyServerCert
     *
     * @return boolean
     */
    public function getSslVerifyServerCert()
    {
        return $this->sslVerifyServerCert;
    }

    /**
     * Set heartbeat
     *
     * @param float $heartbeat
     *
     * @return SlaveMasterInfo
     */
    public function setHeartbeat($heartbeat)
    {
        $this->heartbeat = $heartbeat;

        return $this;
    }

    /**
     * Get heartbeat
     *
     * @return float
     */
    public function getHeartbeat()
    {
        return $this->heartbeat;
    }

    /**
     * Set bind
     *
     * @param string $bind
     *
     * @return SlaveMasterInfo
     */
    public function setBind($bind)
    {
        $this->bind = $bind;

        return $this;
    }

    /**
     * Get bind
     *
     * @return string
     */
    public function getBind()
    {
        return $this->bind;
    }

    /**
     * Set ignoredServerIds
     *
     * @param string $ignoredServerIds
     *
     * @return SlaveMasterInfo
     */
    public function setIgnoredServerIds($ignoredServerIds)
    {
        $this->ignoredServerIds = $ignoredServerIds;

        return $this;
    }

    /**
     * Get ignoredServerIds
     *
     * @return string
     */
    public function getIgnoredServerIds()
    {
        return $this->ignoredServerIds;
    }

    /**
     * Set uuid
     *
     * @param string $uuid
     *
     * @return SlaveMasterInfo
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set retryCount
     *
     * @param integer $retryCount
     *
     * @return SlaveMasterInfo
     */
    public function setRetryCount($retryCount)
    {
        $this->retryCount = $retryCount;

        return $this;
    }

    /**
     * Get retryCount
     *
     * @return integer
     */
    public function getRetryCount()
    {
        return $this->retryCount;
    }

    /**
     * Set sslCrl
     *
     * @param string $sslCrl
     *
     * @return SlaveMasterInfo
     */
    public function setSslCrl($sslCrl)
    {
        $this->sslCrl = $sslCrl;

        return $this;
    }

    /**
     * Get sslCrl
     *
     * @return string
     */
    public function getSslCrl()
    {
        return $this->sslCrl;
    }

    /**
     * Set sslCrlpath
     *
     * @param string $sslCrlpath
     *
     * @return SlaveMasterInfo
     */
    public function setSslCrlpath($sslCrlpath)
    {
        $this->sslCrlpath = $sslCrlpath;

        return $this;
    }

    /**
     * Get sslCrlpath
     *
     * @return string
     */
    public function getSslCrlpath()
    {
        return $this->sslCrlpath;
    }

    /**
     * Set enabledAutoPosition
     *
     * @param boolean $enabledAutoPosition
     *
     * @return SlaveMasterInfo
     */
    public function setEnabledAutoPosition($enabledAutoPosition)
    {
        $this->enabledAutoPosition = $enabledAutoPosition;

        return $this;
    }

    /**
     * Get enabledAutoPosition
     *
     * @return boolean
     */
    public function getEnabledAutoPosition()
    {
        return $this->enabledAutoPosition;
    }
}
