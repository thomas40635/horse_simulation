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


}

