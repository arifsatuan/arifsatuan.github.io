#!/usr/bin/env bash
echo -n "Comment: "
#read ans
#echo $ans
git add .
$comment =  $RANDOM | base64 | head -c 20;
git commit -m  $RANDOM | base64 | head -c 20;
git push origin main
hugo
cd public
git add .
git commit -m $ans
git push origin pages
