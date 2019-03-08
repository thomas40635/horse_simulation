#!/bin/bash

echo "STATUS :
"
mysqladmin -u root -proot status
echo "
VARIABLES
"
mysqladmin -u root -proot variables
