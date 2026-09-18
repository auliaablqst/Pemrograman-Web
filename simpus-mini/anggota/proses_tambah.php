<?php
session_start();
require __DIR__ . '/../includes/koneksi.php';

$no_anggota = trim($_POST['no_anggota'] ?? '');
$nama       = trim($_POST['nama'] ?? '');
$alamat     = trim($_POST['alamat'] ?? '');
$no_hp      = trim($_POST['no_hp'] ?? '');

$errors = [];
if ($no_anggota === '') $errors[] = "Nomor Anggota wajib diisi.";
if ($nama === '') $errors[] = "Nama Lengkap wajib diisi.";

if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)];
    header('Location: tambah.php');
    exit;
}

try {
    $stmt = $pdo->prepare(
        "INSERT INTO anggota (no_anggota, nama, alamat, no_hp) 
         VALUES (:no_anggota, :nama, :alamat, :no_hp) 
         RETURNING id"
    );

    $stmt->execute([
        'no_anggota' => $no_anggota,
        'nama'       => $nama,
        'alamat'     => $alamat,
        'no_hp'      => $no_hp,
    ]);

    $_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Anggota berhasil ditambahkan.'];
    header('Location: list.php');
    exit;

} catch (PDOException $e) {
    // Menangani error jika no_anggota duplikat (Batasan UNIQUE)
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => 'Gagal menyimpan: Nomor Anggota sudah digunakan.'];
    header('Location: tambah.php');
    exit;
}