<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RidingShow
 *
 * @ORM\Table(name="riding_show", indexes={@ORM\Index(name="show_club", columns={"id_club"}), @ORM\Index(name="show_circuit", columns={"id_circuit"})})
 * @ORM\Entity
 */
class RidingShow
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="starting_date", type="date", nullable=false)
     */
    private $startingDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ending_date", type="date", nullable=false)
     */
    private $endingDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \App\AdminBundle\Entity\Circuit
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Circuit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_circuit", referencedColumnName="id")
     * })
     */
    private $idCircuit;

    /**
     * @var \App\AdminBundle\Entity\Club
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Club")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_club", referencedColumnName="id")
     * })
     */
    private $idClub;



    /**
     * Set startingDate
     *
     * @param \DateTime $startingDate
     *
     * @return RidingShow
     */
    public function setStartingDate($startingDate)
    {
        $this->startingDate = $startingDate;

        return $this;
    }

    /**
     * Get startingDate
     *
     * @return \DateTime
     */
    public function getStartingDate()
    {
        return $this->startingDate;
    }

    /**
     * Set endingDate
     *
     * @param \DateTime $endingDate
     *
     * @return RidingShow
     */
    public function setEndingDate($endingDate)
    {
        $this->endingDate = $endingDate;

        return $this;
    }

    /**
     * Get endingDate
     *
     * @return \DateTime
     */
    public function getEndingDate()
    {
        return $this->endingDate;
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
     * Set idCircuit
     *
     * @param \App\AdminBundle\Entity\Circuit $idCircuit
     *
     * @return RidingShow
     */
    public function setIdCircuit(\App\AdminBundle\Entity\Circuit $idCircuit = null)
    {
        $this->idCircuit = $idCircuit;

        return $this;
    }

    /**
     * Get idCircuit
     *
     * @return \App\AdminBundle\Entity\Circuit
     */
    public function getIdCircuit()
    {
        return $this->idCircuit;
    }

    /**
     * Set idClub
     *
     * @param \App\AdminBundle\Entity\Club $idClub
     *
     * @return RidingShow
     */
    public function setIdClub(\App\AdminBundle\Entity\Club $idClub = null)
    {
        $this->idClub = $idClub;

        return $this;
    }

    /**
     * Get idClub
     *
     * @return \App\AdminBundle\Entity\Club
     */
    public function getIdClub()
    {
        return $this->idClub;
    }
}
