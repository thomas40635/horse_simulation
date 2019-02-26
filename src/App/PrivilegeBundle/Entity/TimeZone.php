<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeZone
 *
 * @ORM\Table(name="time_zone")
 * @ORM\Entity
 */
class TimeZone
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Time_zone_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $timeZoneId;

    /**
     * @var string
     *
     * @ORM\Column(name="Use_leap_seconds", type="string", nullable=false)
     */
    private $useLeapSeconds = 'N';


}

