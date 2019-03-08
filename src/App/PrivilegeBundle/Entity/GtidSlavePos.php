<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GtidSlavePos
 *
 * @ORM\Table(name="gtid_slave_pos")
 * @ORM\Entity
 */
class GtidSlavePos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="domain_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $domainId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sub_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $subId;

    /**
     * @var integer
     *
     * @ORM\Column(name="server_id", type="integer", nullable=false)
     */
    private $serverId;

    /**
     * @var integer
     *
     * @ORM\Column(name="seq_no", type="bigint", nullable=false)
     */
    private $seqNo;



    /**
     * Set domainId
     *
     * @param integer $domainId
     *
     * @return GtidSlavePos
     */
    public function setDomainId($domainId)
    {
        $this->domainId = $domainId;

        return $this;
    }

    /**
     * Get domainId
     *
     * @return integer
     */
    public function getDomainId()
    {
        return $this->domainId;
    }

    /**
     * Set subId
     *
     * @param integer $subId
     *
     * @return GtidSlavePos
     */
    public function setSubId($subId)
    {
        $this->subId = $subId;

        return $this;
    }

    /**
     * Get subId
     *
     * @return integer
     */
    public function getSubId()
    {
        return $this->subId;
    }

    /**
     * Set serverId
     *
     * @param integer $serverId
     *
     * @return GtidSlavePos
     */
    public function setServerId($serverId)
    {
        $this->serverId = $serverId;

        return $this;
    }

    /**
     * Get serverId
     *
     * @return integer
     */
    public function getServerId()
    {
        return $this->serverId;
    }

    /**
     * Set seqNo
     *
     * @param integer $seqNo
     *
     * @return GtidSlavePos
     */
    public function setSeqNo($seqNo)
    {
        $this->seqNo = $seqNo;

        return $this;
    }

    /**
     * Get seqNo
     *
     * @return integer
     */
    public function getSeqNo()
    {
        return $this->seqNo;
    }
}
