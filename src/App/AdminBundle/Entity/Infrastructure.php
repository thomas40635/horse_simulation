<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infrastructure
 *
 * @ORM\Table(name="infrastructure", indexes={@ORM\Index(name="infrastructure_infratype", columns={"id_infratype"}), @ORM\Index(name="infrastructure_riding_school", columns={"id_riding_school"}), @ORM\Index(name="infrastructure_club", columns={"id_club"})})
 * @ORM\Entity
 */
class Infrastructure
{
    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \App\AdminBundle\Entity\RidingSchool
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\RidingSchool")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_club", referencedColumnName="id")
     * })
     */
    private $idClub;

    /**
     * @var \App\AdminBundle\Entity\InfraType
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\InfraType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_infratype", referencedColumnName="id")
     * })
     */
    private $idInfratype;

    /**
     * @var \App\AdminBundle\Entity\RidingSchool
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\RidingSchool")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_riding_school", referencedColumnName="id")
     * })
     */
    private $idRidingSchool;



    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Infrastructure
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
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
     * Set idClub
     *
     * @param \App\AdminBundle\Entity\RidingSchool $idClub
     *
     * @return Infrastructure
     */
    public function setIdClub(\App\AdminBundle\Entity\RidingSchool $idClub = null)
    {
        $this->idClub = $idClub;

        return $this;
    }

    /**
     * Get idClub
     *
     * @return \App\AdminBundle\Entity\RidingSchool
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * Set idInfratype
     *
     * @param \App\AdminBundle\Entity\InfraType $idInfratype
     *
     * @return Infrastructure
     */
    public function setIdInfratype(\App\AdminBundle\Entity\InfraType $idInfratype = null)
    {
        $this->idInfratype = $idInfratype;

        return $this;
    }

    /**
     * Get idInfratype
     *
     * @return \App\AdminBundle\Entity\InfraType
     */
    public function getIdInfratype()
    {
        return $this->idInfratype;
    }

    /**
     * Set idRidingSchool
     *
     * @param \App\AdminBundle\Entity\RidingSchool $idRidingSchool
     *
     * @return Infrastructure
     */
    public function setIdRidingSchool(\App\AdminBundle\Entity\RidingSchool $idRidingSchool = null)
    {
        $this->idRidingSchool = $idRidingSchool;

        return $this;
    }

    /**
     * Get idRidingSchool
     *
     * @return \App\AdminBundle\Entity\RidingSchool
     */
    public function getIdRidingSchool()
    {
        return $this->idRidingSchool;
    }
}
