<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemNewsHorsesale
 *
 * @ORM\Table(name="item_news_horsesale", indexes={@ORM\Index(name="item_news_horsesale_horse", columns={"id_horse"}), @ORM\Index(name="item_news_horsesale_user", columns={"id_user"}), @ORM\Index(name="item_news_horsesale_news", columns={"id_news"})})
 * @ORM\Entity
 */
class ItemNewsHorsesale
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
     * @var \App\AdminBundle\Entity\Horse
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Horse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_horse", referencedColumnName="id")
     * })
     */
    private $idHorse;

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
     * Set idHorse
     *
     * @param \App\AdminBundle\Entity\Horse $idHorse
     *
     * @return ItemNewsHorsesale
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
     * Set idNews
     *
     * @param \App\AdminBundle\Entity\News $idNews
     *
     * @return ItemNewsHorsesale
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
     * Set idUser
     *
     * @param \App\AdminBundle\Entity\User $idUser
     *
     * @return ItemNewsHorsesale
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
