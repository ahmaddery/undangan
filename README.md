# Website Undangan dengan CodeIgniter 4

## Apa itu CodeIgniter?

CodeIgniter adalah suatu framework web PHP full-stack yang ringan, cepat, fleksibel, dan aman.
Informasi lebih lanjut dapat ditemukan di [situs resmi CodeIgniter](https://codeigniter.com).

Repositori ini berisi starter aplikasi CodeIgniter 4 yang dapat digunakan sebagai dasar untuk membuat website undangan.

## Tentang Proyek

Proyek ini adalah sebuah aplikasi website undangan yang dapat membantu dalam mengelola undangan acara khusus Anda. Dengan menggunakan CodeIgniter 4 sebagai dasar, proyek ini memiliki keamanan yang baik dan memisahkan komponen dengan baik untuk memudahkan pengembangan lebih lanjut.

Proyek ini memungkinkan pengguna untuk membuat undangan acara, mengelola tamu undangan, dan melacak konfirmasi kehadiran.

## Instalasi & Pembaruan

Untuk menggunakan proyek ini, lakukan langkah-langkah berikut:

1. Clone repositori: `git clone https://github.com/username/repo.git`
2. Masuk ke direktori proyek: `cd repo`
3. Install dependencies: `composer install`
4. Salin `env` menjadi `.env` dan sesuaikan konfigurasi yang diperlukan.
5. Lakukan migrasi database: `php spark migrate`
6. Jalankan aplikasi: `php spark serve`

Untuk pembaruan, gunakan perintah berikut:

- Perbarui proyek: `git pull origin master`
- Perbarui dependencies: `composer update`

## Setup

Setelah instalasi, sesuaikan file `.env` untuk konfigurasi aplikasi Anda, terutama baseURL
dan pengaturan database.

## Perubahan Penting pada index.php

`index.php` tidak lagi berada di root proyek! Ia telah dipindahkan ke dalam folder *public*,
untuk keamanan yang lebih baik dan pemisahan komponen.

Pastikan server web Anda dikonfigurasi untuk menunjuk ke folder *public* proyek Anda, dan
bukan ke root proyek. Praktik yang lebih baik adalah dengan mengkonfigurasi virtual host untuk menunjuk ke sana.

## Manajemen Repositori

Untuk melaporkan bug, permintaan fitur, dan diskusi lebih lanjut, gunakan GitHub Issues pada repositori ini. Kami sangat mengapresiasi kontribusi dan partisipasi dari komunitas.

## Persyaratan Server

Versi PHP 7.4 atau lebih tinggi diperlukan, dengan pemasangan ekstensi berikut:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Pastikan ekstensi berikut diaktifkan di PHP Anda:

- json (diaktifkan secara default - jangan nonaktifkan)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) jika Anda berencana menggunakan MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) jika Anda berencana menggunakan pustaka HTTP\CURLRequest
