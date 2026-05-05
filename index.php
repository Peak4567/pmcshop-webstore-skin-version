<?php
include("./assets/api/config.php");

// เลือก rows users database
if (isset($_SESSION["success_login"]) && !empty($_SESSION["success_login"])) {

    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id"); // แทน :id ด้วย id ที่ต้องการดึง
    $stmt->execute(['id' => $_SESSION['user_id']]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylecss -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/font-awesome-pro-v6-6.2.0/css/all.min.css">
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style-bg.css">
    <link rel="stylesheet" href="./assets/css/404.css">
    <link rel="stylesheet" href="./assets/css/style-box.css">
    <title>PMCSHOP</title>
</head>

<body>
    <?php if (isset($_SESSION["success_login"]) && !empty($_SESSION["success_login"])) { ?>
        <?php if ($user = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <?php } ?>
    <?php } ?>
    <?php include("./assets/body/navbar.php") ?>

    <?php include("./assets/route.php") ?>

    <?php include("./assets/body/footer.php") ?>

</body>

</html>