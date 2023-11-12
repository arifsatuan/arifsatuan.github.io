---
title: "Git:Clone Succeeded, but checkout failed"
date: 2023-10-08T10:41:05+07:00
draft: false
description: "" 
resources:
- name: "featured-image"
src: "featured-image.jpg"
tags: ["", ""]
categories: [""]
---

Git is very handy tools for programmers. But, unfortunatelly there are some mistakes or issues when using it. Personally, I can't recall problems that I have facing. 

Today I have problem that I can clone but checkout failed, just shown at picture below
![Error not checkout](error.png)

Solution for that is very easy. 
Add command like below 
```
git clone -b main -c core.protectNTFS=false  LINK OF GITHUB
```

Shown like below:
![Error not checkout](solution.png)
