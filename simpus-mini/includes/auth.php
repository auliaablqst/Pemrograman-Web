<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    // Hitung $base sendiri di sini karena auth.php dipanggil SEBELUM
    // header.php, jadi $base dari header.php belum ada.
    $__jobsheetRoot = dirname(__DIR__);
    $__scriptDir = dirname($_SERVER['SCRIPT_FILENAME']);
    $__rel = ltrim(str_replace('\\', '/', substr($__scriptDir, strlen($__jobsheetRoot))), '/');
    $base = $__rel === '' ? '' : str_repeat('../', substr_count($__rel, '/') + 1);

    header('Location: ' . $base . 'auth/login.php');
    exit;
}