<?php
// File: config/koneksi_wilayah.php
//--- Konfigurasi Database Wilayah---
$dbhost_wilayah = 'localhost';
// Kredensial yang paling umum untuk XAMPP/WAMPP
$dbuser_wilayah = 'root'; 
$dbpass_wilayah = ''; 
// Pastikan nama DB ini sudah Anda buat dan sudah diimpor data wilayahnya
$dbname_wilayah = 'u215075621_docwilayah'; 
$dbdsn_wilayah = "mysql:dbname={$dbname_wilayah};host={$dbhost_wilayah}";

try {
    // Buat objek koneksi PDO
    $db_wilayah = new PDO($dbdsn_wilayah, $dbuser_wilayah, $dbpass_wilayah);
    // Atur mode error untuk menampilkan exception jika terjadi kesalahan
    $db_wilayah->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Jika koneksi gagal, hentikan skrip dan kembalikan pesan yang dapat ditangkap JS
    // Menggunakan die() akan mengirim Fatal Error jika dipanggil langsung, tapi aman di AJAX
    die("<option value=''>Error Database: Koneksi Gagal. Cek kredensial atau server MySQL Anda. [DEBUG: " . htmlspecialchars($e->getMessage()) . "]</option>");
}
?>