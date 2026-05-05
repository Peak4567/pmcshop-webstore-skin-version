<?php
session_start();
require_once("../../../assets/api/config.php");

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    if (empty($id)) {
        echo "เกิดข้อผิดพลาด: ไม่พบ ID ที่ต้องการลบ";
        exit;
    }

    // ลบข้อมูล
    $stmt = $pdo->prepare("DELETE FROM skinfile WHERE id = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();

    // จัดเรียง ID ใหม่
    $pdo->exec("SET @rownum = 0");
    $pdo->exec("UPDATE skinfile SET id = (@rownum := @rownum + 1) ORDER BY id");

    // รีเซ็ต AUTO_INCREMENT
    $pdo->exec("ALTER TABLE skinfile AUTO_INCREMENT = 1");

    $_SESSION['DeleteSkin'] = "คุณลบชีทเรียบร้อยแล้ว";
    header("Location: /backend/skin-list");
    exit;
}
