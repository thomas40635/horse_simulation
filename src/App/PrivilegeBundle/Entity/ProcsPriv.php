<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProcsPriv
 *
 * @ORM\Table(name="procs_priv", indexes={@ORM\Index(name="Grantor", columns={"Grantor"})})
 * @ORM\Entity
 */
class ProcsPriv
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
     * @ORM\Column(name="Db", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $db = '';

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
     * @ORM\Column(name="Routine_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $routineName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Routine_type", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $routineType;

    /**
     * @var string
     *
     * @ORM\Column(name="Grantor", type="string", length=141, nullable=false)
     */
    private $grantor = '';

    /**
     * @var array
     *
     * @ORM\Column(name="Proc_priv", type="simple_array", nullable=false)
     */
    private $procPriv = '';

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
     * @return ProcsPriv
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
     * @return ProcsPriv
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
     * Set user
     *
     * @param string $user
     *
     * @return ProcsPriv
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
     * Set routineName
     *
     * @param string $routineName
     *
     * @return ProcsPriv
     */
    public function setRoutineName($routineName)
    {
        $this->routineName = $routineName;

        return $this;
    }

    /**
     * Get routineName
     *
     * @return string
     */
    public function getRoutineName()
    {
        return $this->routineName;
    }

    /**
     * Set routineType
     *
     * @param string $routineType
     *
     * @return ProcsPriv
     */
    public function setRoutineType($routineType)
    {
        $this->routineType = $routineType;

        return $this;
    }

    /**
     * Get routineType
     *
     * @return string
     */
    public function getRoutineType()
    {
        return $this->routineType;
    }

    /**
     * Set grantor
     *
     * @param string $grantor
     *
     * @return ProcsPriv
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
     * Set procPriv
     *
     * @param array $procPriv
     *
     * @return ProcsPriv
     */
    public function setProcPriv($procPriv)
    {
        $this->procPriv = $procPriv;

        return $this;
    }

    /**
     * Get procPriv
     *
     * @return array
     */
    public function getProcPriv()
    {
        return $this->procPriv;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return ProcsPriv
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
