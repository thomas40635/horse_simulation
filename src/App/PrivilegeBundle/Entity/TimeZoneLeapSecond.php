<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeZoneLeapSecond
 *
 * @ORM\Table(name="time_zone_leap_second")
 * @ORM\Entity
 */
class TimeZoneLeapSecond
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Transition_time", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $transitionTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="Correction", type="integer", nullable=false)
     */
    private $correction;



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
     * Set correction
     *
     * @param integer $correction
     *
     * @return TimeZoneLeapSecond
     */
    public function setCorrection($correction)
    {
        $this->correction = $correction;

        return $this;
    }

    /**
     * Get correction
     *
     * @return integer
     */
    public function getCorrection()
    {
        return $this->correction;
    }
}
