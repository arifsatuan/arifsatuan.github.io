---
title: "Ajax pada PHP Codeigniter"
date: 2023-07-01T11:51:52+07:00
draft: false
description: "ini" 
resources:
- name: "featured-image"
src: "featured-image.jpg"
tags: ["php", "javascript"]
categories: ["php"]
---

Saat menggunakan ajax jquery pastikan beberapa
1. controler respon (JSON)
2. jquery telah diload `<script src="">`
3. membuat form yang sesuai

### 1. Membuat database 



### 2. Membuat controller dan model
Controller yang akan dibuat ada 2 (1. default view, 2. Merespon ajax)
```php

```



### 3. Membuat view




Berikut minimal form
```html
<form id="myForm">
  <label for="nama">Nama:</label>
  <input type="text" id="nama" name="nama"><br><br>
  <label for="kode">Kode:</label>
  <input type="text" id="kode" name="kode"><br><br>
  <button type="button" id="submitButton">Submit</button>
</form>
<div id="result"></div>

```
```js
$(document).ready(function() {
  $('#submitButton').click(function() {
    var namaValue = $('#nama').val();
    var kodeValue = $('#kode').val();

    $.ajax({
      url: "<?= base_url('nama_contoller')?>",
      type: 'POST',
      data: {
        nama: namaValue,
        kode: kodeValue
      },
      success: function(response) {
        $('#result').html(response);
      },
      error: function(xhr, status, error) {
        console.log(error);
      }
    });
  });
});
```