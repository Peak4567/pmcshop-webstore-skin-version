<?php
// ดึงข้อมูลจากฐานข้อมูลด้วย PDO
$stmt = $pdo->prepare("SELECT * FROM skinfile WHERE id LIKE :name ORDER BY id DESC LIMIT :startRow, :rowsPerPage");
$stmt->bindValue(':name', "%$name%", PDO::PARAM_STR);
$stmt->bindValue(':startRow', $startRow, PDO::PARAM_INT);
$stmt->bindValue(':rowsPerPage', $rowsPerPage, PDO::PARAM_INT);
$stmt->execute();
$skins = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>