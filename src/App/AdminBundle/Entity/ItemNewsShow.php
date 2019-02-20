<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemNewsShow
 *
 * @ORM\Table(name="item_news_show", indexes={@ORM\Index(name="item_news_show_riding_show", columns={"id_riding_show"}), @ORM\Index(name="item_news_show_user", columns={"id_user"}), @ORM\Index(name="item_news_show_news", columns={"id_news"})})
 * @ORM\Entity
 */
class ItemNewsShow
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \App\AdminBundle\Entity\News
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\News")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_news", referencedColumnName="id")
     * })
     */
    private $idNews;

    /**
     * @var \App\AdminBundle\Entity\RidingShow
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\RidingShow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_riding_show", referencedColumnName="id")
     * })
     */
    private $idRidingShow;

    /**
     * @var \App\AdminBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;



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
     * Set idNews
     *
     * @param \App\AdminBundle\Entity\News $idNews
     *
     * @return ItemNewsShow
     */
    public function setIdNews(\App\AdminBundle\Entity\News $idNews = null)
    {
        $this->idNews = $idNews;

        return $this;
    }

    /**
     * Get idNews
     *
     * @return \App\AdminBundle\Entity\News
     */
    public function getIdNews()
    {
        return $this->idNews;
    }

    /**
     * Set idRidingShow
     *
     * @param \App\AdminBundle\Entity\RidingShow $idRidingShow
     *
     * @return ItemNewsShow
     */
    public function setIdRidingShow(\App\AdminBundle\Entity\RidingShow $idRidingShow = null)
    {
        $this->idRidingShow = $idRidingShow;

        return $this;
    }

    /**
     * Get idRidingShow
     *
     * @return \App\AdminBundle\Entity\RidingShow
     */
    public function getIdRidingShow()
    {
        return $this->idRidingShow;
    }

    /**
     * Set idUser
     *
     * @param \App\AdminBundle\Entity\User $idUser
     *
     * @return ItemNewsShow
     */
    public function setIdUser(\App\AdminBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \App\AdminBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
