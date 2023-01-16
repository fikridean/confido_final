# Confido - Sale of Airline Tickets

*Place where you can easily order airlines tickets for your travel plans*

## 📚 About
Platform [`Confido`](https://confido.fikridean.my.id/) adalah platform yang digunakan untuk memesan tiket pesawat dalam rencana perjalanan anda.
Kunjungi website `Confido` untuk mengetahui lebih lanjut, Silahkan klik [Confido](https://confido.fikridean.my.id/).

## 🧰 Tools
* PHP versi >8.X.X (Disarankan)
* Composer
* DBMS - MySQL

Apabila terjadi `error` saat proses instalasi, silahkan update PHP dan Composer ke versi yang sudah disarankan.

## 💫 Feature
* Platform dapat memasukkan dan menampilkan data-data pribadi tiap *user*.
* Platform dapat memberikan kemudahan *user* dalam memesan tiket yang *available*
* Platform dapat memberikan fitur percakapan berupa *chat* antara *user* dengan *role* pelanggan dan *admin*
* Platform dapat memberikan kemudahan bagi *user* dengan *role admin* dalam fitur CMS ketika *admin* berusaha untuk menambahkan, mengubah, atau menghapus data-data terkait maskapai, kelas maskapai, rute penerbangan, dan metode penerbangan.
* Terdapat beberapa menu yang dapat dipilih ketika *user* sudah *login* dan memverifikasi akun gmail, yaitu:
  - *Dashboard*
  - Daftar Tiket
  - Buat Pesanan
  - Riwayat
  - *Users*
  - Maskapai
  - Kelas Maskapai
  - Rute Penerbangan
  - Metode Pembayaran

## 📜 Technical
* Platform menggunakan *framework* Laravel dalam pengembangan aplikasi berbasis *web*
* Platform terintegrasi dengan sistem `authentication` dari laravel
* Total jumlah tabel yang digunakan pada project ini sebanyak 21 tabel
* Platform menggunakan library `Bootstrap` untuk bagian *front-end*

## 🛠️ Development
### Pre-Requirement
- Sebelum menggunakan platform, terlebih dahulu perlu menginstall bahasa pemrograman `PHP` dan `Composer`

### Add Remote via GIT
> #### Add Remote to Folder - [GIT Confido Link](https://github.com/FikriDean/confido_final.git)
Jalankan perintah git untuk menyalin project ke local system
```sh
git remote add talent https://github.com/FikriDean/confido_final.git
```

### Download Via ZIP
#### Atau download versi ZIP dibawah ini
[Download ZIP Confido](https://github.com/FikriDean/confido_final/archive/refs/heads/main.zip)

### Confido Project Setup
#### Create `.env` File
- Jika belum terdapat file .env pada projek, Gunakan file .env.example untuk membuat file `.env` baru. Silahkan atur sesuai keperluan.
```sh
cp .env.example .env
```

#### `.env` File Configuration
- Konfigurasi Database di file `.env`

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=confido
DB_USERNAME=root
DB_PASSWORD=password
```

- Konfigurasi `APP` di file `.env` (Opsional)

```sh
APP_NAME=Confido
APP_ENV=local
APP_KEY=base64:Oi6PGVLIZlDebARvU6HyrBT1E3jBWyH5IfOsgGYnFds=
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000/
```

- Jalankan perintah `generate key`

```sh
php artisan key:generate
```

#### Make Database
- Buat `database` dengan nama yang sesuai dengan nama database yang ada di file `.env`.

#### Migration and Database Seeder
- Gunakan database seeder yang terdapat di project `confido` ini. Jalankan perintah berikut
```sh
php artisan migrate:fresh --seed
```

#### Run Application
- Jalankan perintah untuk menjalankan aplikasi di local system
```sh
php artisan serve
```
