<?php
session_start();
require("./config.php");

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $errors[] = 'กรุณากรอกชื่อผู้ใช้และรหัสผ่าน';
    }

    if (empty($errors)) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if (!$user) {
            $errors[] = 'คุณกรอกชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
        } elseif (!password_verify($password, $user['password'])) {
            $errors[] = 'คุณกรอกชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
        } else {
            // เก็บข้อมูลลง session
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name']
            ];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['success_login'] = 'เข้าสู่ระบบเรียบร้อย ' . htmlspecialchars($user['first_name']);

            // อัปเดตสถานะเป็น online
            $updateStmt = $pdo->prepare("UPDATE users SET status = 'online' WHERE id = :id");
            $updateStmt->execute(['id' => $user['id']]);

            header('Location: /');
            exit;
        }
    }

    // ถ้า error
    $_SESSION['login_errors'] = $errors;
    $_SESSION['old_input'] = ['username' => $username];
    header('Location: /login');
    exit;
}
