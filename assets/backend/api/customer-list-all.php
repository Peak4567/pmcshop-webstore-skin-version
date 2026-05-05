<?php
$sqlTotal = "SELECT COUNT(*) FROM skinfile WHERE id LIKE :name";
$stmtTotal = $pdo->prepare($sqlTotal);
$stmtTotal->execute([':name' => "%$name%"]);
$totalRows = $stmtTotal->fetchColumn();
$totalPages = ceil($totalRows / $rowsPerPage);
?>