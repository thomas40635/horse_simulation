<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TablesPriv
 *
 * @ORM\Table(name="tables_priv", indexes={@ORM\Index(name="Grantor", columns={"Grantor"})})
 * @ORM\Entity
 */
class TablesPriv
{
    /**
     * @var string
     *
     * @ORM\Column(name="Host", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $host = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Db", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $db = '';

    /**
     * @var string
     *
     * @ORM\Column(name="User", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $user = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Table_name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tableName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Grantor", type="string", length=141, nullable=false)
     */
    private $grantor = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Timestamp", type="datetime", nullable=false)
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var array
     *
     * @ORM\Column(name="Table_priv", type="simple_array", nullable=false)
     */
    private $tablePriv = '';

    /**
     * @var array
     *
     * @ORM\Column(name="Column_priv", type="simple_array", nullable=false)
     */
    private $columnPriv = '';


}

