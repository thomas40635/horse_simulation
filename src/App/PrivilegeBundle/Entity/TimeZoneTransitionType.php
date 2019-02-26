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


}

