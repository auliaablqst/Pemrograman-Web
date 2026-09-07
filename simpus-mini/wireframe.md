# Wireframe SIMPUS-Mini

```
+-------------------------------------------------------+
|                      SIMPUS-Mini                  [=] |
+-------------------------------------------------------+
|                 Registrasi Anggota Baru               |
|                                                       |
|                     Nama Lengkap                      |
| [_________________________________________________]   |
|                                                       |
|                   No. Anggota / NIM                   |
| [_________________________________________________]   |
|                                                       |
|                         Email                         |
| [_________________________________________________]   |
|                                                       |
|                       [ Daftar ]                      |
+-------------------------------------------------------+
| (c) 2026 SIMPUS-Mini                                  |
+-------------------------------------------------------+
```

# User flow baru 
```
[Petugas Login] -> [Dashboard] -> [Pilih menu "Laporan / Peminjaman"]
        -> [Filter "Tunggakan / Lewat Jatuh Tempo"]
        -> [Sistem Tampilkan Daftar Anggota & Total Denda]
        -> [Pilih "Kirim Pengingat"] -> [Kembali ke Dashboard]
```

# Identifikasi edge case tambahan
```
1. **Peminjaman Buku Ganda oleh Anggota yang Sama**
   - **Skenario:** Petugas tidak sengaja memproses peminjaman buku dengan judul yang sama kepada anggota yang sama, padahal status peminjaman buku pertama belum dikembalikan.
   - **Aturan Bisnis:** Sistem memblokir transaksi dan menampilkan pesan peringatan: *"Anggota ini masih meminjam buku yang sama. Harap selesaikan pengembalian terlebih dahulu."*

2. **Batas Maksimal Kuota Peminjaman Terlampaui**
   - **Skenario:** Anggota mencoba meminjam buku baru padahal sudah mencapai batas maksimal peminjaman (misal: maksimal 3 buku).
   - **Aturan Bisnis:** Tombol simpan transaksi dinonaktifkan (*disabled*) dan muncul notifikasi: *"Batas maksimal peminjaman (3 buku) telah tercapai."*

3. **Anggota Memiliki Tunggakan Denda Belum Lunas**
   - **Skenario:** Anggota yang memiliki riwayat keterlambatan dan belum melunasi denda mencoba meminjam buku baru.
   - **Aturan Bisnis:** Sistem mengunci formulir peminjaman hingga status denda pada transaksi sebelumnya dinyatakan lunas oleh Petugas.
   ```

