<?php
// Fungsi pendek untuk escape output HTML, mencegah XSS.
// Dipakai setiap kali mencetak data yang berasal dari database,
// $_GET, $_POST, atau sumber luar lainnya.
function e($value) {
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}