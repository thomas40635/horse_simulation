Projet d'optimisation et de gestion de Bases de données

Projet réalisée dans le cadre du cours de Système d'Information et Bases de Données de M. MARTIN-NEVOT
Aix Marseille Université - 2018/2019

========================


PIZZIMENTI Sandrine

PAUL Thomas

MARTIN Laurie


Lancer une VM
--------------
  
**Login** : root 

**Mot de passe**: root

Il est possible d'utiliser VirtualBox d'Oracle pour lancer une VM:

* Lancer VirtualBox

* Cliquer sur Fichier > Importer un appareil virtuel

* Chercher le fichier .ovf correspondant à la VM "MASTER VM Debian LAMP" (et/ou la "VM SLAVE VM Debian LAMP")

* Cliquer sur importer

* La VM va s'afficher dans la liste

* Double-cliquer sur le titre pour lancer la VM


Lancer l'application 
-------------

D'abord, il faut configurer la connexion à la Base de données. 

* Lancer la VM et se connecter

* Taper ifconfig pour connaître l'adresse IP

* Ouvrir le fichier parameters.yml :
vi /var/www/html/app/config/parameters.yml

* Modifier si nécessaire le paramètre database_host avec l'adresse ip de la VM.

* Enregistrer (ESC + :wq + entrée)

Ensuite, ouvrir un navigateur depuis la machine hôte :

* Taper l'adresse dans la barre du navigateur

* Entrer, l'application se lance


Lancer la réplication
-------------

La réplication nécessite de vérifier la configuration avant de pouvoir l'utiliser :

* Lancer les VM "MASTER VM Debian LAMP" et "SLAVE VM Debian LAMP"

**Sur le MASTER**
* Vérifier l'adresse IP avec ifconfig

* Taper vim /etc/mysql/my.cnf

* Modifier, si nécessaire, la valeur de la variable bind-address avec l'adresse IP de la machine.

* Relancer le serveur mysql avec :

/etc/init.d/mysql stop puis
/etc/init.d/ mysql start

* Se connecter à mysql avec l'utilisateur replication : **mysql -u replication -preplicationpw**

* Taper SHOW MASTER STATUS;

* Retenir les information File et Position, elles serviront pour la configuration du SLAVE. Les autres doivent rester vides.

**Sur le SLAVE**

* Vérifier l'adresse IP avec ifconfig

* Taper vim /etc/mysql/my.cnf

* Modifier, si nécessaire, la valeur de la variable bind-address avec l'adresse IP de la machine

* Relancer le serveur mysql avec :

**/etc/init.d/mysql stop** puis
**/etc/init.d/ mysql start**

* Se connecter à mysql avec l'utilisateur replication : **mysql -u replication -preplicationpw**

* Taper : STOP SLAVE;

* Taper la commande suivant en remplaçant les données pour  MASTER_LOG_FILE avec les infos File du MASTER et MASTER_LOG_POS avec les infosnPosition du MASTER. Puis l'adresse IP de MASTER_HOST doit correspondre à l'adresse IP du MASTER. Cela donne la commande suivante :

CHANGE MASTER TO MASTER_HOST='**192.168.xxx.xxx**',
MASTER_USER='replication', 
MASTER_PASSWORD='replicationpw', 
MASTER_LOG_FILE='**File**', 
MASTER_LOG_POS=**Position** ;

* Taper START SLAVE;

* Taper SHOW SLAVE STATUS\G pour afficher les informations. Il ne devrait pas y avoir d'erreur.

* La réplication fonctionne. Il est possible de la tester en ajoutant des données sur la machine MASTER

Les comptes pour l'appli
-------------
Ils ont tous les mêmes droits :

**login** : admin, **password** : adminpw

**login** : useroptimisation, **password** : useroptimisationpw

**login** : automate, **password** : automatepw

**login** : dev, **password** : devpw

**login** : moderator, **password** : moderatorpw

**login** : specialist, **password** : specialistpw

**login** : adminshow, **password** : adminshowpw

**login** : editor, **password** : editorpw

**login** : client, **password** : clientpw


Les URI utilisées
------------

**phpMyAdmin** :

192.168.xxx.xxx/phpmyadmin

**Page d'administration** :

192.168.xxx.xxx/admin/dashboard

**Actions sur le serveur** :

192.168.xxx.xxx/server

**Politique de surveillance** :

192.168.xxx.xxx/surveillance
