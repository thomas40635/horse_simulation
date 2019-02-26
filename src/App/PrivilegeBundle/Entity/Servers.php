<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servers
 *
 * @ORM\Table(name="servers")
 * @ORM\Entity
 */
class Servers
{
    /**
     * @var string
     *
     * @ORM\Column(name="Server_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $serverName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Host", type="string", length=64, nullable=false)
     */
    private $host = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Db", type="string", length=64, nullable=false)
     */
    private $db = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=80, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=64, nullable=false)
     */
    private $password = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="Port", type="integer", nullable=false)
     */
    private $port = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Socket", type="string", length=64, nullable=false)
     */
    private $socket = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Wrapper", type="string", length=64, nullable=false)
     */
    private $wrapper = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Owner", type="string", length=64, nullable=false)
     */
    private $owner = '';


}

