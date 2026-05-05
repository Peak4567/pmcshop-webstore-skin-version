<?php
$sqlData = "SELECT * FROM skinfile WHERE id LIKE :name LIMIT :start, :limit";
$stmtData = $pdo->prepare($sqlData);
$stmtData->bindValue(':name', "%$name%", PDO::PARAM_STR);
$stmtData->bindValue(':start', (int)$startRow, PDO::PARAM_INT);
$stmtData->bindValue(':limit', (int)$rowsPerPage, PDO::PARAM_INT);
$stmtData->execute();
$skins = $stmtData->fetchAll(PDO::FETCH_ASSOC);
?>