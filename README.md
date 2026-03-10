# DarulHikamCRUD-test
Laravel CRUD 

## Fitur

- Authentication (Login & Logout)
- CRUD Yayasan
- CRUD Sekolah
- Relasi One-to-Many antara Yayasan dan Sekolah
- Database Migration
- Seeder akun default

---

# Teknologi

- Laravel 12
- PHP 8.2
- MySQL
- Bootstrap 5

---

# ERD

Relasi database:

Yayasan (1) ---- (N) Sekolah
link foto ERD
https://drive.google.com/file/d/100SrUJMc9BcKn7kzXldB5eI9oHcZGGnt/view?usp=sharing



# Cara Setup Project

1. Clone repository
   git clone [https://github.com/username/darulhikam-test.git](https://github.com/jerrysetiadi7/DarulHikamCRUD-test.git)
2. Masuk ke folder project
3. Install dependency
   composer install
    npm install
    npm run build
5. Copy file environment
   cp .env.example .env
6. Generate key
    php artisan key:generate
6. Setup database
    Edit file `.env`
   DB_DATABASE=db_darulhikam
    DB_USERNAME=root
    DB_PASSWORD=
7. Jalankan migration
8. Jalankan seeder
9. Jalankan server
 # Login Default
Email: admin@darulhikam.com
Password: password123

