<?php
$rowsPerPage = 1;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1); // ป้องกันเลขติดลบ

$name = isset($_GET['name']) ? $_GET['name'] : '';
$startRow = ($page - 1) * $rowsPerPage;
?>