<?php
$host = 'localhost:3307';
$user = 'root';
$password = '';
$database = 'solaw';

// Koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
