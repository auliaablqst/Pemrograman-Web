# RPS Berbasis OBE/OBA — Desain dan Pemrograman Web (Semester 3, 4 SKS)

**Stack:** HTML/CSS/JS (front-end) + PHP native + PostgreSQL (back-end)
**Output akhir:** Aplikasi web dinamis (CRUD + autentikasi)

---

## 1. Identitas Mata Kuliah

| Item | Keterangan |
|---|---|
| Nama Mata Kuliah | Desain dan Pemrograman Web |
| Kode MK | *(sesuaikan dengan kurikulum prodi)* |
| SKS | 4 SKS (teori terintegrasi praktik) |
| Semester | 3 |
| Prasyarat | Algoritma & Pemrograman Dasar, Struktur Data |
| Rumpun/Prodi | *(isi sesuai prodi)* |
| Dosen Pengampu | *(diisi)* |
| Model Pembelajaran | Project-Based Learning (PjBL) — Outcome Based Education (OBE) |
| Estimasi waktu/minggu | 4 x 50' tatap muka + 4 x 60' terstruktur + 4 x 60' mandiri |

---

## 2. Capaian Pembelajaran Lulusan (CPL) yang Dibebankan pada MK

> Sesuaikan kode CPL berikut dengan dokumen kurikulum prodi Anda — kode di bawah bersifat contoh generik.

| Kode | Deskripsi CPL |
|---|---|
| CPL-S | Menunjukkan sikap bertanggung jawab dan bekerja sama dalam tim untuk menyelesaikan pekerjaan di bidang rekayasa perangkat lunak |
| CPL-P | Menguasai konsep teoretis desain antarmuka, pemrograman web client-side dan server-side, serta basis data relasional |
| CPL-KU | Mampu menerapkan pemikiran logis, kritis, dan sistematis dalam merancang dan mengimplementasikan solusi berbasis web |
| CPL-KK | Mampu merancang, membangun, menguji, dan mendokumentasikan aplikasi web yang fungsional sesuai kebutuhan pengguna |

---

## 3. Capaian Pembelajaran Mata Kuliah (CPMK)

| Kode | CPMK | Ranah |
|---|---|---|
| CPMK-1 | Mahasiswa mampu merancang struktur informasi dan antarmuka (UI/UX) aplikasi web sesuai kebutuhan pengguna | C6, KK (CPL-KK) |
| CPMK-2 | Mahasiswa mampu mengimplementasikan halaman web statis yang responsif menggunakan HTML5 dan CSS3 | C3 (CPL-P) |
| CPMK-3 | Mahasiswa mampu membangun interaktivitas sisi klien menggunakan JavaScript (DOM, event, AJAX/fetch) | C3 (CPL-P) |
| CPMK-4 | Mahasiswa mampu mengembangkan aplikasi web dinamis (CRUD, autentikasi) menggunakan PHP dan PostgreSQL | C4 (CPL-P, CPL-KK) |
| CPMK-5 | Mahasiswa mampu mengintegrasikan front-end dan back-end, menguji, mengamankan, dan mendeploy aplikasi web | C4/C5 (CPL-KU, CPL-KK) |
| CPMK-6 | Mahasiswa menunjukkan tanggung jawab individu/tim dalam menyelesaikan proyek aplikasi web secara mandiri | Afektif (CPL-S) |

**Peta Sub-CPMK (Kemampuan Akhir Tiap Tahapan Belajar):** lihat matriks mingguan di bagian 5 — setiap Sub-CPMK adalah turunan terukur dari CPMK di atas (prinsip *constructive alignment* OBE).

---

## 4. Deskripsi Singkat & Bahan Kajian

**Deskripsi:** Mata kuliah ini membekali mahasiswa untuk merancang dan membangun aplikasi web end-to-end: mulai dari perancangan UI/UX, implementasi front-end (HTML/CSS/JS), hingga back-end dinamis (PHP + PostgreSQL) dengan autentikasi dan keamanan dasar. Pembelajaran berbasis proyek (PjBL) — setiap tahap materi langsung diterapkan pada satu proyek aplikasi web yang dikembangkan secara inkremental sepanjang semester dan didemokan pada UAS.

**Bahan Kajian:** UI/UX & wireframing, HTML5 semantic, CSS3 & responsive design, JavaScript DOM/event/AJAX, PHP dasar-lanjut, PostgreSQL & query, autentikasi/session, keamanan web dasar, testing & deployment.

**Pustaka:**
1. Duckett, J. — *HTML & CSS: Design and Build Websites*
2. Duckett, J. — *JavaScript and JQuery: Interactive Front-End Web Development*
3. Matthew, N. & Stones, R. — *Beginning Databases with PostgreSQL: From Novice to Professional*
4. Nixon, R. — *Learning PHP, MySQL & JavaScript* (gunakan sebagai referensi PHP umum, ganti bagian database dengan dokumentasi PDO_PGSQL)
5. Dokumentasi resmi: MDN Web Docs, PHP.net (PDO_PGSQL), PostgreSQL.org, W3C

---

## 5. Matriks Rencana Pembelajaran Mingguan (16 Minggu)

| Mgg | Sub-CPMK (Kemampuan Akhir) | Indikator | Kriteria & Bentuk Penilaian (OBA) | Metode Pembelajaran | Materi Pembelajaran | Bobot |
|---|---|---|---|---|---|---|
| 1 | Memahami alur mata kuliah, konsep dasar web, dan tools pengembangan | Mampu menjelaskan cara kerja web (client-server) dan instalasi tools | Non-tes: keaktifan diskusi | Ceramah, demo tools (VSCode, XAMPP, browser devtools, Git) | Cara kerja web, HTTP, tools & environment setup | 2% |
| 2 | Menyusun struktur halaman web dengan HTML5 semantic | Struktur HTML valid & semantic sesuai kebutuhan konten | Tes praktik: membuat halaman statis | Praktik lab, latihan terbimbing | Tag semantic, form, tabel, aksesibilitas dasar | 3% |
| 3 | Mengimplementasikan styling dasar dengan CSS3 | Halaman terstyle sesuai box model & layout | Tes praktik: styling halaman HTML | Praktik lab | CSS selector, box model, Flexbox, Grid | 3% |
| 4 | Membangun tampilan responsif | Halaman tampil baik di berbagai ukuran layar | Tes praktik: uji responsif multi-device | Praktik lab, studi kasus | Media query, mobile-first, framework CSS (Bootstrap/Tailwind) | 4% |
| 5 | Merancang UI/UX aplikasi (proyek) | Wireframe/mockup sesuai kebutuhan pengguna | Non-tes: penilaian rancangan (rubrik) | Studio desain, PjBL kickoff | Prinsip UI/UX, wireframing (Figma), user flow | 5% |
| 6 | Menerapkan manipulasi DOM & event JavaScript | Interaksi halaman berjalan sesuai skenario | Tes praktik: fitur interaktif sederhana | Praktik lab | DOM, event handling, form validation client-side | 4% |
| 7 | Menerapkan komunikasi asinkron (AJAX/fetch, JSON) | Data dinamis tampil tanpa reload halaman | Tes praktik: konsumsi API/JSON | Praktik lab, studi kasus | Fetch API, JSON, async/await dasar | 4% |
| 8 | **UTS** — Mendemonstrasikan front-end statis-interaktif sesuai rancangan proyek | Front-end proyek berjalan sesuai wireframe | Tes praktik individu (produk + source code) | Ujian praktik | Evaluasi CPMK-1, CPMK-2, CPMK-3 | 15% |
| 9 | Mengimplementasikan dasar PHP & pengolahan form | Script PHP memproses input form dengan benar | Tes praktik: form handling PHP | Praktik lab | Sintaks PHP, variabel, kontrol alur, superglobal ($_GET/$_POST) | 4% |
| 10 | Menghubungkan aplikasi dengan basis data PostgreSQL | Koneksi & query dasar berhasil dieksekusi | Tes praktik: query SELECT/INSERT | Praktik lab | Perancangan tabel (ERD), koneksi PDO_PGSQL, tipe data PostgreSQL (SERIAL, TEXT, JSONB), query dasar | 5% |
| 11 | Membangun fitur CRUD pada proyek | Fitur create-read-update-delete berfungsi penuh | Tes praktik: modul CRUD proyek | Praktik lab, PjBL lanjutan | CRUD dengan PHP & PostgreSQL, prepared statement | 6% |
| 12 | Menerapkan autentikasi & manajemen sesi pengguna | Login/register/logout berfungsi & data sesi aman | Tes praktik: modul login proyek | Praktik lab | Session, cookie, password hashing, tabel users di PostgreSQL | 6% |
| 13 | Menerapkan prinsip keamanan web dasar | Aplikasi tervalidasi bebas kerentanan dasar | Tes praktik: uji keamanan checklist | Praktik lab, studi kasus | SQL Injection (prepared statement PDO_PGSQL), XSS, validasi & sanitasi input | 5% |
| 14 | Mengintegrasikan front-end & back-end proyek secara utuh | Seluruh modul proyek terintegrasi & teruji | Non-tes: review progress (rubrik) | Praktik lab, peer review | Integrasi sistem, functional testing | 6% |
| 15 | Mendeploy dan mendokumentasikan aplikasi | Aplikasi ter-deploy & terdokumentasi lengkap | Non-tes: dokumen teknis + demo progress | Praktik lab, presentasi progress | Deployment (local/hosting), dokumentasi teknis | 4% |
| 16 | **UAS** — Mendemonstrasikan aplikasi web akhir secara utuh | Aplikasi web berfungsi sesuai CPMK-1 s.d. CPMK-5 | Tes praktik + presentasi (produk, source code, laporan) | Ujian praktik & presentasi | Evaluasi capaian akhir proyek | 20% |
| — | Sikap & kolaborasi selama proyek (CPMK-6) | Konsistensi kontribusi individu dalam tim/mandiri | Non-tes: observasi & logbook mingguan | Sepanjang semester | — | 4% |

*(Total bobot = 100%)*

---

## 6. Komponen dan Bobot Penilaian Akhir (Ringkasan OBA)

| Komponen | Bobot | Memetakan CPMK |
|---|---|---|
| Tugas/Praktik Mingguan (formatif) | 10% | CPMK-1, 2, 3, 4 |
| Sikap & Kolaborasi (logbook) | 4% | CPMK-6 |
| UTS (praktik front-end individu) | 25% | CPMK-1, 2, 3 |
| Progress & Dokumentasi Proyek | 11% | CPMK-4, 5 |
| UAS (demo + presentasi aplikasi akhir) | 10% | CPMK-4, 5, 6 |
| Produk Akhir Aplikasi Web (source code + fungsionalitas) | 20% | CPMK-4, 5 |

**Nilai Akhir Mata Kuliah (NAM)** dihitung dari kontribusi tiap komponen terhadap ketercapaian CPMK, bukan sekadar rata-rata skor — sesuai prinsip OBA bahwa penilaian harus membuktikan *outcome* tercapai, bukan hanya aktivitas selesai.

---

## 7. Rubrik Penilaian Proyek Akhir (Aplikasi Web) — Contoh OBA

| Kriteria | Sangat Baik (86-100) | Baik (71-85) | Cukup (56-70) | Kurang (<56) |
|---|---|---|---|---|
| Fungsionalitas (CRUD, autentikasi) | Semua fitur berjalan sempurna tanpa bug | Fitur utama berjalan, bug minor | Sebagian fitur berjalan | Fitur utama tidak berfungsi |
| Desain UI/UX | Konsisten, responsif, mudah digunakan | Cukup konsisten & responsif | Responsif sebagian | Tidak responsif/tidak konsisten |
| Kualitas Kode & Keamanan | Terstruktur, tervalidasi, bebas kerentanan dasar | Terstruktur, validasi sebagian | Kurang terstruktur, validasi minim | Tidak terstruktur, rentan |
| Basis Data (PostgreSQL) | Skema normal (ERD jelas), tipe data tepat, query efisien & aman (prepared statement) | Skema cukup baik, sebagian prepared statement | Skema kurang optimal, query rawan injeksi | Skema tidak sesuai kebutuhan |
| Dokumentasi & Presentasi | Lengkap, jelas, mampu menjawab pertanyaan | Cukup lengkap | Dokumentasi minim | Tidak ada dokumentasi |

---

## Catatan Implementasi OBE/OBA

- **OBE**: setiap Sub-CPMK mingguan diturunkan langsung dari CPMK dan CPL agar keterkaitan *learning outcome* → aktivitas → penilaian terjaga (*constructive alignment*).
- **OBA**: bentuk penilaian didominasi tes/non-tes **praktik berbasis produk** (bukan hafalan teori), karena luaran MK adalah aplikasi web fungsional.
- Kode CPL, nama MK, dan bobot SKS teori/praktik sebaiknya disesuaikan dengan **dokumen kurikulum resmi prodi** sebelum diajukan ke penjaminan mutu.

## Catatan Teknis Lab (PostgreSQL)

- Instalasi lab: gunakan **PostgreSQL + pgAdmin** (atau CLI `psql`) sebagai pengganti MySQL bawaan XAMPP — PHP tetap bisa jalan lewat XAMPP, tapi ekstensi `pdo_pgsql` dan `pgsql` perlu diaktifkan manual di `php.ini`.
- Koneksi PHP disarankan pakai **PDO** (`new PDO("pgsql:host=...;dbname=...", $user, $pass)`) agar sintaks query mirip dan gampang di-switch, alih-alih fungsi `mysqli_*`.
- Perbedaan sintaks yang perlu ditekankan ke mahasiswa: `SERIAL`/`BIGSERIAL` (bukan `AUTO_INCREMENT`), `RETURNING` clause untuk mengambil ID setelah `INSERT`, penggunaan tanda kutip ganda untuk identifier case-sensitive.
