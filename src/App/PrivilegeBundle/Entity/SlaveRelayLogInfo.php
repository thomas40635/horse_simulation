<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SlaveRelayLogInfo
 *
 * @ORM\Table(name="slave_relay_log_info")
 * @ORM\Entity
 */
class SlaveRelayLogInfo
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
     * @ORM\Column(name="Relay_log_name", type="text", length=65535, nullable=false)
     */
    private $relayLogName;

    /**
     * @var integer
     *
     * @ORM\Column(name="Relay_log_pos", type="bigint", nullable=false)
     */
    private $relayLogPos;

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
     * @var integer
     *
     * @ORM\Column(name="Sql_delay", type="integer", nullable=false)
     */
    private $sqlDelay;

    /**
     * @var integer
     *
     * @ORM\Column(name="Number_of_workers", type="integer", nullable=false)
     */
    private $numberOfWorkers;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set numberOfLines
     *
     * @param integer $numberOfLines
     *
     * @return SlaveRelayLogInfo
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
     * Set relayLogName
     *
     * @param string $relayLogName
     *
     * @return SlaveRelayLogInfo
     */
    public function setRelayLogName($relayLogName)
    {
        $this->relayLogName = $relayLogName;

        return $this;
    }

    /**
     * Get relayLogName
     *
     * @return string
     */
    public function getRelayLogName()
    {
        return $this->relayLogName;
    }

    /**
     * Set relayLogPos
     *
     * @param integer $relayLogPos
     *
     * @return SlaveRelayLogInfo
     */
    public function setRelayLogPos($relayLogPos)
    {
        $this->relayLogPos = $relayLogPos;

        return $this;
    }

    /**
     * Get relayLogPos
     *
     * @return integer
     */
    public function getRelayLogPos()
    {
        return $this->relayLogPos;
    }

    /**
     * Set masterLogName
     *
     * @param string $masterLogName
     *
     * @return SlaveRelayLogInfo
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
     * @return SlaveRelayLogInfo
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
     * Set sqlDelay
     *
     * @param integer $sqlDelay
     *
     * @return SlaveRelayLogInfo
     */
    public function setSqlDelay($sqlDelay)
    {
        $this->sqlDelay = $sqlDelay;

        return $this;
    }

    /**
     * Get sqlDelay
     *
     * @return integer
     */
    public function getSqlDelay()
    {
        return $this->sqlDelay;
    }

    /**
     * Set numberOfWorkers
     *
     * @param integer $numberOfWorkers
     *
     * @return SlaveRelayLogInfo
     */
    public function setNumberOfWorkers($numberOfWorkers)
    {
        $this->numberOfWorkers = $numberOfWorkers;

        return $this;
    }

    /**
     * Get numberOfWorkers
     *
     * @return integer
     */
    public function getNumberOfWorkers()
    {
        return $this->numberOfWorkers;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
