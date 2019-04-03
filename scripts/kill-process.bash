#!/bin/bash

numProcess=$1
echo "Kill $numProcess
"
mysql -u useroptimisation -puseroptimisationpw;
$(KILL "$numProcess")