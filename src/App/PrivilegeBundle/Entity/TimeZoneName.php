<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeZoneName
 *
 * @ORM\Table(name="time_zone_name")
 * @ORM\Entity
 */
class TimeZoneName
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="Time_zone_id", type="integer", nullable=false)
     */
    private $timeZoneId;



    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set timeZoneId
     *
     * @param integer $timeZoneId
     *
     * @return TimeZoneName
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
}
