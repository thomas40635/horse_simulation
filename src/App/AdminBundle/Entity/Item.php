<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item", indexes={@ORM\Index(name="item_horse", columns={"id_horse"}), @ORM\Index(name="item_category", columns={"id_item_category"}), @ORM\Index(name="item_quality", columns={"id_quality"})})
 * @ORM\Entity
 */
class Item
{
    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=30, nullable=false)
     */
    private $label;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=false)
     */
    private $description;

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
     * @var \App\AdminBundle\Entity\ItemCategory
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\ItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_item_category", referencedColumnName="id")
     * })
     */
    private $idItemCategory;

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
     * @var \App\AdminBundle\Entity\Quality
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Quality")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_quality", referencedColumnName="id")
     * })
     */
    private $idQuality;



    /**
     * Set label
     *
     * @param string $label
     *
     * @return Item
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
     * Set price
     *
     * @param integer $price
     *
     * @return Item
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Item
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
     * Set level
     *
     * @param integer $level
     *
     * @return Item
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
     * Set idItemCategory
     *
     * @param \App\AdminBundle\Entity\ItemCategory $idItemCategory
     *
     * @return Item
     */
    public function setIdItemCategory(\App\AdminBundle\Entity\ItemCategory $idItemCategory = null)
    {
        $this->idItemCategory = $idItemCategory;

        return $this;
    }

    /**
     * Get idItemCategory
     *
     * @return \App\AdminBundle\Entity\ItemCategory
     */
    public function getIdItemCategory()
    {
        return $this->idItemCategory;
    }

    /**
     * Set idHorse
     *
     * @param \App\AdminBundle\Entity\Horse $idHorse
     *
     * @return Item
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
     * Set idQuality
     *
     * @param \App\AdminBundle\Entity\Quality $idQuality
     *
     * @return Item
     */
    public function setIdQuality(\App\AdminBundle\Entity\Quality $idQuality = null)
    {
        $this->idQuality = $idQuality;

        return $this;
    }

    /**
     * Get idQuality
     *
     * @return \App\AdminBundle\Entity\Quality
     */
    public function getIdQuality()
    {
        return $this->idQuality;
    }
}
