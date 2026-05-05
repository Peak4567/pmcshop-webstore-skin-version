<?php
$stmtTotal = $pdo->prepare("SELECT COUNT(*) FROM skinfile WHERE id LIKE :name");
$stmtTotal->execute([':name' => "%$name%"]);
$totalRows = $stmtTotal->fetchColumn();
$totalPages = ceil($totalRows / $rowsPerPage);
?>