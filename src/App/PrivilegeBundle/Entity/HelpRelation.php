<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HelpRelation
 *
 * @ORM\Table(name="help_relation")
 * @ORM\Entity
 */
class HelpRelation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="help_keyword_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $helpKeywordId;

    /**
     * @var integer
     *
     * @ORM\Column(name="help_topic_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $helpTopicId;


}

