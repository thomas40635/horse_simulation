<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quality
 *
 * @ORM\Table(name="quality")
 * @ORM\Entity
 */
class Quality
{
    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=20, nullable=false)
     */
    private $label;

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
     * @return Quality
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
     * Set modifierMin
     *
     * @param integer $modifierMin
     *
     * @return Quality
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
     * @return Quality
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
