<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reward
 *
 * @ORM\Table(name="reward", indexes={@ORM\Index(name="reward_item", columns={"id_item"}), @ORM\Index(name="reward_riding_show", columns={"id_riding_show"})})
 * @ORM\Entity
 */
class Reward
{
    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \App\AdminBundle\Entity\Item
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_item", referencedColumnName="id")
     * })
     */
    private $idItem;

    /**
     * @var \App\AdminBundle\Entity\RidingShow
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\RidingShow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_riding_show", referencedColumnName="id")
     * })
     */
    private $idRidingShow;



    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Reward
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
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
     * Set idItem
     *
     * @param \App\AdminBundle\Entity\Item $idItem
     *
     * @return Reward
     */
    public function setIdItem(\App\AdminBundle\Entity\Item $idItem = null)
    {
        $this->idItem = $idItem;

        return $this;
    }

    /**
     * Get idItem
     *
     * @return \App\AdminBundle\Entity\Item
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * Set idRidingShow
     *
     * @param \App\AdminBundle\Entity\RidingShow $idRidingShow
     *
     * @return Reward
     */
    public function setIdRidingShow(\App\AdminBundle\Entity\RidingShow $idRidingShow = null)
    {
        $this->idRidingShow = $idRidingShow;

        return $this;
    }

    /**
     * Get idRidingShow
     *
     * @return \App\AdminBundle\Entity\RidingShow
     */
    public function getIdRidingShow()
    {
        return $this->idRidingShow;
    }
}
