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



    /**
     * Set host
     *
     * @param string $host
     *
     * @return Host
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set db
     *
     * @param string $db
     *
     * @return Host
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    /**
     * Get db
     *
     * @return string
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set selectPriv
     *
     * @param string $selectPriv
     *
     * @return Host
     */
    public function setSelectPriv($selectPriv)
    {
        $this->selectPriv = $selectPriv;

        return $this;
    }

    /**
     * Get selectPriv
     *
     * @return string
     */
    public function getSelectPriv()
    {
        return $this->selectPriv;
    }

    /**
     * Set insertPriv
     *
     * @param string $insertPriv
     *
     * @return Host
     */
    public function setInsertPriv($insertPriv)
    {
        $this->insertPriv = $insertPriv;

        return $this;
    }

    /**
     * Get insertPriv
     *
     * @return string
     */
    public function getInsertPriv()
    {
        return $this->insertPriv;
    }

    /**
     * Set updatePriv
     *
     * @param string $updatePriv
     *
     * @return Host
     */
    public function setUpdatePriv($updatePriv)
    {
        $this->updatePriv = $updatePriv;

        return $this;
    }

    /**
     * Get updatePriv
     *
     * @return string
     */
    public function getUpdatePriv()
    {
        return $this->updatePriv;
    }

    /**
     * Set deletePriv
     *
     * @param string $deletePriv
     *
     * @return Host
     */
    public function setDeletePriv($deletePriv)
    {
        $this->deletePriv = $deletePriv;

        return $this;
    }

    /**
     * Get deletePriv
     *
     * @return string
     */
    public function getDeletePriv()
    {
        return $this->deletePriv;
    }

    /**
     * Set createPriv
     *
     * @param string $createPriv
     *
     * @return Host
     */
    public function setCreatePriv($createPriv)
    {
        $this->createPriv = $createPriv;

        return $this;
    }

    /**
     * Get createPriv
     *
     * @return string
     */
    public function getCreatePriv()
    {
        return $this->createPriv;
    }

    /**
     * Set dropPriv
     *
     * @param string $dropPriv
     *
     * @return Host
     */
    public function setDropPriv($dropPriv)
    {
        $this->dropPriv = $dropPriv;

        return $this;
    }

    /**
     * Get dropPriv
     *
     * @return string
     */
    public function getDropPriv()
    {
        return $this->dropPriv;
    }

    /**
     * Set grantPriv
     *
     * @param string $grantPriv
     *
     * @return Host
     */
    public function setGrantPriv($grantPriv)
    {
        $this->grantPriv = $grantPriv;

        return $this;
    }

    /**
     * Get grantPriv
     *
     * @return string
     */
    public function getGrantPriv()
    {
        return $this->grantPriv;
    }

    /**
     * Set referencesPriv
     *
     * @param string $referencesPriv
     *
     * @return Host
     */
    public function setReferencesPriv($referencesPriv)
    {
        $this->referencesPriv = $referencesPriv;

        return $this;
    }

    /**
     * Get referencesPriv
     *
     * @return string
     */
    public function getReferencesPriv()
    {
        return $this->referencesPriv;
    }

    /**
     * Set indexPriv
     *
     * @param string $indexPriv
     *
     * @return Host
     */
    public function setIndexPriv($indexPriv)
    {
        $this->indexPriv = $indexPriv;

        return $this;
    }

    /**
     * Get indexPriv
     *
     * @return string
     */
    public function getIndexPriv()
    {
        return $this->indexPriv;
    }

    /**
     * Set alterPriv
     *
     * @param string $alterPriv
     *
     * @return Host
     */
    public function setAlterPriv($alterPriv)
    {
        $this->alterPriv = $alterPriv;

        return $this;
    }

    /**
     * Get alterPriv
     *
     * @return string
     */
    public function getAlterPriv()
    {
        return $this->alterPriv;
    }

    /**
     * Set createTmpTablePriv
     *
     * @param string $createTmpTablePriv
     *
     * @return Host
     */
    public function setCreateTmpTablePriv($createTmpTablePriv)
    {
        $this->createTmpTablePriv = $createTmpTablePriv;

        return $this;
    }

    /**
     * Get createTmpTablePriv
     *
     * @return string
     */
    public function getCreateTmpTablePriv()
    {
        return $this->createTmpTablePriv;
    }

    /**
     * Set lockTablesPriv
     *
     * @param string $lockTablesPriv
     *
     * @return Host
     */
    public function setLockTablesPriv($lockTablesPriv)
    {
        $this->lockTablesPriv = $lockTablesPriv;

        return $this;
    }

    /**
     * Get lockTablesPriv
     *
     * @return string
     */
    public function getLockTablesPriv()
    {
        return $this->lockTablesPriv;
    }

    /**
     * Set createViewPriv
     *
     * @param string $createViewPriv
     *
     * @return Host
     */
    public function setCreateViewPriv($createViewPriv)
    {
        $this->createViewPriv = $createViewPriv;

        return $this;
    }

    /**
     * Get createViewPriv
     *
     * @return string
     */
    public function getCreateViewPriv()
    {
        return $this->createViewPriv;
    }

    /**
     * Set showViewPriv
     *
     * @param string $showViewPriv
     *
     * @return Host
     */
    public function setShowViewPriv($showViewPriv)
    {
        $this->showViewPriv = $showViewPriv;

        return $this;
    }

    /**
     * Get showViewPriv
     *
     * @return string
     */
    public function getShowViewPriv()
    {
        return $this->showViewPriv;
    }

    /**
     * Set createRoutinePriv
     *
     * @param string $createRoutinePriv
     *
     * @return Host
     */
    public function setCreateRoutinePriv($createRoutinePriv)
    {
        $this->createRoutinePriv = $createRoutinePriv;

        return $this;
    }

    /**
     * Get createRoutinePriv
     *
     * @return string
     */
    public function getCreateRoutinePriv()
    {
        return $this->createRoutinePriv;
    }

    /**
     * Set alterRoutinePriv
     *
     * @param string $alterRoutinePriv
     *
     * @return Host
     */
    public function setAlterRoutinePriv($alterRoutinePriv)
    {
        $this->alterRoutinePriv = $alterRoutinePriv;

        return $this;
    }

    /**
     * Get alterRoutinePriv
     *
     * @return string
     */
    public function getAlterRoutinePriv()
    {
        return $this->alterRoutinePriv;
    }

    /**
     * Set executePriv
     *
     * @param string $executePriv
     *
     * @return Host
     */
    public function setExecutePriv($executePriv)
    {
        $this->executePriv = $executePriv;

        return $this;
    }

    /**
     * Get executePriv
     *
     * @return string
     */
    public function getExecutePriv()
    {
        return $this->executePriv;
    }

    /**
     * Set triggerPriv
     *
     * @param string $triggerPriv
     *
     * @return Host
     */
    public function setTriggerPriv($triggerPriv)
    {
        $this->triggerPriv = $triggerPriv;

        return $this;
    }

    /**
     * Get triggerPriv
     *
     * @return string
     */
    public function getTriggerPriv()
    {
        return $this->triggerPriv;
    }
}
