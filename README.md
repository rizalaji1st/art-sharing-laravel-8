<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Cara Clone Project

- Install composer terlebih dahulu
- Clone seperti biasa
- Masuk ke direktori hasil clone menggunakan terminal/powershell
- masukan perintah $ composer install
- masukan perintah $ npm install
- jika perintah npm tidak bisa dilakukan, install node js terlebih dahulu
- copy .env.example menjadi .env
- setting env agar bisa terhubung dengan database production
- masukan perintah $ php artisan key:generate
- masukan perintah $ php artisan migrate

## Cara Melakukan Input Data Dummy Ke Database

- Pastikan seeder sudah ada / sudah dibuat
- Pastikan .env sudah diatur
- Masuk ke direktori hasil clone pada cmd, nyalakan database
- Buat nama database sesuai pada .env
- Masukkan perintah php artisan db:seed pada cmd
- Jika ingin melakukan seeding per tabel, gunakan perintah php artisan db:seed --class=namaSeederTabel
