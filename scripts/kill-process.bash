#!/bin/bash

numProcess=$1
echo "$numProcess"
$(mysql -u useroptimisation -puseroptimisationpw;)
$(KILL "$numProcess")