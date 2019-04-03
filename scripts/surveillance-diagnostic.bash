#!/bin/bash

echo "STATUS :
"
mysqladmin -u useroptimisation -puseroptimisationpw status
echo "

VARIABLES
"
mysqladmin -u useroptimisation -puseroptimisationpw variables
