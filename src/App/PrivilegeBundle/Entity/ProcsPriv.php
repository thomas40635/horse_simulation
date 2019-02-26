<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProcsPriv
 *
 * @ORM\Table(name="procs_priv", indexes={@ORM\Index(name="Grantor", columns={"Grantor"})})
 * @ORM\Entity
 */
class ProcsPriv
{
    /**
     * @var string
     *
     * @ORM\Column(name="Host", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $host = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Db", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $db = '';

    /**
     * @var string
     *
     * @ORM\Column(name="User", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $user = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Routine_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $routineName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Routine_type", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $routineType;

    /**
     * @var string
     *
     * @ORM\Column(name="Grantor", type="string", length=141, nullable=false)
     */
    private $grantor = '';

    /**
     * @var array
     *
     * @ORM\Column(name="Proc_priv", type="simple_array", nullable=false)
     */
    private $procPriv = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Timestamp", type="datetime", nullable=false)
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}

