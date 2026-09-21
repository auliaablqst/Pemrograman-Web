<?php
session_start();
require_once __DIR__ . '/../includes/koneksi.php';

$nama              = trim($_POST['nama'] ?? '');
$no_anggota        = trim($_POST['no_anggota'] ?? '');
$alamat            = trim($_POST['alamat'] ?? '');
$no_hp             = trim($_POST['no_hp'] ?? '');
$email             = trim($_POST['email'] ?? '');
$tanggal_bergabung = $_POST['tanggal_bergabung'] ?? date('Y-m-d');

$errors = [];

if ($nama === '') {
    $errors[] = "Nama wajib diisi.";
}
if ($no_anggota === '') {
    $errors[] = "No. Anggota wajib diisi.";
}

if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)];
    header('Location: tambah.php');
    exit;
}

try {
    $sql = "INSERT INTO anggota (nama, no_anggota, alamat, no_hp, email, tanggal_bergabung) 
            VALUES (:nama, :no_anggota, :alamat, :no_hp, :email, :tanggal_bergabung)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nama'              => $nama,
        ':no_anggota'        => $no_anggota,
        ':alamat'            => $alamat,
        ':no_hp'             => $no_hp,
        ':email'             => $email,
        ':tanggal_bergabung' => $tanggal_bergabung
    ]);

    $_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Anggota berhasil ditambahkan.'];
    header('Location: list.php');
    exit;
} catch (PDOException $e) {
    if ($e->getCode() === '23505') {
        $_SESSION['flash'] = ['type' => 'error', 'pesan' => 'No. Anggota sudah dipakai, gunakan nomor lain.'];
    } else {
        $_SESSION['flash'] = ['type' => 'error', 'pesan' => 'Gagal menyimpan data: ' . $e->getMessage()];
    }
    header('Location: tambah.php');
    exit;
}