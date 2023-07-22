---
title: "Custom Nama Lengkap PHP dan Javascript"
date: 2023-07-22T11:22:50+07:00
draft: false
description: "" 
resources:
- name: "featured-image"
src: "featured-image.jpg"
tags: ["", ""]
categories: [""]
---
Penggunaan nama lengkap di Indonesia pada beberapa keadaan mungkin akan sangat merepotkan. Misalkan saat membuat nama pada sertifikat atau kartu anggota dengan *space* yang terbatas.

Apabila ditampilkan secara dinamis menggunakan PHP atau javascript, hal ini bisa diatasi dengan elegan. Alur logika yang bisa dipahami kurang lebih seperti ini
1. Menghitung jumlah karakter yang dibutuhkan
2. Apabila jumlah kata pertama dan kedua lebih dari ketetapan, cukup kata pertama dan initial di kata kedua

Mulai dengan `PHP`, dengan variabel nama `$name` 
```php
$words = explode(' ', $name);
$reducedName = '';
$maxstring = 22; 
$variations  = array("Muhammad", "Moechammad", "Muhamad", "Moh.", "Moech.", "Muhammad", "Mochamad","Mochammad");

if (strlen($name) <= $maxstring) {
    $reducedName = $name;
} else { 

    if (in_array(strtolower($words[0]), array_map('strtolower', $variations), true)) 
    {$reducedName = "M.";}
    else{
        $reducedName = $words[0];
    }
    $i = 1;
    while ($i < count($words) && strlen($reducedName . ' ' . $words[$i]) <= $maxstring) {
        $reducedName .= ' ' . $words[$i];
        $i++;
    }
    if ($i < count($words)) {
        // mengitung nama + inisial setiap kata
        $reducedName .= ' ' . substr($words[$i], 0, 1) . '.';
        $i++;
        // Memastikan setiap kata tertulis
        while ($i < count($words)) {
            // Setiap kata diganti dengan .
            $reducedName .= ' ' . substr($words[$i], 0, 1) . '.';
            $i++;
        }
    }
}

```
```php
$name = 'Muhammad Raden Arjuna Mencari Cinta Petang Malam Kerajaan'
echo $reducedName  // output: M. Raden Arjuna M. C. P. M. K. 
``` 
