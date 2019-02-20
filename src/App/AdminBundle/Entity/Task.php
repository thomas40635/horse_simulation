<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="task", indexes={@ORM\Index(name="task_horse", columns={"id_horse"}), @ORM\Index(name="task_riding_school", columns={"id_riding_school"}), @ORM\Index(name="task_infrastructure", columns={"id_infrastructure"})})
 * @ORM\Entity
 */
class Task
{
    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=100, nullable=false)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="frequency", type="string", length=30, nullable=false)
     */
    private $frequency;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \App\AdminBundle\Entity\Horse
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Horse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_horse", referencedColumnName="id")
     * })
     */
    private $idHorse;

    /**
     * @var \App\AdminBundle\Entity\Infrastructure
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Infrastructure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_infrastructure", referencedColumnName="id")
     * })
     */
    private $idInfrastructure;

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
     * Set action
     *
     * @param string $action
     *
     * @return Task
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set frequency
     *
     * @param string $frequency
     *
     * @return Task
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
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
     * Set idHorse
     *
     * @param \App\AdminBundle\Entity\Horse $idHorse
     *
     * @return Task
     */
    public function setIdHorse(\App\AdminBundle\Entity\Horse $idHorse = null)
    {
        $this->idHorse = $idHorse;

        return $this;
    }

    /**
     * Get idHorse
     *
     * @return \App\AdminBundle\Entity\Horse
     */
    public function getIdHorse()
    {
        return $this->idHorse;
    }

    /**
     * Set idInfrastructure
     *
     * @param \App\AdminBundle\Entity\Infrastructure $idInfrastructure
     *
     * @return Task
     */
    public function setIdInfrastructure(\App\AdminBundle\Entity\Infrastructure $idInfrastructure = null)
    {
        $this->idInfrastructure = $idInfrastructure;

        return $this;
    }

    /**
     * Get idInfrastructure
     *
     * @return \App\AdminBundle\Entity\Infrastructure
     */
    public function getIdInfrastructure()
    {
        return $this->idInfrastructure;
    }

    /**
     * Set idRidingSchool
     *
     * @param \App\AdminBundle\Entity\RidingSchool $idRidingSchool
     *
     * @return Task
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
