#!/bin/bash

echo "STATUS :
"
mysqladmin -u root -prootpw status
echo "
VARIABLES
"
mysqladmin -u root -prootpw variables
