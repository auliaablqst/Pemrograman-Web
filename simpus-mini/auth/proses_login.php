<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require __DIR__ . '/../includes/koneksi.php';

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

$_SESSION['percobaan_gagal'] = $_SESSION['percobaan_gagal'] ?? 0;

if ($_SESSION['percobaan_gagal'] >= 3) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => 'Terlalu banyak percobaan gagal. Coba lagi nanti.'];
    header('Location: login.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$stmt->execute(['username' => $username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['role'] = $user['role'];
    unset($_SESSION['percobaan_gagal']);

    if (!empty($_POST['remember'])) {
        setcookie('remember_username', $username, time() + (30 * 24 * 60 * 60), '/');
    }

    header('Location: ../index.php');
    exit;
}

$_SESSION['percobaan_gagal']++;
$_SESSION['flash'] = ['type' => 'error', 'pesan' => 'Username atau password salah.'];
header('Location: login.php');
exit;