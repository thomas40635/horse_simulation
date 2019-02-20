<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfraType
 *
 * @ORM\Table(name="infra_type")
 * @ORM\Entity
 */
class InfraType
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
     * @ORM\Column(name="description", type="string", length=150, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=60, nullable=false)
     */
    private $category;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="consumption", type="integer", nullable=false)
     */
    private $consumption;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_capacity", type="integer", nullable=false)
     */
    private $itemCapacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="horse_capacity", type="integer", nullable=false)
     */
    private $horseCapacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set label
     *
     * @param string $label
     *
     * @return InfraType
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
     * @return InfraType
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
     * Set category
     *
     * @param string $category
     *
     * @return InfraType
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return InfraType
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
     * Set consumption
     *
     * @param integer $consumption
     *
     * @return InfraType
     */
    public function setConsumption($consumption)
    {
        $this->consumption = $consumption;

        return $this;
    }

    /**
     * Get consumption
     *
     * @return integer
     */
    public function getConsumption()
    {
        return $this->consumption;
    }

    /**
     * Set itemCapacity
     *
     * @param integer $itemCapacity
     *
     * @return InfraType
     */
    public function setItemCapacity($itemCapacity)
    {
        $this->itemCapacity = $itemCapacity;

        return $this;
    }

    /**
     * Get itemCapacity
     *
     * @return integer
     */
    public function getItemCapacity()
    {
        return $this->itemCapacity;
    }

    /**
     * Set horseCapacity
     *
     * @param integer $horseCapacity
     *
     * @return InfraType
     */
    public function setHorseCapacity($horseCapacity)
    {
        $this->horseCapacity = $horseCapacity;

        return $this;
    }

    /**
     * Get horseCapacity
     *
     * @return integer
     */
    public function getHorseCapacity()
    {
        return $this->horseCapacity;
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
}
