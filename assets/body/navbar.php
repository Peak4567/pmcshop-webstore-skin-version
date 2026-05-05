<nav class="bg-white fixed w-full z-20 top-0 start-0 relative shadow-sm p-2">
  <div class="max-w-screen-xl flex flex-wrap  justify-between mx-auto p-2">
    <div class="flex items-center w-full lg:w-auto md:order-2 space-x-3 px-5">
      <div class="hidden lg:flex items-center space-x-4">
        <?php if (isset($_SESSION["success_login"]) && !empty($_SESSION["success_login"])) { ?>
          <form action="/assets/api/logout.php" method="POST">
            <button type="submit"
              class="text-blue-600 font-medium rounded-4xl text-sm px-4 py-2 text-center border-3 hover:text-blue-700 font-semibold bg-transparent border-blue-600 hover:border-blue-700">
              ออกจากระบบ
            </button>
          </form>
        <?php } else { ?>
          <a type="button" href="/login"
            class="text-blue-600 font-medium rounded-4xl text-sm px-4 py-2 text-center border-3 hover:text-blue-700 font-semibold">
            เข้าสู่ระบบ
          </a>
        <?php } ?>

        <a href="#" class="block py-2 px-3 text-gray-600 font-semibold" aria-current="page">
          <i class="fa-regular fa-handshake-simple"></i> สมัครพาร์ทเนอร์
        </a>
      </div>
      <a href="https://discord.gg/QkCbzqxmvf" class="lg:hidden ml-auto">
        <i class="fa-solid fa-shop text-gray-400 text-xl"></i>
      </a>
      <?php if(isset($_SESSION["success_login"]) && !empty($_SESSION["success_login"])){ ?>

        <details class="relative inline-block text-left">
          <summary class="list-none cursor-pointer w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
            <i class="fa-solid fa-user text-gray-600"></i>
          </summary>

          <div class="absolute right-0 z-10 mt-7 w-52 origin-top-right rounded-lg bg-white shadow-lg">
            <div class="py-3 px-4 border-b text-center text-gray-200">
              <p class="text-gray-800 font-semibold"><?php echo htmlspecialchars($user['username']); ?></p>
              <p class="text-sm text-gray-500 mt-1">
              <p class="text-sm text-gray-500 mt-1"> <i class="fa-regular fa-user-secret"></i> ตําแหน่ง : <?php echo htmlspecialchars($user['level']); ?>
              </p>
           
            </div>
            <ul class="py-1 text-sm text-gray-700">
              <li>
                <a href="/" class="block px-4 py-2 hover:bg-gray-100">
                  <i class="fa-solid fa-handshake"></i> ร่วมงานกับเรา
                </a>
              </li>
              <li>
                <a href="https://web.facebook.com/PmcShopTH" class="block px-4 py-2 hover:bg-gray-100">
                  <i class="fa-solid fa-phone-volume"></i> ติดต่อทีมงาน
                </a>
              </li>
            </ul>
            <div class="border-t text-gray-200">
              <form action="https://krachabmitr.online/" method="POST">
                <button type="submit" class="w-full text-left px-4 py-2 text-gray-600 hover:bg-gray-100 font-semibold">
                  <i class="fa-regular fa-globe"></i> เว็บไซต์หลักของเรา
                </button>
              </form>
             <?php if ($_SESSION['user_id'] && htmlspecialchars($user['level']) == "admin"){ ?>
               <form action="/backend" method="POST">
                <button type="submit" class="w-full text-left px-4 py-2 text-gray-600 hover:bg-gray-100 font-semibold">
                  <i class="fa-regular fa-sliders"></i> ระบบหลังบ้าน
                </button>
              </form>
              <?php } ?>
            </div>
          </div>
        </details>
      <?php } ?>

    </div>


    <div class="items-center justify-between hidden w-full lg:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul
        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
        <li>
          <a href="/home" class="block py-2 px-3 text-gray-600 font-semibold" aria-current="page">หน้าหลัก</a>
        </li>
        <li>
          <a href="/service" class="block py-2 px-3 text-gray-600 font-semibold" aria-current="page"><i
              class="fa-light fa-cart-shopping-fast "></i> บริการ</a>
        </li>
        <li>
          <a href="https://web.facebook.com/PmcShopTH" class="block py-2 px-3 text-gray-600 font-semibold" aria-current="page"><i class="fa-regular fa-store"></i> สั่งงาน</a>
        </li>
        <li>
          <a href="/example" class="block py-2 px-3 text-gray-600 font-semibold"
            aria-current="page">ตัวอย่างงาน</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="flex justify-center">
    <div class="absolute top-1">
      <img src="/assets/image/pmcshop.png" alt="logo" width="80px">
    </div>
  </div>
</nav>

<nav class="fixed bottom-0 left-0 w-full bg-white shadow-md border-t border-gray-200 z-30 lg:hidden">
  <div class="max-w-screen-xl mx-auto flex justify-around items-center py-2 px-4">

    <a href="/home" class="flex flex-col items-center text-gray-600 hover:text-blue-600">
      <i class="fa-solid fa-house text-xl"></i>
      <span class="text-xs mt-1">หน้าหลัก</span>
    </a>

    <a href="/service" class="flex flex-col items-center text-gray-600 hover:text-blue-600">
      <i class="fa-light fa-cart-shopping-fast text-xl"></i>
      <span class="text-xs mt-1">บริการ</span>
    </a>

    <a href="https://web.facebook.com/PmcShopTH" class="flex flex-col items-center text-gray-600 hover:text-blue-600">
      <i class="fa-brands fa-facebook text-xl"></i>
      <span class="text-xs mt-1">สั่งงาน</span>
    </a>

    <a href="/example" class="flex flex-col items-center text-gray-600 hover:text-blue-600">
      <i class="fa-regular fa-images text-xl"></i>
      <span class="text-xs mt-1">ตัวอย่างงาน</span>
    </a>

    <?php if (isset($_SESSION["success_login"]) && !empty($_SESSION["success_login"])) { ?>
      <form action="/assets/api/logout.php" method="POST" class="flex flex-col items-center">
        <button type="submit"
          class="text-blue-600 hover:text-blue-700 text-xs font-semibold">
          ออกจากระบบ
        </button>
      </form>
    <?php } else { ?>
      <a href="/login" class="flex flex-col items-center text-blue-600 hover:text-blue-700 text-xs font-semibold">
        เข้าสู่ระบบ
      </a>
    <?php } ?>

  </div>
</nav>