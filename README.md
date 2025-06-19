# 🏨 HotelKu - Sistem Manajemen Hotel

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)

*Sistem manajemen hotel modern dengan fitur lengkap untuk mengelola operasional hotel Anda*

</div>

---

## 📋 Daftar Isi

- [Tentang Proyek](#-tentang-proyek)
- [Fitur Utama](#-fitur-utama)
- [Teknologi](#%EF%B8%8F-teknologi)
- [Instalasi](#-instalasi)
- [Penggunaan](#-penggunaan)
- [Struktur Database](#-struktur-database)
- [Screenshot](#-screenshot)
- [Kontribusi](#-kontribusi)
- [Lisensi](#-lisensi)

---

## 🎯 Tentang Proyek

**HotelKu** adalah sistem manajemen hotel yang dibangun dengan Laravel yang menyediakan solusi lengkap untuk mengelola operasional hotel. Sistem ini memungkinkan administrator untuk mengelola kamar, booking, customer, staff, dan berbagai aspek lainnya dalam satu platform yang terintegrasi.

### 🌟 Mengapa HotelKu?

- **User-Friendly Interface** - Antarmuka yang intuitif dan mudah digunakan
- **Responsive Design** - Dapat diakses dari desktop, tablet, dan mobile
- **Secure & Reliable** - Keamanan data terjamin dengan autentikasi Laravel
- **Modular Architecture** - Kode yang terstruktur dan mudah dikembangkan

---

## ✨ Fitur Utama

### 🏠 **Frontend (Customer)**
- 🎠 **Banner Slider** - Tampilan galeri gambar hotel yang menarik
- 🏠 **Room Gallery** - Galeri foto kamar dengan lightbox
- 🛎️ **Service Showcase** - Tampilan fasilitas dan layanan hotel
- 📝 **Online Booking** - Sistem reservasi online untuk customer
- 💬 **Testimonial** - Ulasan dan testimoni dari tamu
- 📞 **Contact Page** - Halaman kontak dan informasi hotel

### 👨‍💼 **Backend (Admin)**
- 📊 **Dashboard Analytics** - Overview statistik booking dan pendapatan
- 🏨 **Room Management** - Manajemen tipe kamar dan ketersediaan
- 📅 **Booking Management** - Kelola reservasi dan status booking
- 👥 **Customer Management** - Database customer dan riwayat booking
- 👨‍💻 **Staff Management** - Manajemen karyawan dan gaji
- 🎯 **Service Management** - Kelola fasilitas dan layanan hotel
- 🖼️ **Banner Management** - Upload dan kelola banner homepage
- 💰 **Payment Tracking** - Tracking pembayaran staff dan booking

---

## ⚙️ Teknologi

| Kategori | Teknologi |
|----------|-----------|
| **Backend** | Laravel 8.x, PHP 7.4+ |
| **Frontend** | Bootstrap 5, jQuery, Chart.js |
| **Database** | MySQL 5.7+ |
| **Storage** | Laravel Storage (File Upload) |
| **Authentication** | Laravel Auth |
| **UI Components** | SB Admin 2 Template |

---

## 🚀 Instalasi

### Prasyarat
- PHP >= 7.4
- Composer
- MySQL/MariaDB
- Node.js & NPM (opsional)
- Web Server (Apache/Nginx)

### Langkah Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/hotelku-sistem-manajemen-hotel.git
   cd hotelku-sistem-manajemen-hotel
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```

3. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Configuration**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=hotelku_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Database Migration & Seeding**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Storage Symlink**
   ```bash
   php artisan storage:link
   ```

7. **Run Development Server**
   ```bash
   php artisan serve
   ```

8. **Akses Aplikasi**
   - Frontend: `http://localhost:8000`
   - Admin Panel: `http://localhost:8000/admin`

---

## 💻 Penggunaan

### 👤 Default Credentials

| Role | Email | Password |
|------|-------|----------|
| **Admin** | admin@hotelku.com | password |
| **Customer** | customer@hotelku.com | password |

### 🔄 Workflow Utama

1. **Setup Initial Data**
   - Login sebagai admin
   - Upload banner untuk homepage
   - Tambahkan tipe kamar dan foto
   - Setup fasilitas/layanan hotel

2. **Customer Booking**
   - Customer browse kamar di homepage
   - Pilih tanggal dan tipe kamar
   - Isi data booking
   - Konfirmasi reservasi

3. **Admin Management**
   - Monitor booking di dashboard
   - Kelola ketersediaan kamar
   - Update status booking
   - Generate laporan

---

## 🗄️ Struktur Database

### Tabel Utama

```sql
┌─ users (Admin Authentication)
├─ customers (Customer Data)
├─ room_types (Tipe Kamar)
├─ rooms (Data Kamar)
├─ bookings (Reservasi)
├─ booked_rooms (Detail Booking)
├─ services (Fasilitas Hotel)
├─ banners (Homepage Banners)
├─ staff (Data Karyawan)
└─ staff_payments (Gaji Karyawan)
```

### Relasi Database
- `bookings` → `customers` (one-to-many)
- `room_types` → `rooms` (one-to-many)
- `room_types` → `roomtypeimages` (one-to-many)
- `bookings` → `booked_rooms` (one-to-many)

---

## 📸 Screenshot

### Frontend
![Homepage](docs/images/homepage.png)
*Homepage dengan banner slider dan gallery kamar*

![Booking Form](docs/images/booking.png)
*Form booking online untuk customer*

### Backend
![Admin Dashboard](docs/images/dashboard.png)
*Dashboard admin dengan analytics*

![Room Management](docs/images/room-management.png)
*Manajemen kamar dan tipe kamar*

---

## 🔧 Fitur Tambahan

### 🎨 **UI/UX Features**
- Responsive design untuk semua device
- Loading animations dan smooth transitions
- Image lightbox untuk gallery
- Toast notifications untuk feedback user
- Modern color scheme dengan tema coklat elegant

### 🛡️ **Security Features**
- CSRF protection pada semua form
- Input validation dan sanitization
- File upload restrictions
- Session management
- Password hashing dengan bcrypt

### 📊 **Analytics & Reporting**
- Dashboard dengan Chart.js visualization
- Booking statistics per bulan
- Revenue tracking
- Room occupancy rate
- Customer analytics

---

## 🤝 Kontribusi

Kami menerima kontribusi dari developer lain! Berikut cara berkontribusi:

1. Fork repository ini
2. Buat branch fitur (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

### 📝 Code Style
- Ikuti PSR-12 coding standard
- Gunakan nama variabel yang deskriptif
- Tambahkan komentar untuk logic yang kompleks
- Write tests untuk fitur baru

---

## 🐛 Bug Report & Feature Request

Jika Anda menemukan bug atau ingin mengusulkan fitur baru:

1. Cek [Issues](https://github.com/username/hotelku/issues) yang sudah ada
2. Buat issue baru dengan template yang sesuai
3. Berikan detail yang jelas dan reproduksi langkah

---

## 📚 API Documentation

Aplikasi ini menyediakan REST API untuk integrasi dengan sistem eksternal:

### Endpoints Utama
- `GET /api/rooms` - Daftar kamar tersedia
- `POST /api/bookings` - Buat booking baru
- `GET /api/bookings/{id}` - Detail booking
- `PUT /api/bookings/{id}` - Update status booking

*Dokumentasi API lengkap tersedia di `/api/documentation`*

---

## 🚧 Roadmap

### Version 2.0 (Coming Soon)
- [ ] Mobile app dengan React Native
- [ ] Payment gateway integration
- [ ] Email notifications
- [ ] Multi-language support
- [ ] Advanced reporting dashboard
- [ ] Room cleaning schedule
- [ ] Inventory management

### Version 2.1
- [ ] Hotel chain management
- [ ] Customer loyalty program
- [ ] Advanced analytics with AI
- [ ] WhatsApp integration
- [ ] Calendar synchronization

---

## 📄 Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE) - lihat file LICENSE untuk detail lengkap.

---

## 📧 Kontak

- **Developer**: HotelKu Development Team
- **Email**: dev@hotelku.com
- **GitHub**: [@hotelku-team](https://github.com/hotelku-team)
- **Website**: [https://hotelku.com](https://hotelku.com)

---

<div align="center">

**⭐ Jika proyek ini membantu Anda, silakan berikan star!**

*Made with ❤️ for Indonesian Hotel Industry*

---

### 🏆 Awards & Recognition

![GitHub stars](https://img.shields.io/github/stars/username/hotelku?style=social)
![GitHub forks](https://img.shields.io/github/forks/username/hotelku?style=social)
![GitHub watchers](https://img.shields.io/github/watchers/username/hotelku?style=social)

</div>
