#!/bin/bash

for i in `ls *.php -1`; do
  NAME=`echo "$i" | cut -d'.' -f1`
  php $i > ../$NAME.html
done;
