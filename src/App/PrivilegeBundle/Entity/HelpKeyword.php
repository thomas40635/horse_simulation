<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HelpKeyword
 *
 * @ORM\Table(name="help_keyword", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class HelpKeyword
{
    /**
     * @var integer
     *
     * @ORM\Column(name="help_keyword_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helpKeywordId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;



    /**
     * Get helpKeywordId
     *
     * @return integer
     */
    public function getHelpKeywordId()
    {
        return $this->helpKeywordId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return HelpKeyword
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
}
