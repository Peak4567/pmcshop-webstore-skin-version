<?php


// ดึงจำนวนแถวทั้งหมด
$totalStmt = $pdo->prepare("SELECT COUNT(*) FROM skinfile WHERE id LIKE :name");
$totalStmt->execute([':name' => "%$name%"]);
$totalRows = $totalStmt->fetchColumn();

// คำนวณจำนวนหน้าทั้งหมด
$totalPages = ceil($totalRows / $rowsPerPage);

// กำหนดให้แสดง 5 หน้าในแต่ละกลุ่ม
$pagesPerGroup = 5;
$startPage = floor(($page - 1) / $pagesPerGroup) * $pagesPerGroup + 1;
$endPage = min($startPage + $pagesPerGroup - 1, $totalPages);

// นับจำนวนรายการที่ได้
$count = count($skins);
?>