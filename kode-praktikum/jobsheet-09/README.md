# Jobsheet 9 — CRUD Penuh

Sub-CPMK: Membangun fitur CRUD pada proyek.

## Perubahan dari Jobsheet 8
- Tambah `buku/edit.php` + `buku/proses_edit.php`, `anggota/edit.php` + `anggota/proses_edit.php` — melengkapi Create+Read (Jobsheet 8) dengan **Update**.
- Tambah `buku/hapus.php`, `anggota/hapus.php` — **Delete**, hanya menerima `POST` (bukan GET) agar tidak terpicu tidak sengaja lewat link/crawler.
- Tombol Hapus di `list.php` sekarang berupa `<form class="form-hapus" method="post">` sungguhan (bukan lagi tombol `<button>` polos) — `app.js` (`initHapusConfirm`) diubah untuk konfirmasi di event `submit` (bisa `preventDefault()`), bukan `click`.
- `buku/list.php` & `anggota/list.php`: tambah **pagination** (`LIMIT`/`OFFSET`, 5 baris/halaman) dan **pencarian server-side** (`WHERE judul/nama ILIKE :kw`) — form GET, menggantikan kolom cari client-side murni dari Jobsheet 5/6.

## Cara menjalankan
```bash
php -S localhost:8000
```
Buka `http://localhost:8000/index.php`, uji siklus lengkap: tambah → tampil → ubah (Edit) → tampil berubah → hapus → hilang dari list.

## Catatan
- Kolom pencarian (`#search-input`) di halaman ini melayani dua peran: filter instan client-side (JS, dari Jobsheet 5) untuk baris yang sedang tampil di halaman saat ini, dan pencarian penuh lintas-halaman lewat tombol "Cari" (server-side).
- Nilai `q` dari pencarian belum di-escape saat ditampilkan kembali ke `value` input — ini **sengaja belum diperbaiki** di sini; audit dan perbaikan XSS dilakukan menyeluruh di Jobsheet 11.
