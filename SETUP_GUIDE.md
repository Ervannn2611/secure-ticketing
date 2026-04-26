# Setup Guide - Secure Ticketing System

## Setup Sudah Selesai! ✅

Project sudah siap digunakan. Berikut informasi penting:

## Cara Menjalankan Aplikasi

### 1. Jalankan Server Laravel
```bash
php artisan serve
```
Aplikasi akan berjalan di: **http://localhost:8000**

### 2. (Opsional) Jalankan Vite Dev Server
Untuk development dengan hot reload:
```bash
npm run dev
```

## Akun Demo yang Tersedia

Anda bisa login dengan akun berikut (semua password: **password**):

### Authorization Lab Accounts
| Email | Password | Role | Akses |
|-------|----------|------|-------|
| admin@wikrama.sch.id | password | Admin | Full access ke semua fitur |
| staff@wikrama.sch.id | password | Staff | Handle tickets, reports |
| budi@student.wikrama.sch.id | password | User | Create & view own tickets |
| siti@student.wikrama.sch.id | password | User | Create & view own tickets |

### BAC/IDOR Lab Accounts
| Email | Password | Role | Purpose |
|-------|----------|------|---------|
| victim@test.com | password | User | 🎯 Target - Has sensitive data |
| attacker@test.com | password | User | 🔓 Attacker - Will try IDOR |

### Simple Demo Accounts (Alternative)
| Email | Password | Role |
|-------|----------|------|
| admin@example.com | Admin123 | Admin |
| staff@example.com | Staff123 | Staff |
| user@example.com | User1234 | User |

## Cara Register Akun Baru

1. Buka http://localhost:8000/register
2. Isi form dengan:
   - **Nama:** Hanya huruf dan spasi
   - **Email:** Format email yang valid
   - **Password:** Minimal 8 karakter, harus ada:
     - Huruf besar (A-Z)
     - Huruf kecil (a-z)
     - Angka (0-9)
   - **Konfirmasi Password:** Harus sama dengan password

Contoh password yang valid: `User1234`, `Admin123`, `Test1234`

## Fitur-Fitur yang Tersedia

### 1. Authentication Lab
- Secure Login/Register
- Vulnerable Login/Register (untuk pembelajaran)
- URL: http://localhost:8000/auth-lab

### 2. Authorization Lab
- Role-based Access Control (RBAC)
- Policy implementation
- URL: http://localhost:8000/authorization-lab

### 3. XSS Lab
- Reflected XSS demo
- Stored XSS demo
- DOM-based XSS demo
- URL: http://localhost:8000/xss-lab

### 4. SQL Injection Lab
- Vulnerable search demo
- Secure search implementation
- URL: http://localhost:8000/sqli-lab

### 5. CSRF Lab
- CSRF attack demo
- Protection implementation
- URL: http://localhost:8000/csrf-lab

### 6. Validation Lab
- Server-side validation
- Client-side bypass demo
- URL: http://localhost:8000/validation-lab

### 7. File Upload Lab
- Secure file upload
- Vulnerable upload demo
- URL: http://localhost:8000/file-upload-lab

### 8. Ticketing System
- Create, read, update, delete tickets
- Comment system
- Role-based access
- URL: http://localhost:8000/tickets

### 9. Admin Panel
- User management
- Ticket management
- Reports
- URL: http://localhost:8000/admin (Admin only)

## Troubleshooting

### Jika Register Tidak Berfungsi

1. Pastikan password memenuhi requirements:
   ```
   Minimal 8 karakter
   Ada huruf besar (A-Z)
   Ada huruf kecil (a-z)
   Ada angka (0-9)
   ```

2. Clear cache:
   ```bash
   php artisan optimize:clear
   ```

3. Cek error di browser console atau terminal

### Jika Ada Error Database

```bash
php artisan migrate:fresh --seed
```
⚠️ Peringatan: Ini akan menghapus semua data dan membuat ulang database!

### Jika Ada Error Permission

```bash
chmod -R 775 storage bootstrap/cache
```

## Database

- **Type:** SQLite
- **Location:** database/database.sqlite
- **Backup:** ticketing_database (file original)

## Teknologi yang Digunakan

- Laravel 11
- PHP 8.2+
- SQLite
- Vite
- Bootstrap 5
- Laravel Telescope (monitoring)

## Catatan Keamanan

⚠️ **PENTING:** Aplikasi ini dibuat untuk pembelajaran secure coding. Beberapa fitur sengaja dibuat vulnerable untuk demonstrasi. Jangan gunakan kode vulnerable di production!

Fitur yang aman ditandai dengan badge hijau "SECURE"
Fitur vulnerable ditandai dengan badge merah "VULNERABLE"

## Support

Jika ada masalah, cek:
1. Terminal untuk error log
2. Browser console untuk JavaScript error
3. storage/logs/laravel.log untuk application log

Selamat belajar secure coding! 🔒
