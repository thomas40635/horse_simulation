<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HelpCategory
 *
 * @ORM\Table(name="help_category", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class HelpCategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="help_category_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helpCategoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_category_id", type="smallint", nullable=true)
     */
    private $parentCategoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", length=65535, nullable=false)
     */
    private $url;



    /**
     * Get helpCategoryId
     *
     * @return integer
     */
    public function getHelpCategoryId()
    {
        return $this->helpCategoryId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return HelpCategory
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
     * Set parentCategoryId
     *
     * @param integer $parentCategoryId
     *
     * @return HelpCategory
     */
    public function setParentCategoryId($parentCategoryId)
    {
        $this->parentCategoryId = $parentCategoryId;

        return $this;
    }

    /**
     * Get parentCategoryId
     *
     * @return integer
     */
    public function getParentCategoryId()
    {
        return $this->parentCategoryId;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return HelpCategory
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
