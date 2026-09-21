<?php
session_start();

$nama = trim($_POST['nama'] ?? '');
$no_anggota = trim($_POST['no_anggota'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');
$no_hp = trim($_POST['no_hp'] ?? '');
$email = trim($_POST['email'] ?? '');
$tanggal_bergabung = trim($_POST['tanggal_bergabung'] ?? '');

$errors = [];

if ($nama === '') {
    $errors[] = "Nama wajib diisi.";
}
if ($no_anggota === '') {
    $errors[] = "No. Anggota wajib diisi.";
}

if ($alamat === '') {
    $errors[] = "Alamat wajib diisi.";
}

if ($no_hp !== '' && !preg_match('/^[0-9]+$/', $no_hp)) {
    $errors[] = "No. HP hanya boleh berisi angka.";
}

if ($email === '') {
    $errors[] = "Email wajib diisi.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format email tidak valid.";
}

if ($tanggalBergabung === '') {
    $errors[] = "Tanggal bergabung wajib diisi.";
}

if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)];
    header('Location: tambah.php');
    exit;
}

$stmt = $pdo->prepare(
    "INSERT INTO anggota (nama, no_anggota, alamat, no_hp, email, tanggal_bergabung)
     VALUES (:nama, :no_anggota, :alamat, :no_hp, :email, :tanggal_bergabung)
     RETURNING id"
);
$stmt->execute([
    'nama'              => $nama,
    'no_anggota'        => $noAnggota,
    'alamat'            => $alamat,
    'no_hp'             => $noHp,
    'email'             => $email,
    'tanggal_bergabung' => $tanggalBergabung,
]);

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Anggota berhasil ditambahkan.'];
header('Location: list.php');
exit;