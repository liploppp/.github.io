# Setup EmailJS untuk Form Kontak

## Cara Mengaktifkan Pengiriman Email Langsung

### 1. Daftar di EmailJS
- Kunjungi https://www.emailjs.com/
- Buat akun gratis
- Verifikasi email Anda

### 2. Setup Email Service
- Login ke dashboard EmailJS
- Pilih "Email Services" 
- Klik "Add New Service"
- Pilih Gmail dan ikuti instruksi
- Catat **Service ID** yang dibuat

### 3. Buat Email Template
- Pilih "Email Templates"
- Klik "Create New Template"
- Gunakan template ini:

```
Subject: Pesan dari Portfolio: {{subject}}

Nama: {{from_name}}
Email: {{from_email}}
Telepon: {{phone}}

Pesan:
{{message}}

---
Pesan ini dikirim dari form kontak portfolio website.
```

- Catat **Template ID** yang dibuat

### 4. Dapatkan Public Key
- Pilih "Account" > "General"
- Salin **Public Key**

### 5. Update contact.html
Ganti di file contact.html:
```javascript
// Ganti YOUR_PUBLIC_KEY dengan public key Anda
emailjs.init('YOUR_PUBLIC_KEY');

// Ganti YOUR_SERVICE_ID dan YOUR_TEMPLATE_ID
emailjs.send('YOUR_SERVICE_ID', 'YOUR_TEMPLATE_ID', templateParams)
```

### 6. Aktifkan Kode EmailJS
- Hapus komentar pada kode EmailJS
- Hapus bagian "Temporary simulation"

## Hasil Akhir
✅ Form kontak langsung mengirim email ke alifnurimam2007@gmail.com
✅ Notifikasi sukses muncul tanpa pindah halaman
✅ Form direset otomatis setelah berhasil
✅ Loading state saat mengirim

## Gratis sampai 200 email/bulan!