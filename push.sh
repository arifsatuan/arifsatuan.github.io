#!/usr/bin/env bash
echo -n "Comment: "
#read ans
#echo $ans
tgl =`date +"%d-%b-%Y %H:%M"`
git add .
#comment =  $RANDOM | base64 | head -c 20;
git commit -m tgl
git push origin main
hugo
cd public
git add .
git commit -m tgl
git push origin pages
