---
title: "Mailmerge Eksport Ke PDF"
date: 2022-10-15T13:15:20+07:00
draft: false
description: "" 
resources:
- name: "featured-image"
  src: "featured-image.jpg"
tags: ["notes", "script"]
categories: ["notes"]
---
### 1. Membuat Dokumen Template 
Langkah pertama adalah membuat dokumen template dengan membuat dua buah dokumen yakni word dan excel 
1. rapor.docm (documen dengan makro)
2. data.xlsx 
![word template](word-s.png "contoh template word")
![save as docm](saveas-s.png "menyimpan file versi .docm")

### 2. Siapkan data 
Langkah selanjutnya adalah menyiapkan data sesuai dengan kolom pada tabel yang akan diisi. Bisa juga sebaliknya, sesuaikan template dengan kolom data yang akan ditampilkan. 
![excel](excel-s.png "tampilan data di sheet nilai")
Simpan data dalam folder yang sama agar memudahkan mencarinya.
{{< admonition type=tip title="Penting"  >}}
Penamaan File jangan ada spasi, gantikan dengan under score atau strip
```
rapor-ganjil.docm
rapor_ganjil.docm
```
{{< /admonition >}}

### 3. Menambahkan mail merge
Tambahkan list data dengan menggunakan menu mailing list
```
Klik Mailings -> Select Recipients -> Use An Existing List 
```
![ mailing list](mailing-s.png "menu mailing list")

Insert Merge Field sesuai isi 
![ mailing list](mailing2-s.png "Masukan kolom yang sesuai")

Preview Result untuk memastikan bahwa tidak ada yang tertukar

### 4. Menambahkan script 
Melakukan save as pdf atau print as pdf secara manual satu per satu akan membutuhkan banyak waktu dan tenaga, oleh karena itu kita gunakan bantuan script dengan menggunakan tombol `Atl F11`, lalu copy berikut
```basic
Option Explicit
'//Lookasi file akan disave dan lokasi excel
Const FOLDER_SAVED As String = "C:\rapor\"
Const SOURCE_FILE_PATH As String = "C:\rapor\data.xlsx"
'//Nama Berdasarkan kolom tabel
Const NAMA_DEPAN As String = "kelas"
Const NAMA_BELAKANG As String = "nama"
'// Nama Sheet
Const NAMA_SHEET As String = "[nilai$]"


Sub Save_AS_PDF()
Dim MainDoc As Document, TargetDoc As Document
Dim dbPath As String
Dim recordNumber As Long, totalRecord As Long

Set MainDoc = ActiveDocument
With MainDoc.MailMerge
        '// masukkan FROM [namasheet$]
       .OpenDataSource Name:=SOURCE_FILE_PATH, sqlstatement:="SELECT * FROM " & NAMA_SHEET
        totalRecord = .DataSource.RecordCount

        For recordNumber = 1 To totalRecord
            With .DataSource
                .ActiveRecord = recordNumber
                .FirstRecord = recordNumber
                .LastRecord = recordNumber
            End With
            .Destination = wdSendToNewDocument
            .Execute False
            
            Set TargetDoc = ActiveDocument
            '// TargetDoc.SaveAs2 FOLDER_SAVED & .DataSource.DataFields("Nama").Value & ".docx", wdFormatDocumentDefault
            TargetDoc.ExportAsFixedFormat FOLDER_SAVED & .DataSource.DataFields(NAMA_DEPAN).Value & "_" & .DataSource.DataFields(NAMA_BELAKANG).Value & ".pdf", exportformat:=wdExportFormatPDF
            TargetDoc.Close False
            
            Set TargetDoc = Nothing
                    
        Next recordNumber

End With

Set MainDoc = Nothing
End Sub


```
Lalu run hingga selesai proses save to pdf
![running script](run-s.png "tampilan VBA script")
![hasil akhir](hasil-s.png "Hasil Akhir File per nama")

<kbd>:(fa-brands fa-windows):</kbd> + <kbd>F11</kbd> adalah `shortcut` membuka visual basic application.



