<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disease
 *
 * @ORM\Table(name="disease")
 * @ORM\Entity
 */
class Disease
{
    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=30, nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=150, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=false)
     */
    private $duration;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\AdminBundle\Entity\Horse", inversedBy="idDisease")
     * @ORM\JoinTable(name="horse_disease",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_disease", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_horse", referencedColumnName="id")
     *   }
     * )
     */
    private $idHorse;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idHorse = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set label
     *
     * @param string $label
     *
     * @return Disease
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Disease
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set duration
     *
     * @param \DateTime $duration
     *
     * @return Disease
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return \DateTime
     */
    public function getDuration()
    {
        return $this->duration;
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
     * Add idHorse
     *
     * @param \App\AdminBundle\Entity\Horse $idHorse
     *
     * @return Disease
     */
    public function addIdHorse(\App\AdminBundle\Entity\Horse $idHorse)
    {
        $this->idHorse[] = $idHorse;

        return $this;
    }

    /**
     * Remove idHorse
     *
     * @param \App\AdminBundle\Entity\Horse $idHorse
     */
    public function removeIdHorse(\App\AdminBundle\Entity\Horse $idHorse)
    {
        $this->idHorse->removeElement($idHorse);
    }

    /**
     * Get idHorse
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdHorse()
    {
        return $this->idHorse;
    }
}
