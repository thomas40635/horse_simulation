<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeZoneTransitionType
 *
 * @ORM\Table(name="time_zone_transition_type")
 * @ORM\Entity
 */
class TimeZoneTransitionType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Time_zone_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $timeZoneId;

    /**
     * @var integer
     *
     * @ORM\Column(name="Transition_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $transitionTypeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="Offset", type="integer", nullable=false)
     */
    private $offset = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Is_DST", type="boolean", nullable=false)
     */
    private $isDst = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Abbreviation", type="string", length=8, nullable=false)
     */
    private $abbreviation = '';



    /**
     * Set timeZoneId
     *
     * @param integer $timeZoneId
     *
     * @return TimeZoneTransitionType
     */
    public function setTimeZoneId($timeZoneId)
    {
        $this->timeZoneId = $timeZoneId;

        return $this;
    }

    /**
     * Get timeZoneId
     *
     * @return integer
     */
    public function getTimeZoneId()
    {
        return $this->timeZoneId;
    }

    /**
     * Set transitionTypeId
     *
     * @param integer $transitionTypeId
     *
     * @return TimeZoneTransitionType
     */
    public function setTransitionTypeId($transitionTypeId)
    {
        $this->transitionTypeId = $transitionTypeId;

        return $this;
    }

    /**
     * Get transitionTypeId
     *
     * @return integer
     */
    public function getTransitionTypeId()
    {
        return $this->transitionTypeId;
    }

    /**
     * Set offset
     *
     * @param integer $offset
     *
     * @return TimeZoneTransitionType
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get offset
     *
     * @return integer
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Set isDst
     *
     * @param boolean $isDst
     *
     * @return TimeZoneTransitionType
     */
    public function setIsDst($isDst)
    {
        $this->isDst = $isDst;

        return $this;
    }

    /**
     * Get isDst
     *
     * @return boolean
     */
    public function getIsDst()
    {
        return $this->isDst;
    }

    /**
     * Set abbreviation
     *
     * @param string $abbreviation
     *
     * @return TimeZoneTransitionType
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }

    /**
     * Get abbreviation
     *
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }
}
