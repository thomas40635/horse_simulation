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



    /**
     * Set helpKeywordId
     *
     * @param integer $helpKeywordId
     *
     * @return HelpRelation
     */
    public function setHelpKeywordId($helpKeywordId)
    {
        $this->helpKeywordId = $helpKeywordId;

        return $this;
    }

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
     * Set helpTopicId
     *
     * @param integer $helpTopicId
     *
     * @return HelpRelation
     */
    public function setHelpTopicId($helpTopicId)
    {
        $this->helpTopicId = $helpTopicId;

        return $this;
    }

    /**
     * Get helpTopicId
     *
     * @return integer
     */
    public function getHelpTopicId()
    {
        return $this->helpTopicId;
    }
}
