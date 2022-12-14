# Fisika 12 - Medan Magnet 1

### 1. Praktikum 
**Praktikum Gaya Lorentz**
{{< admonition abstract "Alat dan Bahan" >}}
1. magnet U atau dua buah magnet Batang
2. Siapkan alumunium foil sebagai penghantar (lebar 3-5mm)
3. Catu daya atau _power supply_ (PS)
4. Resistor (rheostat)
5. Amperemeter 
6. Kabel secukupnya
7. Kompas, kertas dan serbuk besi
{{< /admonition >}} 

{{< admonition note "Langkah Kerja" >}}
1. **Perc 1:** Susun peralatan seperti berikut, pastikan arus mencapai `3A`, lalu matikan catu daya. Jangan menyalakan PS terlalu lama.
![rangkaian](rang.png "Skema rangkaian")
2. Sebarkan atau serbuk besi setipis dan sedekat mungkin dengan kabel. Nyalakan PS, amati → gambar → matikan PS 
3. Letakkan kompas di salah satu titik (kiri, kanan, depan, blkg), lalu nyalakan catu daya → amati perubahan arahnya → matikan PS. 
4. Ulangi langkah 3 dengan lokasi kompas yang berbeda
5. Simpulkan dalam tabel laporan
6. **Perc 2:** Susun peralatan seperti gambar, pastikan arus `3A` lalu matikan PS. 
![rangkaian](rangkaian.png "Aluminium Foil")
7. Letakkan magnet di posisi seperti gambar berikut. Nyalakan PS → amati → gambar → matikan PS
![rangkaian](skema2.png "Posisi magnet")
8. Ubahlah posisi magnet **atau** ubah arah arus, amati kembali seperti no 7
9. Gabungkan dengan kelompok lain sehingga membentuk gambar berikut. Nyalakan PS → amati → gambar → matikan PS.
![rangkaian](rangkaian2.png "susunan 2 kawat")
{{< /admonition >}} 

{{< admonition bug "Laporan">}}
1. Gambar rangkaian utama (lihat no 1)
2. Penggambaran arah arus, medan dan gaya menggunakan koordinat 3D (tidak perlu x,y,z)
 ![gambar](coord.png "koordinat 3D")
3. Tulis kesimpulan dalam tabel 
| No | Hasil pengamatan  | Sketsa gambar | Vektor |
|----|-------------------|---------------|--------|
| 1  | _berisi deskripsi_|               |        |
| 2  |                   |               |        |
| 3  |                   |               |        |

4. Simpulkan apakah arah kombinasi $ i, B, F$ sudah sesuai dengan aturan tangan kanan?

{{< /admonition >}}
### 2. Simak bacaan
**Sensor Hall dan Aplikasinya**

Efek tegangan Hall awalnya ditemukan oleh Edwin Hall pada tahun 1879. Efek hall disebabkan sifat arus yang melalui suatu konduktor. Teori ini akhirnya digunakan pada berbagai bidang, misalnya sensor arus, sensor tekanan, sensor dan sensor aliran fluida, dsb. Penemuan ini lah yang sering dikenal sebagai sensor medan magnet atau sensor efek Hall, atau dikenal _Hall Effect sensor_. 

Efek Hall adalah munculnya perbedaan tegangan pada penghantar yang tegak lurus antara arus dan medan magnet. Pemahaman mengenai efek Hall dapat dilihat pda ilustrasi berikut
![skema Hall-effect](skema.png "Efek Hall")
![aturan right hand](righthand.png "aturan Gaya Lorentz tangan kanan")
   Elektron mengalir dari negatif ke positif. Artinya ada arus dari positif ke negatif. Agar lebih mudah dan konsisten dengan ilustrasi, tidak perlu memperhatikan arah arus. Cukup lihat gerakan muatan negatif (elektron). Medan magnet $ B $ dari kutub utara menuju kutub selatan. Dengan menggunakan aturan tangan kanan untuk muatan negatif maka timbul gaya ke arah atas. Sehingga elektron terdorong ke atas. Akibatnya bagian atas lebih **negatif** dan bagian bawah menjadi kutub  **positif**. Inilah yang menyebabkan timbul tegangan-Hall (perhatikan gambar)

Pada umumnya efek-Hall dan tegangan-Hall dijadikan dasar dalam pembuatan sensor magentik. Elemen atau lempeng logam konduktor diganti dengan semikonduktor karena memiliki densitas yang lebih rendah. Adapun semikonduktor yang sering digunakan antara lain Indium Atimonide (InSb), Galium arsenide (GaAs), dan Indium arsenide (InAs). InSb adalah semikonduktor paling sensitif, sedangkan GaAs memiliki kestabilan paling tinggi terhadap suhu. Indium arsenide (InAs) secara empiris memiliki keseimbangan dari sensitivitas dan kestabilan terhadap suhu. Perhatikan gambar di bawah menunjukkan grafik perbandingan ketiga bahan semikonduktor.
![konduktor](konduktor.png " ")

  Tegangan-Hall $ V_H $ bernilai proporsional atau sebanding dengan kekuatan medan magnet yang menembus penghantar tersebut. Besarnya tegangan-Hall bisa saja sangat kecil, dalam orde microvolts, bahkan saat magnet yang sangat kuat didekatkan. Oleh karena itu perangkat yang menggunakan sifat efek-Hall disertai penguat DC (amplifier), histerisis, dan pengatur tegangan untuk memperbaiki sensitivitas dan output dari perangkat tersebut.

Aplikasi efek-Hall sebagai sensor antara lain
- sebagai _switch_ atau saklar
- pendeteksi tekanan (tombol pada keyboard)
- pengukur kecepatan pada putaran (mesin atau roda)
- deteksi layar laptop / handphone terbuka atau tertutup
- pengukuran arus tanpa sentuh (contactless)
- dan sebagainya

Sensor Hall tersedia dalam berbagai bentuk, dari IC (SMD) maupun komponen DIP. Harganya juga bervariasi dari yang paling murah hingga paling mahal. Secara umum sensor hall yang ada di pasaran Indonesia seperti pada gambar.
![sensor](sensor.gif "Efek Hall sebagai Switch")

{{< admonition note "Projek sensor medan magnet">}}
1. Dilakukan dengan anggota 5 orang
2. Cari bahan semurah mungkin, boleh menggunakan komponen bekas. 
3. Projek dikumpulkan dalam wujud fisik, disertai esai yang mencakup (Judul, alat-alat atau komponen, fungsi dan cara kerja alat)
4. Alternatif selain [sensor hall](https://www.tokopedia.com/search?navsource=&ob=3&pmax=20000&srp_component_id=02.01.00.00&srp_page_id=&srp_page_title=&st=product&q=sensor%20hall%20modul)  adalah [reed sensor](https://www.tokopedia.com/search?navsource=&ob=3&pmax=10000&srp_component_id=02.01.00.00&srp_page_id=&srp_page_title=&st=product&q=sensor%20reed). 
5. Gunakan [breadboard](https://www.tokopedia.com/find/breadboard) dalam penyusunan prototype
6. Contoh pengaplikasian ada di [sini](https://www.youtube.com/watch?v=6GGJOEmvulY)
{{< /admonition >}}
### 3. Simpulan
[Rekap Nilai](https://docs.google.com/spreadsheets/d/1NnGyj_bQnHlSkr3qZc-ULXL6HINCTDyS3G9jnkcVUZ8/edit?rm=minimal)
{{< rawhtml >}}
<link rel="stylesheet" href="/css/form.css">
<script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" 
onload="if(submitted) {window.location='/thankyou';}"></iframe>

<form action="https://docs.google.com/forms/d/e/1FAIpQLSc4_IDUPGYGTHQ0g0GgBTc3sGdQSbMA-Sbr02SijiO-qT_EAg/formResponse" 
method="post" target="hidden_iframe" onsubmit="submitted=true;">
</form>
<form action="https://docs.google.com/forms/d/e/1FAIpQLSc4_IDUPGYGTHQ0g0GgBTc3sGdQSbMA-Sbr02SijiO-qT_EAg/formResponse" method="post" target="hidden_iframe" onsubmit="submitted=true">
  <label>NIS</label>
        <input type="text" pattern="^[0-9]{5}$" placeholder="5 digit NIS" class="form-input" name="entry.472610624" required title="Harus 5 digit atuh Neng!">

   <label>Resume</label>
        <textarea rows="8" placeholder="ketikkan minimal 2 paragraf kegiatan praktikum hari ini dihubungkan dengan teks bacaan di atas &#10; &#10; Paragraf 1 kesimpulan praktikum &#10; &#10; Paragraf 2 komentar mengenai teknologi terbaru" class="form-input" name="entry.1370131877" ></textarea>

   <button type="submit">Send</button>
</form>
{{< /rawhtml >}}

