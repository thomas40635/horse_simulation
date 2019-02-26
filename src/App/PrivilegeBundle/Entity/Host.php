<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Host
 *
 * @ORM\Table(name="host")
 * @ORM\Entity
 */
class Host
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
     * @ORM\Column(name="Select_priv", type="string", nullable=false)
     */
    private $selectPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Insert_priv", type="string", nullable=false)
     */
    private $insertPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Update_priv", type="string", nullable=false)
     */
    private $updatePriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Delete_priv", type="string", nullable=false)
     */
    private $deletePriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Create_priv", type="string", nullable=false)
     */
    private $createPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Drop_priv", type="string", nullable=false)
     */
    private $dropPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Grant_priv", type="string", nullable=false)
     */
    private $grantPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="References_priv", type="string", nullable=false)
     */
    private $referencesPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Index_priv", type="string", nullable=false)
     */
    private $indexPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Alter_priv", type="string", nullable=false)
     */
    private $alterPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Create_tmp_table_priv", type="string", nullable=false)
     */
    private $createTmpTablePriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Lock_tables_priv", type="string", nullable=false)
     */
    private $lockTablesPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Create_view_priv", type="string", nullable=false)
     */
    private $createViewPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Show_view_priv", type="string", nullable=false)
     */
    private $showViewPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Create_routine_priv", type="string", nullable=false)
     */
    private $createRoutinePriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Alter_routine_priv", type="string", nullable=false)
     */
    private $alterRoutinePriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Execute_priv", type="string", nullable=false)
     */
    private $executePriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Trigger_priv", type="string", nullable=false)
     */
    private $triggerPriv = 'N';


}

