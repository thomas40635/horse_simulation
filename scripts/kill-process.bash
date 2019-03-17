#!/bin/bash

numProcess=$1
echo "$numProcess"
$(mysql -u root -prootpw;)
$(KILL "$numProcess")