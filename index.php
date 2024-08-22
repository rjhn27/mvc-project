<?php
require_once __DIR__ . '/Controllers/HomeController.php';

// Buat instance dari HomeController
$controller = new HomeController();
$controller->index(); // Panggil metode index untuk menampilkan halaman home
?>
