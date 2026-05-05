<?php

include("../../assets/api/config.php");

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
   <!-- css style -->
   <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css " rel="stylesheet" />
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

   <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
   <link rel="stylesheet" href="../assets/css/font-awesome-pro-v6-6.2.0/css/all.min.css">
   <script src="https://cdn.tailwindcss.com"></script>
   <!-- website style -->
   <link rel="stylesheet" href="../assets/css/style.css">
   <link rel="stylesheet" href="../assets/css/style-bg.css">
   <link rel="stylesheet" href="../assets/css/404.css">
   <link rel="stylesheet" href="../assets/css/style-box.css">
   <!-- skinstyle -->
   <canvas id="headCanvas_<?php echo $skin_row['id']; ?>" width="64" height="64" class="absolute"></canvas>
   <script src="https://cdn.jsdelivr.net/npm/skinview3d@3.1.0/bundles/skinview3d.bundle.min.js"></script>

   <script src="https://unpkg.com/skinview3d@1.8.0/dist/skinview3d.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.153.0/three.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.153.0/controls/OrbitControls.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
   <title>PMCSHOP BACKEND</title>
   <script>
      tailwind.config = {
         darkMode: 'class',
      }
   </script>
</head>

<body>
   <?php if ($user = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

      <?php if ($_SESSION['user_id'] && htmlspecialchars($user['level']) == "admin") { ?>
         <?php include('../backend/api/users.php'); //ดึงข้อมูลจากตาราง Users
         ?>
         <?php include("../backend/body/navbar.php") //ดึง navbar
         ?>
         <?php include('../backend/api/user-count-online.php'); //ดึงข้อมูลจากตาราง users แล้วนับว่ามีใคร online
         ?>
         <?php include('../backend/api/user-count.php'); //ดึงข้อมูลจากตาราง users แล้วนับจํานวน
         ?>
         <?php include("../backend/body/aside.php") //ดึง aside
         ?>

         <script src="https://demo.themesberg.com/windster/app.bundle.js"></script> <!-- berger responsive -->
         <?php include("../backend/route.php") //ดึงการเชื่อมต่อ URL Route 
         ?>

         <?php include("../backend/body/footer.php") //ดึงข้อมูลจาก Footer
         ?>
      <?php } else {
         include('../body/navbar.php');
         include('../page/404.php');
      } ?>
   <?php } ?>
   <script async defer src="https://buttons.github.io/buttons.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script> <!-- API กราฟ -->
   <script src="../../assets/js/app.js"></script> <!-- ดึงข้อมูลกราฟ app.js -->

</body>

</html>