<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HelpTopic
 *
 * @ORM\Table(name="help_topic", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class HelpTopic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="help_topic_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helpTopicId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="help_category_id", type="smallint", nullable=false)
     */
    private $helpCategoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="example", type="text", length=65535, nullable=false)
     */
    private $example;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", length=65535, nullable=false)
     */
    private $url;



    /**
     * Get helpTopicId
     *
     * @return integer
     */
    public function getHelpTopicId()
    {
        return $this->helpTopicId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return HelpTopic
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
     * Set helpCategoryId
     *
     * @param integer $helpCategoryId
     *
     * @return HelpTopic
     */
    public function setHelpCategoryId($helpCategoryId)
    {
        $this->helpCategoryId = $helpCategoryId;

        return $this;
    }

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
     * Set description
     *
     * @param string $description
     *
     * @return HelpTopic
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
     * Set example
     *
     * @param string $example
     *
     * @return HelpTopic
     */
    public function setExample($example)
    {
        $this->example = $example;

        return $this;
    }

    /**
     * Get example
     *
     * @return string
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return HelpTopic
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
