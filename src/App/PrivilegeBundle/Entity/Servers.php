<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servers
 *
 * @ORM\Table(name="servers")
 * @ORM\Entity
 */
class Servers
{
    /**
     * @var string
     *
     * @ORM\Column(name="Server_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $serverName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Host", type="string", length=64, nullable=false)
     */
    private $host = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Db", type="string", length=64, nullable=false)
     */
    private $db = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=80, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=64, nullable=false)
     */
    private $password = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="Port", type="integer", nullable=false)
     */
    private $port = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Socket", type="string", length=64, nullable=false)
     */
    private $socket = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Wrapper", type="string", length=64, nullable=false)
     */
    private $wrapper = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Owner", type="string", length=64, nullable=false)
     */
    private $owner = '';



    /**
     * Get serverName
     *
     * @return string
     */
    public function getServerName()
    {
        return $this->serverName;
    }

    /**
     * Set host
     *
     * @param string $host
     *
     * @return Servers
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
     * Set db
     *
     * @param string $db
     *
     * @return Servers
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
     * Set username
     *
     * @param string $username
     *
     * @return Servers
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Servers
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set port
     *
     * @param integer $port
     *
     * @return Servers
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
     * Set socket
     *
     * @param string $socket
     *
     * @return Servers
     */
    public function setSocket($socket)
    {
        $this->socket = $socket;

        return $this;
    }

    /**
     * Get socket
     *
     * @return string
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * Set wrapper
     *
     * @param string $wrapper
     *
     * @return Servers
     */
    public function setWrapper($wrapper)
    {
        $this->wrapper = $wrapper;

        return $this;
    }

    /**
     * Get wrapper
     *
     * @return string
     */
    public function getWrapper()
    {
        return $this->wrapper;
    }

    /**
     * Set owner
     *
     * @param string $owner
     *
     * @return Servers
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }
}
