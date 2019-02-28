<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProxiesPriv
 *
 * @ORM\Table(name="proxies_priv", indexes={@ORM\Index(name="Grantor", columns={"Grantor"})})
 * @ORM\Entity
 */
class ProxiesPriv
{
    /**
     * @var string
     *
     * @ORM\Column(name="Host", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $host = '';

    /**
     * @var string
     *
     * @ORM\Column(name="User", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $user = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Proxied_host", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $proxiedHost = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Proxied_user", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $proxiedUser = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="With_grant", type="boolean", nullable=false)
     */
    private $withGrant = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Grantor", type="string", length=141, nullable=false)
     */
    private $grantor = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Timestamp", type="datetime", nullable=false)
     */
    private $timestamp = 'CURRENT_TIMESTAMP';



    /**
     * Set host
     *
     * @param string $host
     *
     * @return ProxiesPriv
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
     * Set user
     *
     * @param string $user
     *
     * @return ProxiesPriv
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set proxiedHost
     *
     * @param string $proxiedHost
     *
     * @return ProxiesPriv
     */
    public function setProxiedHost($proxiedHost)
    {
        $this->proxiedHost = $proxiedHost;

        return $this;
    }

    /**
     * Get proxiedHost
     *
     * @return string
     */
    public function getProxiedHost()
    {
        return $this->proxiedHost;
    }

    /**
     * Set proxiedUser
     *
     * @param string $proxiedUser
     *
     * @return ProxiesPriv
     */
    public function setProxiedUser($proxiedUser)
    {
        $this->proxiedUser = $proxiedUser;

        return $this;
    }

    /**
     * Get proxiedUser
     *
     * @return string
     */
    public function getProxiedUser()
    {
        return $this->proxiedUser;
    }

    /**
     * Set withGrant
     *
     * @param boolean $withGrant
     *
     * @return ProxiesPriv
     */
    public function setWithGrant($withGrant)
    {
        $this->withGrant = $withGrant;

        return $this;
    }

    /**
     * Get withGrant
     *
     * @return boolean
     */
    public function getWithGrant()
    {
        return $this->withGrant;
    }

    /**
     * Set grantor
     *
     * @param string $grantor
     *
     * @return ProxiesPriv
     */
    public function setGrantor($grantor)
    {
        $this->grantor = $grantor;

        return $this;
    }

    /**
     * Get grantor
     *
     * @return string
     */
    public function getGrantor()
    {
        return $this->grantor;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return ProxiesPriv
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
