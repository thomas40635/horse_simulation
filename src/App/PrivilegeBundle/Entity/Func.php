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
     * Set ret
     *
     * @param boolean $ret
     *
     * @return Func
     */
    public function setRet($ret)
    {
        $this->ret = $ret;

        return $this;
    }

    /**
     * Get ret
     *
     * @return boolean
     */
    public function getRet()
    {
        return $this->ret;
    }

    /**
     * Set dl
     *
     * @param string $dl
     *
     * @return Func
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

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Func
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
