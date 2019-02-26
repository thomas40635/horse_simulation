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


}

