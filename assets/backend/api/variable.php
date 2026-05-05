<?php
// รับค่าตัวแปร
$rowsPerPage = 1;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$name = isset($_GET['name']) ? $_GET['name'] : ''; // ตรวจสอบว่ามีตัวแปร name มาหรือไม่

$startRow = ($page - 1) * $rowsPerPage;

?>