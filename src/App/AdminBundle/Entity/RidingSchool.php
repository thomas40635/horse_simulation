<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RidingSchool
 *
 * @ORM\Table(name="riding_school", indexes={@ORM\Index(name="riding_school_user", columns={"user_id"})})
 * @ORM\Entity
 */
class RidingSchool
{
    /**
     * @var integer
     *
     * @ORM\Column(name="host_capacity", type="integer", nullable=false)
     */
    private $hostCapacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \App\AdminBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Set hostCapacity
     *
     * @param integer $hostCapacity
     *
     * @return RidingSchool
     */
    public function setHostCapacity($hostCapacity)
    {
        $this->hostCapacity = $hostCapacity;

        return $this;
    }

    /**
     * Get hostCapacity
     *
     * @return integer
     */
    public function getHostCapacity()
    {
        return $this->hostCapacity;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param \App\AdminBundle\Entity\User $user
     *
     * @return RidingSchool
     */
    public function setUser(\App\AdminBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \App\AdminBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
