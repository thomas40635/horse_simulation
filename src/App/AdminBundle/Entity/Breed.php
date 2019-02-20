<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Breed
 *
 * @ORM\Table(name="breed")
 * @ORM\Entity
 */
class Breed
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
     * @ORM\Column(name="resistance", type="integer", nullable=false)
     */
    private $resistance;

    /**
     * @var integer
     *
     * @ORM\Column(name="stamina", type="integer", nullable=false)
     */
    private $stamina;

    /**
     * @var integer
     *
     * @ORM\Column(name="speed", type="integer", nullable=false)
     */
    private $speed;

    /**
     * @var integer
     *
     * @ORM\Column(name="springiness", type="integer", nullable=false)
     */
    private $springiness;

    /**
     * @var string
     *
     * @ORM\Column(name="rarity", type="string", length=20, nullable=false)
     */
    private $rarity;

    /**
     * @var integer
     *
     * @ORM\Column(name="modifier_min", type="integer", nullable=false)
     */
    private $modifierMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="modifier_max", type="integer", nullable=false)
     */
    private $modifierMax;

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
     * @return Breed
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
     * @return Breed
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
     * Set resistance
     *
     * @param integer $resistance
     *
     * @return Breed
     */
    public function setResistance($resistance)
    {
        $this->resistance = $resistance;

        return $this;
    }

    /**
     * Get resistance
     *
     * @return integer
     */
    public function getResistance()
    {
        return $this->resistance;
    }

    /**
     * Set stamina
     *
     * @param integer $stamina
     *
     * @return Breed
     */
    public function setStamina($stamina)
    {
        $this->stamina = $stamina;

        return $this;
    }

    /**
     * Get stamina
     *
     * @return integer
     */
    public function getStamina()
    {
        return $this->stamina;
    }

    /**
     * Set speed
     *
     * @param integer $speed
     *
     * @return Breed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return integer
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set springiness
     *
     * @param integer $springiness
     *
     * @return Breed
     */
    public function setSpringiness($springiness)
    {
        $this->springiness = $springiness;

        return $this;
    }

    /**
     * Get springiness
     *
     * @return integer
     */
    public function getSpringiness()
    {
        return $this->springiness;
    }

    /**
     * Set rarity
     *
     * @param string $rarity
     *
     * @return Breed
     */
    public function setRarity($rarity)
    {
        $this->rarity = $rarity;

        return $this;
    }

    /**
     * Get rarity
     *
     * @return string
     */
    public function getRarity()
    {
        return $this->rarity;
    }

    /**
     * Set modifierMin
     *
     * @param integer $modifierMin
     *
     * @return Breed
     */
    public function setModifierMin($modifierMin)
    {
        $this->modifierMin = $modifierMin;

        return $this;
    }

    /**
     * Get modifierMin
     *
     * @return integer
     */
    public function getModifierMin()
    {
        return $this->modifierMin;
    }

    /**
     * Set modifierMax
     *
     * @param integer $modifierMax
     *
     * @return Breed
     */
    public function setModifierMax($modifierMax)
    {
        $this->modifierMax = $modifierMax;

        return $this;
    }

    /**
     * Get modifierMax
     *
     * @return integer
     */
    public function getModifierMax()
    {
        return $this->modifierMax;
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
