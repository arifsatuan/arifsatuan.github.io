---
title: "Cara Membuat Website Hugo"
date: 2022-10-06T09:56:48+07:00
draft: false
---

## Persiapan
Membuat website menggunakan Hugo wajib bisa menggunakan terminal. Bisa juga pelajari dan install [chocolatey](https://chocolatey.org/install). Jika chocolatey sudah terinstall, buka terminal dalam mode administrator lalu ketik berikut
```bash
choco install hugo-extended
```
atau bagi pengguna linux bisa download di [github.com/gohugo/hugo](https://github.com/gohugoio/hugo) lalu download release dengan nama `hugo_extended_0.104.3_linux-amd64.deb`. Setelah didownload, masuk ke folder tempat download lalu perintahkan 
```bash
sudo dpkg -i hugo_extended_0.104.3_linux-amd64.deb
```
Pastikan bahwa hugo telah terinstall 
```bash
hugo version
```
## Membuat Website Pertama
Misalkan website pertama kita adalah `catatan`, maka buat perintah
```bash
hugo new site catatan
```
Lalu akan muncul folder catatan, masuk ke dalam folder tersebut lalu buat perintah untuk mengunduh tema, misal [PaperMod](https://adityatelange.github.io/hugo-PaperMod)
```bash
cd catatan
git clone https://github.com/adityatelange/hugo-PaperMod themes/PaperMod --depth=1
```
Lalu buat konfigurasi awal dengan memasukkan tema di file `config.yml` atau `config.toml`. Baca pula perbedaan [.yaml dan .toml](https://gohugo.io/getting-started/configuration/) isikan variabel

```yml
theme: "PaperMod"
```
Lalu buat 1 post baru dengan fungsi 
```bash
hugo new post/postpertama.md
nano content/post/postpertama.md
```

Pastikan ubah `draft : true` menjadi `draft : fasle`. Lalu jalankan server Hugo
```bash
hugo server
```
Buka browser dan masukkan alamat `http://localhost:1313` akan muncul website anda
![Tampilan Hugo](website1.png)
## Upload ke Github
Pastikan sudah memiliki akun github dan membuat 1 repositori. Misal repositori dengan nama `catatan` maka gunakan git untuk deploy
```bash
git add .
git commit -m "initial" 
git branch -M main 
git remote add origin https://github.com/arifsatuan/links.git
git push -u origin main
```


