<?php
// Fungsi pendek untuk escape output HTML, mencegah XSS.
// Dipakai setiap kali mencetak data yang berasal dari database,
// $_GET, $_POST, atau sumber luar lainnya.
function e($value) {
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

// Label tampilan untuk nilai kategori yang disimpan di database.
function label_kategori($kategori) {
    $daftar = [
        'fiksi'     => 'Fiksi',
        'non-fiksi' => 'Non-Fiksi',
        'referensi' => 'Referensi',
    ];
    return $daftar[$kategori ?? ''] ?? '-';
}

// Format timestamp database menjadi "9 Okt 2026, 22.59".
function format_tanggal_waktu($timestamp) {
    if (empty($timestamp)) {
        return '-';
    }
    $bulan = [1 => 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
    $t = strtotime($timestamp);
    if ($t === false) {
        return '-';
    }
    return date('j', $t) . ' ' . $bulan[(int) date('n', $t)] . ' ' . date('Y', $t) . ', ' . date('H.i', $t);
}