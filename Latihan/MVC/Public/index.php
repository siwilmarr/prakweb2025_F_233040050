<?php
// Load semua file yang diperlukan
require_once __DIR__ . '/../App/config/Database.php';
require_once __DIR__ . '/../App/models/user.php';
require_once __DIR__ . '/../App/controllers/UserControllers.php';

// Buat koneksi database
$database = new Database();
$pdo = $database->connect();

// Jalankan controller
$controller = new UserController($pdo);
$controller->index();