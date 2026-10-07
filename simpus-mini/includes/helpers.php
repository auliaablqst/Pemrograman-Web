<?php
if (!function_exists('e')) {
    /** Escape data sebelum dicetak ke HTML (anti-XSS). */
    function e($nilai): string
    {
        return htmlspecialchars((string) $nilai, ENT_QUOTES, 'UTF-8');
    }
}

// Jangan bocorkan error PHP mentah ke pengguna (latihan 6.4 no. 2).
// Error tetap tercatat di log / terminal `php -S`.
ini_set('display_errors', '0');
ini_set('log_errors', '1');

// Lapisan pertahanan tambahan terhadap XSS (latihan 6.4 no. 4).
if (!headers_sent()) {
    header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self'; img-src 'self' data:; base-uri 'self'; form-action 'self'; frame-ancestors 'none'");
    header('X-Content-Type-Options: nosniff');
}