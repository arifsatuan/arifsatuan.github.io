#!/usr/bin/env bash
echo -n "Comment: "
read ans
echo $ans
git add . 
git commit -m $ans
git push origin main
hugo
cd public
git add .
git commit -m $ans
git push origin pages
