<?php
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id"); // แทน :id ด้วย id ที่ต้องการดึง
    $stmt->execute(['id' => $_SESSION['user_id']]);
?>