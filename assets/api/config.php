<?php
session_start();

// ตั้งค่าการเชื่อมต่อฐานข้อมูล
$host = '103.216.159.49';
$database   = 'pmcshop_beta';
$username = 'nahost';
$password = 'M@4w59pz6';

$sql = "mysql:host=$host;dbname=$database;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($sql, $username, $password, $options);
} catch (PDOException $e) {
    exit('Database connection failed: ' . $e->getMessage());
}
