<?php

namespace App\PrivilegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User implements UserInterface
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
     * @ORM\Column(name="User", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=41, nullable=false)
     */
    private $password = '';

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
     * @ORM\Column(name="Reload_priv", type="string", nullable=false)
     */
    private $reloadPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Shutdown_priv", type="string", nullable=false)
     */
    private $shutdownPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Process_priv", type="string", nullable=false)
     */
    private $processPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="File_priv", type="string", nullable=false)
     */
    private $filePriv = 'N';

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
     * @ORM\Column(name="Show_db_priv", type="string", nullable=false)
     */
    private $showDbPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Super_priv", type="string", nullable=false)
     */
    private $superPriv = 'N';

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
     * @ORM\Column(name="Execute_priv", type="string", nullable=false)
     */
    private $executePriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Repl_slave_priv", type="string", nullable=false)
     */
    private $replSlavePriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Repl_client_priv", type="string", nullable=false)
     */
    private $replClientPriv = 'N';

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
     * @ORM\Column(name="Create_user_priv", type="string", nullable=false)
     */
    private $createUserPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Event_priv", type="string", nullable=false)
     */
    private $eventPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Trigger_priv", type="string", nullable=false)
     */
    private $triggerPriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Create_tablespace_priv", type="string", nullable=false)
     */
    private $createTablespacePriv = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="ssl_type", type="string", nullable=false)
     */
    private $sslType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ssl_cipher", type="blob", length=65535, nullable=false)
     */
    private $sslCipher;

    /**
     * @var string
     *
     * @ORM\Column(name="x509_issuer", type="blob", length=65535, nullable=false)
     */
    private $x509Issuer;

    /**
     * @var string
     *
     * @ORM\Column(name="x509_subject", type="blob", length=65535, nullable=false)
     */
    private $x509Subject;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_questions", type="integer", nullable=false)
     */
    private $maxQuestions = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="max_updates", type="integer", nullable=false)
     */
    private $maxUpdates = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="max_connections", type="integer", nullable=false)
     */
    private $maxConnections = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="max_user_connections", type="integer", nullable=false)
     */
    private $maxUserConnections = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="plugin", type="string", length=64, nullable=false)
     */
    private $plugin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="authentication_string", type="text", length=65535, nullable=false)
     */
    private $authenticationString;

    /**
     * @var string
     *
     * @ORM\Column(name="password_expired", type="string", nullable=false)
     */
    private $passwordExpired = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="is_role", type="string", nullable=false)
     */
    private $isRole = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="default_role", type="string", length=80, nullable=false)
     */
    private $defaultRole = '';

    /**
     * @var string
     *
     * @ORM\Column(name="max_statement_time", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $maxStatementTime = '0.000000';

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getSelectPriv()
    {
        return $this->selectPriv;
    }

    /**
     * @param string $selectPriv
     */
    public function setSelectPriv($selectPriv)
    {
        $this->selectPriv = $selectPriv;
    }

    /**
     * @return string
     */
    public function getInsertPriv()
    {
        return $this->insertPriv;
    }

    /**
     * @param string $insertPriv
     */
    public function setInsertPriv($insertPriv)
    {
        $this->insertPriv = $insertPriv;
    }

    /**
     * @return string
     */
    public function getUpdatePriv()
    {
        return $this->updatePriv;
    }

    /**
     * @param string $updatePriv
     */
    public function setUpdatePriv($updatePriv)
    {
        $this->updatePriv = $updatePriv;
    }

    /**
     * @return string
     */
    public function getDeletePriv()
    {
        return $this->deletePriv;
    }

    /**
     * @param string $deletePriv
     */
    public function setDeletePriv($deletePriv)
    {
        $this->deletePriv = $deletePriv;
    }

    /**
     * @return string
     */
    public function getCreatePriv()
    {
        return $this->createPriv;
    }

    /**
     * @param string $createPriv
     */
    public function setCreatePriv($createPriv)
    {
        $this->createPriv = $createPriv;
    }

    /**
     * @return string
     */
    public function getDropPriv()
    {
        return $this->dropPriv;
    }

    /**
     * @param string $dropPriv
     */
    public function setDropPriv($dropPriv)
    {
        $this->dropPriv = $dropPriv;
    }

    /**
     * @return string
     */
    public function getReloadPriv()
    {
        return $this->reloadPriv;
    }

    /**
     * @param string $reloadPriv
     */
    public function setReloadPriv($reloadPriv)
    {
        $this->reloadPriv = $reloadPriv;
    }

    /**
     * @return string
     */
    public function getShutdownPriv()
    {
        return $this->shutdownPriv;
    }

    /**
     * @param string $shutdownPriv
     */
    public function setShutdownPriv($shutdownPriv)
    {
        $this->shutdownPriv = $shutdownPriv;
    }

    /**
     * @return string
     */
    public function getProcessPriv()
    {
        return $this->processPriv;
    }

    /**
     * @param string $processPriv
     */
    public function setProcessPriv($processPriv)
    {
        $this->processPriv = $processPriv;
    }

    /**
     * @return string
     */
    public function getFilePriv()
    {
        return $this->filePriv;
    }

    /**
     * @param string $filePriv
     */
    public function setFilePriv($filePriv)
    {
        $this->filePriv = $filePriv;
    }

    /**
     * @return string
     */
    public function getGrantPriv()
    {
        return $this->grantPriv;
    }

    /**
     * @param string $grantPriv
     */
    public function setGrantPriv($grantPriv)
    {
        $this->grantPriv = $grantPriv;
    }

    /**
     * @return string
     */
    public function getReferencesPriv()
    {
        return $this->referencesPriv;
    }

    /**
     * @param string $referencesPriv
     */
    public function setReferencesPriv($referencesPriv)
    {
        $this->referencesPriv = $referencesPriv;
    }

    /**
     * @return string
     */
    public function getIndexPriv()
    {
        return $this->indexPriv;
    }

    /**
     * @param string $indexPriv
     */
    public function setIndexPriv($indexPriv)
    {
        $this->indexPriv = $indexPriv;
    }

    /**
     * @return string
     */
    public function getAlterPriv()
    {
        return $this->alterPriv;
    }

    /**
     * @param string $alterPriv
     */
    public function setAlterPriv($alterPriv)
    {
        $this->alterPriv = $alterPriv;
    }

    /**
     * @return string
     */
    public function getShowDbPriv()
    {
        return $this->showDbPriv;
    }

    /**
     * @param string $showDbPriv
     */
    public function setShowDbPriv($showDbPriv)
    {
        $this->showDbPriv = $showDbPriv;
    }

    /**
     * @return string
     */
    public function getSuperPriv()
    {
        return $this->superPriv;
    }

    /**
     * @param string $superPriv
     */
    public function setSuperPriv($superPriv)
    {
        $this->superPriv = $superPriv;
    }

    /**
     * @return string
     */
    public function getCreateTmpTablePriv()
    {
        return $this->createTmpTablePriv;
    }

    /**
     * @param string $createTmpTablePriv
     */
    public function setCreateTmpTablePriv($createTmpTablePriv)
    {
        $this->createTmpTablePriv = $createTmpTablePriv;
    }

    /**
     * @return string
     */
    public function getLockTablesPriv()
    {
        return $this->lockTablesPriv;
    }

    /**
     * @param string $lockTablesPriv
     */
    public function setLockTablesPriv($lockTablesPriv)
    {
        $this->lockTablesPriv = $lockTablesPriv;
    }

    /**
     * @return string
     */
    public function getExecutePriv()
    {
        return $this->executePriv;
    }

    /**
     * @param string $executePriv
     */
    public function setExecutePriv($executePriv)
    {
        $this->executePriv = $executePriv;
    }

    /**
     * @return string
     */
    public function getReplSlavePriv()
    {
        return $this->replSlavePriv;
    }

    /**
     * @param string $replSlavePriv
     */
    public function setReplSlavePriv($replSlavePriv)
    {
        $this->replSlavePriv = $replSlavePriv;
    }

    /**
     * @return string
     */
    public function getReplClientPriv()
    {
        return $this->replClientPriv;
    }

    /**
     * @param string $replClientPriv
     */
    public function setReplClientPriv($replClientPriv)
    {
        $this->replClientPriv = $replClientPriv;
    }

    /**
     * @return string
     */
    public function getCreateViewPriv()
    {
        return $this->createViewPriv;
    }

    /**
     * @param string $createViewPriv
     */
    public function setCreateViewPriv($createViewPriv)
    {
        $this->createViewPriv = $createViewPriv;
    }

    /**
     * @return string
     */
    public function getShowViewPriv()
    {
        return $this->showViewPriv;
    }

    /**
     * @param string $showViewPriv
     */
    public function setShowViewPriv($showViewPriv)
    {
        $this->showViewPriv = $showViewPriv;
    }

    /**
     * @return string
     */
    public function getCreateRoutinePriv()
    {
        return $this->createRoutinePriv;
    }

    /**
     * @param string $createRoutinePriv
     */
    public function setCreateRoutinePriv($createRoutinePriv)
    {
        $this->createRoutinePriv = $createRoutinePriv;
    }

    /**
     * @return string
     */
    public function getAlterRoutinePriv()
    {
        return $this->alterRoutinePriv;
    }

    /**
     * @param string $alterRoutinePriv
     */
    public function setAlterRoutinePriv($alterRoutinePriv)
    {
        $this->alterRoutinePriv = $alterRoutinePriv;
    }

    /**
     * @return string
     */
    public function getCreateUserPriv()
    {
        return $this->createUserPriv;
    }

    /**
     * @param string $createUserPriv
     */
    public function setCreateUserPriv($createUserPriv)
    {
        $this->createUserPriv = $createUserPriv;
    }

    /**
     * @return string
     */
    public function getEventPriv()
    {
        return $this->eventPriv;
    }

    /**
     * @param string $eventPriv
     */
    public function setEventPriv($eventPriv)
    {
        $this->eventPriv = $eventPriv;
    }

    /**
     * @return string
     */
    public function getTriggerPriv()
    {
        return $this->triggerPriv;
    }

    /**
     * @param string $triggerPriv
     */
    public function setTriggerPriv($triggerPriv)
    {
        $this->triggerPriv = $triggerPriv;
    }

    /**
     * @return string
     */
    public function getCreateTablespacePriv()
    {
        return $this->createTablespacePriv;
    }

    /**
     * @param string $createTablespacePriv
     */
    public function setCreateTablespacePriv($createTablespacePriv)
    {
        $this->createTablespacePriv = $createTablespacePriv;
    }

    /**
     * @return string
     */
    public function getSslType()
    {
        return $this->sslType;
    }

    /**
     * @param string $sslType
     */
    public function setSslType($sslType)
    {
        $this->sslType = $sslType;
    }

    /**
     * @return string
     */
    public function getSslCipher()
    {
        return $this->sslCipher;
    }

    /**
     * @param string $sslCipher
     */
    public function setSslCipher($sslCipher)
    {
        $this->sslCipher = $sslCipher;
    }

    /**
     * @return string
     */
    public function getX509Issuer()
    {
        return $this->x509Issuer;
    }

    /**
     * @param string $x509Issuer
     */
    public function setX509Issuer($x509Issuer)
    {
        $this->x509Issuer = $x509Issuer;
    }

    /**
     * @return string
     */
    public function getX509Subject()
    {
        return $this->x509Subject;
    }

    /**
     * @param string $x509Subject
     */
    public function setX509Subject($x509Subject)
    {
        $this->x509Subject = $x509Subject;
    }

    /**
     * @return int
     */
    public function getMaxQuestions()
    {
        return $this->maxQuestions;
    }

    /**
     * @param int $maxQuestions
     */
    public function setMaxQuestions($maxQuestions)
    {
        $this->maxQuestions = $maxQuestions;
    }

    /**
     * @return int
     */
    public function getMaxUpdates()
    {
        return $this->maxUpdates;
    }

    /**
     * @param int $maxUpdates
     */
    public function setMaxUpdates($maxUpdates)
    {
        $this->maxUpdates = $maxUpdates;
    }

    /**
     * @return int
     */
    public function getMaxConnections()
    {
        return $this->maxConnections;
    }

    /**
     * @param int $maxConnections
     */
    public function setMaxConnections($maxConnections)
    {
        $this->maxConnections = $maxConnections;
    }

    /**
     * @return int
     */
    public function getMaxUserConnections()
    {
        return $this->maxUserConnections;
    }

    /**
     * @param int $maxUserConnections
     */
    public function setMaxUserConnections($maxUserConnections)
    {
        $this->maxUserConnections = $maxUserConnections;
    }

    /**
     * @return string
     */
    public function getPlugin()
    {
        return $this->plugin;
    }

    /**
     * @param string $plugin
     */
    public function setPlugin($plugin)
    {
        $this->plugin = $plugin;
    }

    /**
     * @return string
     */
    public function getAuthenticationString()
    {
        return $this->authenticationString;
    }

    /**
     * @param string $authenticationString
     */
    public function setAuthenticationString($authenticationString)
    {
        $this->authenticationString = $authenticationString;
    }

    /**
     * @return string
     */
    public function getPasswordExpired()
    {
        return $this->passwordExpired;
    }

    /**
     * @param string $passwordExpired
     */
    public function setPasswordExpired($passwordExpired)
    {
        $this->passwordExpired = $passwordExpired;
    }

    /**
     * @return string
     */
    public function getisRole()
    {
        return $this->isRole;
    }

    /**
     * @param string $isRole
     */
    public function setIsRole($isRole)
    {
        $this->isRole = $isRole;
    }

    /**
     * @return string
     */
    public function getDefaultRole()
    {
        return $this->defaultRole;
    }

    /**
     * @param string $defaultRole
     */
    public function setDefaultRole($defaultRole)
    {
        $this->defaultRole = $defaultRole;
    }

    /**
     * @return string
     */
    public function getMaxStatementTime()
    {
        return $this->maxStatementTime;
    }

    /**
     * @param string $maxStatementTime
     */
    public function setMaxStatementTime($maxStatementTime)
    {
        $this->maxStatementTime = $maxStatementTime;
    }

    public function getRoles()
    {
        return null;
    }

    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials()
    {
        return null;
    }
}
