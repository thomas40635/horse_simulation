<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Func
 *
 * @ORM\Table(name="func")
 * @ORM\Entity
 */
class Func
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ret", type="boolean", nullable=false)
     */
    private $ret = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dl", type="string", length=128, nullable=false)
     */
    private $dl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type;


}

