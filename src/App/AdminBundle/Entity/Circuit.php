<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Circuit
 *
 * @ORM\Table(name="circuit", indexes={@ORM\Index(name="circuit_show", columns={"id_show"})})
 * @ORM\Entity
 */
class Circuit
{
    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=60, nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

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
     *   @ORM\JoinColumn(name="id_show", referencedColumnName="id")
     * })
     */
    private $idShow;



    /**
     * Set label
     *
     * @param string $label
     *
     * @return Circuit
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
     * @return Circuit
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idShow
     *
     * @param \App\AdminBundle\Entity\Circuit $idShow
     *
     * @return Circuit
     */
    public function setIdShow(\App\AdminBundle\Entity\Circuit $idShow = null)
    {
        $this->idShow = $idShow;

        return $this;
    }

    /**
     * Get idShow
     *
     * @return \App\AdminBundle\Entity\Circuit
     */
    public function getIdShow()
    {
        return $this->idShow;
    }
}
