# 🎫 Secure Ticketing System - Bootcamp Secure Coding

Sistem ticketing untuk pembelajaran secure coding dengan berbagai lab keamanan.

## ✅ Status Setup

**Setup sudah selesai!** Aplikasi siap digunakan.

## 🚀 Cara Menjalankan

```bash
# 1. Jalankan server Laravel
php artisan serve

# 2. Buka browser
# http://localhost:8000
```

## 👤 Login dengan Akun Demo

Gunakan salah satu akun berikut (password: **password**):

```
Admin:  admin@wikrama.sch.id
Staff:  staff@wikrama.sch.id  
User:   budi@student.wikrama.sch.id
```

Atau gunakan akun alternatif:
```
Admin:  admin@example.com / Admin123
Staff:  staff@example.com / Staff123
User:   user@example.com / User1234
```

## 📝 Cara Register Akun Baru

1. Buka http://localhost:8000/register
2. Password harus memenuhi syarat:
   - ✅ Minimal 8 karakter
   - ✅ Ada huruf BESAR (A-Z)
   - ✅ Ada huruf kecil (a-z)
   - ✅ Ada angka (0-9)

**Contoh password valid:** `User1234`, `Admin123`, `Test1234`

## 🎯 Fitur Lab yang Tersedia

| Lab | URL | Deskripsi |
|-----|-----|-----------|
| 🔐 Authentication | /auth-lab | Login/Register secure vs vulnerable |
| 🛡️ Authorization | /authorization-lab | Role-based access control |
| 💉 SQL Injection | /sqli-lab | Demo SQLi attack & prevention |
| 🔓 XSS | /xss-lab | Reflected, Stored, DOM-based XSS |
| 🔒 CSRF | /csrf-lab | CSRF attack & protection |
| ✅ Validation | /validation-lab | Server-side validation |
| 📁 File Upload | /file-upload-lab | Secure file upload |
| 🎫 Tickets | /tickets | CRUD ticketing system |
| 👨‍💼 Admin Panel | /admin | User & ticket management |

## 🔧 Troubleshooting

### Register tidak berfungsi?
```bash
# Clear cache
php artisan optimize:clear
```

### Error database?
```bash
# Reset database (⚠️ hapus semua data!)
php artisan migrate:fresh --seed
```

### Error permission?
```bash
chmod -R 775 storage bootstrap/cache
```

## 📚 Dokumentasi Lengkap

Lihat [SETUP_GUIDE.md](SETUP_GUIDE.md) untuk dokumentasi lengkap.

## ⚠️ Catatan Keamanan

Aplikasi ini untuk **pembelajaran**. Beberapa fitur sengaja dibuat vulnerable untuk demonstrasi.

- 🟢 Badge **SECURE** = Implementasi aman
- 🔴 Badge **VULNERABLE** = Sengaja vulnerable untuk demo

**JANGAN gunakan kode vulnerable di production!**

## 🛠️ Tech Stack

- Laravel 11
- PHP 8.2+
- SQLite
- Vite + Bootstrap 5
- Laravel Telescope

---

**Selamat belajar secure coding!** 🔒
