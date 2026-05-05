<?php
// ดึงข้อมูลเฉพาะหน้า
$stmt = $pdo->prepare("SELECT * FROM skinfile WHERE id LIKE :name ORDER BY id LIMIT :limit OFFSET :offset");
$stmt->bindValue(':name', "%$name%", PDO::PARAM_STR);
$stmt->bindValue(':limit', $rowsPerPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $startRow, PDO::PARAM_INT);
$stmt->execute();
$skins = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>