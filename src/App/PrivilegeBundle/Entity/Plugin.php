<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plugin
 *
 * @ORM\Table(name="plugin")
 * @ORM\Entity
 */
class Plugin
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
     * @var string
     *
     * @ORM\Column(name="dl", type="string", length=128, nullable=false)
     */
    private $dl = '';



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
     * Set dl
     *
     * @param string $dl
     *
     * @return Plugin
     */
    public function setDl($dl)
    {
        $this->dl = $dl;

        return $this;
    }

    /**
     * Get dl
     *
     * @return string
     */
    public function getDl()
    {
        return $this->dl;
    }
}
