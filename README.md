# TP8DPBBO2526C1
Janji : Saya Aracelli Jasmine Malaika dengan NIM 2501804 mengerjakan Tugas Praktikum 7 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahan-Nya, maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## 1. Deskripsi Program

Program Lecturer and Course Management merupakan aplikasi berbasis web yang digunakan untuk mengelola data dosen dan mata kuliah. Program ini dibuat menggunakan PHP, MySQL, dan Bootstrap dengan menerapkan konsep Model-View-Controller (MVC).

Aplikasi ini memiliki dua data utama, yaitu data dosen (Lecturers) dan data mata kuliah (Courses). Setiap mata kuliah terhubung dengan dosen pengampu melalui relasi foreign key.

## 2. Desain Program

Program menggunakan pola arsitektur MVC yang membagi aplikasi menjadi tiga bagian:

- **Model:** Mengelola data dan komunikasi dengan database.
- **View:** Menampilkan halaman dan antarmuka aplikasi kepada pengguna.
- **Controller:** Mengatur alur program dan menghubungkan Model dengan View.

### Struktur Folder

```text
tp_mvc25/
├── app/
│   ├── controllers/
│   │   ├── LecturerController.php
│   │   └── CourseController.php
│   ├── models/
│   │   ├── Lecturer.php
│   │   └── Course.php
│   └── views/
│       ├── lecturers/
│       │   ├── index.php
│       │   ├── create.php
│       │   └── edit.php
│       └── courses/
│           ├── index.php
│           ├── create.php
│           └── edit.php
├── config/
│   └── database.php
├── assets/
│   ├── css/
│   └── js/
├── index.php
├── tp_mvc25.sql
└── README.md
```

## 3. Database

Database yang digunakan bernama `tp_mvc25` dan memiliki dua tabel:

### Tabel Lecturers

Digunakan untuk menyimpan informasi dosen dengan atribut:
- id
- name
- nidn
- phone
- join_date

### Tabel Courses

Digunakan untuk menyimpan informasi mata kuliah dengan atribut:
- id
- lecturer_id
- course_name
- semester
- credits

Tabel Courses memiliki foreign key `lecturer_id` yang terhubung dengan `id` pada tabel Lecturers. Relasi ini digunakan untuk menghubungkan mata kuliah dengan dosen pengampunya.

## 4. Fitur Program

### A. Lecturer
- Create: Menambahkan data dosen.
- Read: Menampilkan seluruh data dosen.
- Update: Mengubah data dosen.
- Delete: Menghapus data dosen.

### B. Course
- Create: Menambahkan data mata kuliah dan memilih dosen pengampu.
- Read: Menampilkan seluruh data mata kuliah beserta nama dosen pengampu.
- Update: Mengubah informasi mata kuliah.
- Delete: Menghapus data mata kuliah.

## 5. Alur Program

1. Pengguna membuka aplikasi melalui browser.
2. File `index.php` utama menerima request dan menentukan action yang dijalankan.
3. Controller menerima request dan memanggil Model sesuai kebutuhan.
4. Model melakukan proses pengambilan, penambahan, perubahan, atau penghapusan data pada database.
5. Controller mengirimkan data ke View.
6. View menampilkan hasil proses kepada pengguna.

## 6. Cara Menjalankan Program

1. Pastikan Laragon dan MySQL sudah aktif.
2. Letakkan folder project di direktori `C:\laragon\www\`.
3. Buka phpMyAdmin.
4. Import file `tp_mvc25.sql`.
5. Pastikan konfigurasi database pada `config/database.php` sesuai dengan pengaturan MySQL.
6. Buka browser dan akses:

   `http://localhost/tp_mvc25/`

## 7. Dokumentasi Program

Dokumentasi berupa screenshot atau screen recording saat program dijalankan akan dilampirkan pada bagian ini.

### A. Halaman Data Lecturers
<img width="1366" height="597" alt="01-data-lecturers" src="https://github.com/user-attachments/assets/a67f4350-40f5-42cd-b952-a03a3c047541" />

### B. Form Tambah Lecturer
<img width="1366" height="598" alt="02-tambah-lecturer" src="https://github.com/user-attachments/assets/ff883c34-ab37-45fa-9612-ef50ded84679" />

<img width="1366" height="597" alt="03-after-tambah-lecturer" src="https://github.com/user-attachments/assets/be2c6d0c-4133-48e7-877d-0ac04d707e32" />

### C. Halaman Data Courses
<img width="1345" height="597" alt="07-data-courses" src="https://github.com/user-attachments/assets/ef562251-aca0-498d-bf51-170928886f6f" />

### D. Form Tambah Course
<img width="1366" height="595" alt="08-tambah-course" src="https://github.com/user-attachments/assets/8918d4c6-9438-452c-9404-5c8ab13370f5" />

<img width="1353" height="593" alt="09-after-tambah-course" src="https://github.com/user-attachments/assets/67416c42-41fd-4cc5-a17c-08e74660b4f4" />

### E. Proses Edit dan Delete
<img width="1366" height="597" alt="04-edit-lecturer" src="https://github.com/user-attachments/assets/700ee798-5424-46ca-8f34-b1f637ecc4fa" />

<img width="1366" height="596" alt="05-after-edit-lecturer" src="https://github.com/user-attachments/assets/f7740ca3-4d0a-495c-8fe6-895cddf1f593" />

<img width="1366" height="644" alt="06-delete-lecturer" src="https://github.com/user-attachments/assets/bc508295-7a09-4f17-aed8-1741526d1129" />

<img width="1366" height="597" alt="10-edit-course" src="https://github.com/user-attachments/assets/b63250e8-931f-472b-9c9d-e2997694f132" />

<img width="1354" height="598" alt="11-after-edit-course" src="https://github.com/user-attachments/assets/1bb2b4c1-d1a2-43ab-8aa2-63a147c1cc2c" />

<img width="1352" height="634" alt="12-delete-course" src="https://github.com/user-attachments/assets/f8b48502-01f6-4e7e-af89-1b6660599e7e" />

---

**Teknologi yang Digunakan:**
- PHP
- MySQL
- Bootstrap
- HTML
- Model-View-Controller (MVC)
