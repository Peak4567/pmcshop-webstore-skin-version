<?php
require("./config.php");

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $first_name = trim($_POST['first_name'] ?? '');
    $last_name = trim($_POST['last_name'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $password_confirm = $_POST['password_confirm'] ?? '';

    if ($first_name === '') {
        $errors[] = 'กรุณากรอกชื่อจริง';
    }
    if ($last_name === '') {
        $errors[] = 'กรุณากรอกนามสกุล';
    }
    if ($username === '') {
        $errors[] = 'กรุณากรอกชื่อผู้ใช้';
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'กรุณากรอกอีเมลที่ถูกต้อง';
    }
    if ($password === '') {
        $errors[] = 'กรุณากรอกรหัสผ่าน';
    }
    if ($password !== $password_confirm) {
        $errors[] = 'รหัสผ่านไม่ตรงกัน';
    }

    if (empty($errors)) {
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = :username OR email = :email");
        $stmt->execute(['username' => $username, 'email' => $email]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            $errors[] = 'ชื่อผู้ใช้หรืออีเมลนี้ถูกใช้งานแล้ว';
        }
    }

    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, username, email, password, level,status) 
                       VALUES (:first_name, :last_name, :username, :email, :password, :level ,:status)");
        $stmt->execute([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'username' => $username,
            'email' => $email,
            'password' => $hashed_password,
            'level' => 'member',
			'status' => 'offline',
        ]);

        $_SESSION['success'] = "สมัครสมาชิกสำเร็จ! คุณสามารถเข้าสู่ระบบได้ทันที";
        header('Location: /login');
        exit;
    }

    // เก็บ error และข้อมูลเก่ากลับไปที่ form
    $_SESSION['signup_errors'] = $errors;
    $_SESSION['signup_old'] = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'username' => $username,
        'email' => $email,
    ];

    header('Location: /sign-up');
    exit;
}
