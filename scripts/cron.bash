#!/bin/bash

tables=$(ls /var/lib/mysql/horse_simulation/ | grep .MYI)
date=$(date +%D)
$(echo "$date" >> /tmp/log-optimisation.log)
if  [[ ! -z "$tables" ]]
    then
		# Vérifier les tables
		# -d donne les informations sur la table
		# -c vérifie si la table n'est pas corrompue
        verifTbales=$(myisamchk -d -c /var/lib/mysql/horse_simulation/*.MYI)
        $(echo "$verifTbales" >> /tmp/log-optimisation.log)


		# Optimiser les tables
		# -a optimise les tables
		# -s trie l'arbre des index
		optimiseTables=$(myisamchk -a -s /var/lib/mysql/horse_simulation/*.MYI)
		$(echo "$optimiseTables" >> /tmp/log-optimisation.log)

		# Défragmenter les tables
		# -r répare et défragmente les tables
		# -e vérifie de manière plus approfondie
		defragTables=$(myisamchk -e -r /var/lib/mysql/horse_simulation/*.MYI)
		$(echo "$defragTables" >> /tmp/log-optimisation.log)

        #On recharge les tables
        mysqladmin -u automate -pautomatew flush-tables
        mysqladmin -u automate -pautomatew  flush-tables
        mysqladmin -u automate -pautomatew  flush-logs
        mysqladmin -u automate -pautomatew  refresh
        mysqladmin -u automate -pautomatew  flush-status
        mysqladmin -u automate -pautomatew  flush-privileges
        mysqladmin -u automate -pautomatew  flush-hosts
    else
		echo "Il n'y a pas de fichier myisam dans la base."
fi
