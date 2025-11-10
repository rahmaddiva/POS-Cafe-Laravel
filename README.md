<h1 align="center">☕ Sistem POS Cafe — Laravel 12</h1>

<p align="center">
  A modern Point of Sale (POS) system built with <b>Laravel 12</b> & <b>Jetstream (Livewire)</b>  
  for managing cafe menus, orders, and transactions efficiently.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-ff2d20?style=flat-square&logo=laravel" />
  <img src="https://img.shields.io/badge/PHP-8.2%2B-777bb3?style=flat-square&logo=php" />
  <img src="https://img.shields.io/badge/MySQL-Database-blue?style=flat-square&logo=mysql" />
  <img src="https://img.shields.io/badge/License-MIT-green?style=flat-square" />
</p>

---

## 🌟 Tentang Proyek

**Sistem POS Cafe** adalah aplikasi kasir sederhana berbasis web yang membantu pengelolaan transaksi, menu, meja, dan laporan penjualan di cafe.  
Dibangun menggunakan **Laravel 12** dengan **Jetstream (Livewire)** untuk kemudahan autentikasi dan manajemen data real-time.

---

## 🚀 Fitur Utama

### 👤 Autentikasi & Role
- Login, Register, Logout
- Role-based Access: **Admin** & **Kasir**
- Redirect otomatis berdasarkan role pengguna

### 🍽️ Manajemen Menu
- CRUD menu makanan & minuman
- Upload foto menu
- Kelola harga dan stok

### 🪑 Manajemen Meja
- Nomor meja
- Status meja (kosong / digunakan)

### 💵 Transaksi Penjualan
- Pemesanan menu per meja
- Hitung total otomatis
- Simpan transaksi dan cetak struk

### 📊 Laporan
- Laporan penjualan harian & bulanan
- Ringkasan omzet

---

## 🧰 Teknologi yang Digunakan

| Komponen | Teknologi |
|-----------|------------|
| Framework | Laravel 12 |
| Frontend | Blade + TailwindCSS |
| Autentikasi | Jetstream (Livewire) |
| Database | MySQL / MariaDB |
| Bahasa | PHP 8.2+ |
| Build Tools | Vite + NPM |

---

## ⚙️ Instalasi & Setup

1. **Clone Repository**
   ```bash
   git clone https://github.com/rahmaddiva/pos_cafe.git
   cd pos_cafe
2. **Install Dependencies**
   ```bash
   npm install 
3. **Run Development Server**
      npm run dev
4. Copy File .env


