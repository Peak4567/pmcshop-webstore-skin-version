<?php
$errors = [];
include("../../../assets/api/config.php");


if (isset($_POST['submit'])) {

    // ตรวจสอบว่ามีไฟล์ถูกอัปโหลด
    if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
        $_SESSION['RespMessage'] = "เกิดข้อผิดพลาดในการอัปโหลดไฟล์";
        header("location: /backend/skin-list");
        exit;
    }

    $file = $_FILES['file']['name'];
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $allowed = ['png', 'jpg'];

    if (!in_array($ext, $allowed)) {
        $_SESSION['RespMessage'] = "ประเภทไฟล์ไม่ถูกต้อง";
        header("location: /backend/skin-list");
        exit;
    }

    $milliseconds = round(microtime(true) * 1000);
    $newfilename = $milliseconds . '.' . $ext;

    $tmpname = $_FILES['file']['tmp_name'];
    $moveto = "../../../assets/image/skin-file/" . $newfilename;

    if (move_uploaded_file($tmpname, $moveto)) {
        chmod($moveto, 0777);
        list($width, $height) = getimagesize($moveto);

        // ตรวจสอบขนาดของไฟล์ภาพ
        if (!(($width == 64 && $height == 64) || ($width == 128 && $height == 128))) {
            unlink($moveto);
            $_SESSION['RespMessage'] = "ขนาดไฟล์ไม่ถูกต้อง ต้องเป็น 64x64 หรือ 128x128 เท่านั้น";
            header("location: /backend/skin-list");
            exit;
        }

        // ตรวจสอบ model
        $image = imagecreatefrompng($moveto);
        $model = imagecolorat($image, 50, 20) === imagecolorat($image, 54, 20) ? 'classic' : 'slim';
        imagedestroy($image);

        // บันทึกลงฐานข้อมูลด้วย PDO
        try {
            $stmt = $pdo->prepare("INSERT INTO skinfile (file, model, file_type, width, height) VALUES (:file, :model, :file_type, :width, :height)");
            $stmt->execute([
                ':file' => $newfilename,
                ':model' => $model,
                ':file_type' => $ext,
                ':width' => $width,
                ':height' => $height
            ]);

            $_SESSION['SuccessSkin'] = "คุณเพิ่มไฟล์เรียบร้อยแล้ว";
            header("location: /backend/skin-list");
            exit;
        } catch (PDOException $e) {
            $_SESSION['RespMessage'] = "เกิดข้อผิดพลาด: " . $e->getMessage();
            header("location: /backend/skin-list");
            exit;
        }
    } else {
        $_SESSION['RespMessage'] = "อัปโหลดไม่สำเร็จ";
        header("location: /backend/skin-list");
        exit;
    }
}
?>
