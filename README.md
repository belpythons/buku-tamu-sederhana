# buku-tamu-rumah-sakit

SOAL:
Berikan saya sebuah sistem pendaftaran tamu dengan design simple agak dapat menjangkau semua kalangan yang dapat terdata dan tertampil per datanya seperti bentuk laporan

program simple yang mengadopsi html, css, php, dan mysql dan beberapa elemen kecil javascript dalam bootstrap
saya menggunakan bootsatrap 5 dan mendesign nya agar dapat user friendly dan flexible di multidevice
dalam penggunaan apache menggunakan xampp utk menyambungkan pada phpmyadmin juga

cara menjalankan
1. jalankan xampp dan start apache + mysql
2. setting database pada phpmyadmin dengan nama rumahsakit
3. buat table dalam database (rumahsakit) bernama buku_tamu 

CREATE TABLE buku_tamu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    pesan TEXT NOT NULL,
    waktu TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


4. masukkan file berikut dalam C:\xampp\htdocs
5. run website menggunakan browser apapun dnegan link:
   http://localhost/buku_tamu_rumahsakit/index.html
