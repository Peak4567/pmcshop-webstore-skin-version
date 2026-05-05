<?php 
$stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE status = 'online'");
$stmt->execute();
$onlineUsers = $stmt->fetchColumn();
?>
