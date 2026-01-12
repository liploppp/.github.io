# Portfolio Website - Alif Nur Imam

## Setup Form Kontak

Untuk mengaktifkan form kontak yang mengirim email langsung ke Gmail:

### 1. Install PHP (jika belum ada)
- Download PHP dari https://www.php.net/downloads
- Atau gunakan XAMPP/WAMP/MAMP

### 2. Jalankan Server Lokal
```bash
# Menggunakan PHP built-in server
php -S localhost:8000

# Atau menggunakan XAMPP
# Letakkan folder portfolio di htdocs
# Akses melalui http://localhost/portofolio
```

### 3. Konfigurasi Email (Opsional)
Untuk server production, konfigurasikan SMTP di `send_email.php`:
- Gunakan PHPMailer untuk Gmail SMTP
- Atau gunakan service email seperti SendGrid, Mailgun

### 4. Akses Website
- Buka http://localhost:8000/contact.html
- Isi form kontak
- Email akan dikirim ke alifnurimam2007@gmail.com

## Fitur Form Kontak
- ✅ Validasi form real-time
- ✅ Loading state saat mengirim
- ✅ Notifikasi sukses/error
- ✅ Email langsung ke Gmail
- ✅ Responsive design