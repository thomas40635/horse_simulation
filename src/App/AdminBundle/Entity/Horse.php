<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horse
 *
 * @ORM\Table(name="horse", indexes={@ORM\Index(name="horse_breed", columns={"id_breed"}), @ORM\Index(name="horse_infrastructure", columns={"id_infrastructure"})})
 * @ORM\Entity
 */
class Horse
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="sociability", type="integer", nullable=false)
     */
    private $sociability;

    /**
     * @var integer
     *
     * @ORM\Column(name="intelligence", type="integer", nullable=false)
     */
    private $intelligence;

    /**
     * @var integer
     *
     * @ORM\Column(name="temperament", type="integer", nullable=false)
     */
    private $temperament;

    /**
     * @var integer
     *
     * @ORM\Column(name="health", type="integer", nullable=false)
     */
    private $health;

    /**
     * @var integer
     *
     * @ORM\Column(name="mental_health", type="integer", nullable=false)
     */
    private $mentalHealth;

    /**
     * @var integer
     *
     * @ORM\Column(name="stress", type="integer", nullable=false)
     */
    private $stress;

    /**
     * @var integer
     *
     * @ORM\Column(name="tiredness", type="integer", nullable=false)
     */
    private $tiredness;

    /**
     * @var integer
     *
     * @ORM\Column(name="hunger", type="integer", nullable=false)
     */
    private $hunger;

    /**
     * @var integer
     *
     * @ORM\Column(name="cleanliness", type="integer", nullable=false)
     */
    private $cleanliness;

    /**
     * @var integer
     *
     * @ORM\Column(name="experience", type="integer", nullable=false)
     */
    private $experience;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=false)
     */
    private $score;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \App\AdminBundle\Entity\Breed
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Breed")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_breed", referencedColumnName="id")
     * })
     */
    private $idBreed;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\AdminBundle\Entity\Disease", mappedBy="idHorse")
     */
    private $idDisease;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\AdminBundle\Entity\Parasite", mappedBy="idHorse")
     */
    private $idParasite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\AdminBundle\Entity\Wound", mappedBy="idHorse")
     */
    private $idWound;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idDisease = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idParasite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idWound = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Horse
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set sociability
     *
     * @param integer $sociability
     *
     * @return Horse
     */
    public function setSociability($sociability)
    {
        $this->sociability = $sociability;

        return $this;
    }

    /**
     * Get sociability
     *
     * @return integer
     */
    public function getSociability()
    {
        return $this->sociability;
    }

    /**
     * Set intelligence
     *
     * @param integer $intelligence
     *
     * @return Horse
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get intelligence
     *
     * @return integer
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * Set temperament
     *
     * @param integer $temperament
     *
     * @return Horse
     */
    public function setTemperament($temperament)
    {
        $this->temperament = $temperament;

        return $this;
    }

    /**
     * Get temperament
     *
     * @return integer
     */
    public function getTemperament()
    {
        return $this->temperament;
    }

    /**
     * Set health
     *
     * @param integer $health
     *
     * @return Horse
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get health
     *
     * @return integer
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set mentalHealth
     *
     * @param integer $mentalHealth
     *
     * @return Horse
     */
    public function setMentalHealth($mentalHealth)
    {
        $this->mentalHealth = $mentalHealth;

        return $this;
    }

    /**
     * Get mentalHealth
     *
     * @return integer
     */
    public function getMentalHealth()
    {
        return $this->mentalHealth;
    }

    /**
     * Set stress
     *
     * @param integer $stress
     *
     * @return Horse
     */
    public function setStress($stress)
    {
        $this->stress = $stress;

        return $this;
    }

    /**
     * Get stress
     *
     * @return integer
     */
    public function getStress()
    {
        return $this->stress;
    }

    /**
     * Set tiredness
     *
     * @param integer $tiredness
     *
     * @return Horse
     */
    public function setTiredness($tiredness)
    {
        $this->tiredness = $tiredness;

        return $this;
    }

    /**
     * Get tiredness
     *
     * @return integer
     */
    public function getTiredness()
    {
        return $this->tiredness;
    }

    /**
     * Set hunger
     *
     * @param integer $hunger
     *
     * @return Horse
     */
    public function setHunger($hunger)
    {
        $this->hunger = $hunger;

        return $this;
    }

    /**
     * Get hunger
     *
     * @return integer
     */
    public function getHunger()
    {
        return $this->hunger;
    }

    /**
     * Set cleanliness
     *
     * @param integer $cleanliness
     *
     * @return Horse
     */
    public function setCleanliness($cleanliness)
    {
        $this->cleanliness = $cleanliness;

        return $this;
    }

    /**
     * Get cleanliness
     *
     * @return integer
     */
    public function getCleanliness()
    {
        return $this->cleanliness;
    }

    /**
     * Set experience
     *
     * @param integer $experience
     *
     * @return Horse
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return integer
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Horse
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
     * Set score
     *
     * @param integer $score
     *
     * @return Horse
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
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
     * Set idBreed
     *
     * @param \App\AdminBundle\Entity\Breed $idBreed
     *
     * @return Horse
     */
    public function setIdBreed(\App\AdminBundle\Entity\Breed $idBreed = null)
    {
        $this->idBreed = $idBreed;

        return $this;
    }

    /**
     * Get idBreed
     *
     * @return \App\AdminBundle\Entity\Breed
     */
    public function getIdBreed()
    {
        return $this->idBreed;
    }

    /**
     * Set idInfrastructure
     *
     * @param \App\AdminBundle\Entity\Infrastructure $idInfrastructure
     *
     * @return Horse
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
     * Add idDisease
     *
     * @param \App\AdminBundle\Entity\Disease $idDisease
     *
     * @return Horse
     */
    public function addIdDisease(\App\AdminBundle\Entity\Disease $idDisease)
    {
        $this->idDisease[] = $idDisease;

        return $this;
    }

    /**
     * Remove idDisease
     *
     * @param \App\AdminBundle\Entity\Disease $idDisease
     */
    public function removeIdDisease(\App\AdminBundle\Entity\Disease $idDisease)
    {
        $this->idDisease->removeElement($idDisease);
    }

    /**
     * Get idDisease
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdDisease()
    {
        return $this->idDisease;
    }

    /**
     * Add idParasite
     *
     * @param \App\AdminBundle\Entity\Parasite $idParasite
     *
     * @return Horse
     */
    public function addIdParasite(\App\AdminBundle\Entity\Parasite $idParasite)
    {
        $this->idParasite[] = $idParasite;

        return $this;
    }

    /**
     * Remove idParasite
     *
     * @param \App\AdminBundle\Entity\Parasite $idParasite
     */
    public function removeIdParasite(\App\AdminBundle\Entity\Parasite $idParasite)
    {
        $this->idParasite->removeElement($idParasite);
    }

    /**
     * Get idParasite
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdParasite()
    {
        return $this->idParasite;
    }

    /**
     * Add idWound
     *
     * @param \App\AdminBundle\Entity\Wound $idWound
     *
     * @return Horse
     */
    public function addIdWound(\App\AdminBundle\Entity\Wound $idWound)
    {
        $this->idWound[] = $idWound;

        return $this;
    }

    /**
     * Remove idWound
     *
     * @param \App\AdminBundle\Entity\Wound $idWound
     */
    public function removeIdWound(\App\AdminBundle\Entity\Wound $idWound)
    {
        $this->idWound->removeElement($idWound);
    }

    /**
     * Get idWound
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdWound()
    {
        return $this->idWound;
    }
}
