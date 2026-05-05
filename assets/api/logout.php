<?php
session_start();
require('./config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['user_id'])) {
        // อัปเดตสถานะเป็น offline
        $stmt = $pdo->prepare("UPDATE users SET status = 'offline' WHERE id = :id");
        $stmt->execute(['id' => $_SESSION['user_id']]);
    }

    // ล้าง session
    $_SESSION = [];
    session_destroy();

    // ส่งกลับไปยังหน้าล็อกอิน
    header('Location: /login');
    exit;
}

exit;
