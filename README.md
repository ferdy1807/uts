<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
Setelah didownload extract kedalam folder htdocs (menyesuaikan folder tujuan)

Langkah-langkah ;

1. Masuk ke dalam directory uts dan jalankan di command prompt / text editor
2. composer install
3. php artisan key:generate
4. Buat database bernama uts(kecil semua)

5. copy file .env.example (folder uts) lalu rename menjadi .env

6. ubah isian file .env menjadi

-   DB_DATABASE = uts
-   DB_USERNAME = root (menyesuaikan konfigurasi phpmyadmin)
-   DB_PASSWORD = (kosong/menyesuaikan konfigurasi phpmyadmin)
-   masuk ke dalam folder uts kembali dan jalankan command prompt

7. Jalankan syntax 
* php artisan migrate
* php artisan db:seed
9. jalankan aplikasi
* php artisan serve

10.   buka di browser (pilih)
    - http://localhost:8000/
    - http://127.0.0.1:8000/
