#!/usr/bin/env bash
echo -n "Comment: "
#read ans
#echo $ans
git add .
#comment =  $RANDOM | base64 | head -c 20;
git commit -m date
git push origin main
hugo
cd public
git add .
git commit -m date
git push origin pages
