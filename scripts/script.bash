#!/bin/bash

table=$(cat /var/lib/mysql/horse_simulation/ | grep *.MYI)
if  [ ! -z "$tables" ]
    then
		# Vérifier les tables
		# -d donne les informations sur la table
		# -c vérifie si la table n'est pas corrompue
        verifTbales=$(myisamchk -d -c /var/lib/mysql/horse_simulation/*.MYI)
        echo $verifTbales

		# Optimiser les tables
		# -a optimise les tables
		# -s trie l'arbre des index
		optimiseTables=$(myisamchk -a -s /var/lib/mysql/horse_simulation/*.MYI)
		echo $optimiseTables

		# Défragmenter les tables
		# -r répare et défragmente les tables
		# -e vérifie de manière plus approfondie
		DefragTables=$(myisamchk -e -r /var/lib/mysql/horse_simulation/*.MYI)
		echo $DefragTables
    else
		echo "Il n'y a pas de fichier myisam dans la base."
fi