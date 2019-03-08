<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeZoneTransition
 *
 * @ORM\Table(name="time_zone_transition")
 * @ORM\Entity
 */
class TimeZoneTransition
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
     * @ORM\Column(name="Transition_time", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $transitionTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="Transition_type_id", type="integer", nullable=false)
     */
    private $transitionTypeId;



    /**
     * Set timeZoneId
     *
     * @param integer $timeZoneId
     *
     * @return TimeZoneTransition
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
     * Set transitionTime
     *
     * @param integer $transitionTime
     *
     * @return TimeZoneTransition
     */
    public function setTransitionTime($transitionTime)
    {
        $this->transitionTime = $transitionTime;

        return $this;
    }

    /**
     * Get transitionTime
     *
     * @return integer
     */
    public function getTransitionTime()
    {
        return $this->transitionTime;
    }

    /**
     * Set transitionTypeId
     *
     * @param integer $transitionTypeId
     *
     * @return TimeZoneTransition
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
}
