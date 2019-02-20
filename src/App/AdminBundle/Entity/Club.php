<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club", indexes={@ORM\Index(name="club_user", columns={"user_id"})})
 * @ORM\Entity
 */
class Club
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\AdminBundle\Entity\User", inversedBy="idClub")
     * @ORM\JoinTable(name="member_user_club",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_club", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     *   }
     * )
     */
    private $idUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUser = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set hostCapacity
     *
     * @param integer $hostCapacity
     *
     * @return Club
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
     * @return Club
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

    /**
     * Add idUser
     *
     * @param \App\AdminBundle\Entity\User $idUser
     *
     * @return Club
     */
    public function addIdUser(\App\AdminBundle\Entity\User $idUser)
    {
        $this->idUser[] = $idUser;

        return $this;
    }

    /**
     * Remove idUser
     *
     * @param \App\AdminBundle\Entity\User $idUser
     */
    public function removeIdUser(\App\AdminBundle\Entity\User $idUser)
    {
        $this->idUser->removeElement($idUser);
    }

    /**
     * Get idUser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
