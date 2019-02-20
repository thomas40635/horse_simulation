<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemNewsItemsale
 *
 * @ORM\Table(name="item_news_itemsale", indexes={@ORM\Index(name="item_news_itemsale_item", columns={"id_item"}), @ORM\Index(name="item_news_itemsale_user", columns={"id_user"}), @ORM\Index(name="item_news_itemsale_news", columns={"id_news"})})
 * @ORM\Entity
 */
class ItemNewsItemsale
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
     * @var \App\AdminBundle\Entity\Item
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_item", referencedColumnName="id")
     * })
     */
    private $idItem;

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
     * Set idItem
     *
     * @param \App\AdminBundle\Entity\Item $idItem
     *
     * @return ItemNewsItemsale
     */
    public function setIdItem(\App\AdminBundle\Entity\Item $idItem = null)
    {
        $this->idItem = $idItem;

        return $this;
    }

    /**
     * Get idItem
     *
     * @return \App\AdminBundle\Entity\Item
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * Set idNews
     *
     * @param \App\AdminBundle\Entity\News $idNews
     *
     * @return ItemNewsItemsale
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
     * @return ItemNewsItemsale
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
