<?php
include("assets/api/config.php"); //Import Config
include("assets/backend/api/variable.php"); // รับค่าตัวแปร
include("assets/backend/api/customer-list-all.php"); //ดึงข้อมูลตารางทั้งหมด
include("assets/backend/api/customer-page.php"); //ดึงข้อมูล page

?>
<?php
if (!empty($skins)) {
    $skin_row = $skins[0]; // แสดงแถวแรก

    $date = date_create($skin_row['create_at']);
    $date_format = date_format($date, "d/m/Y");

    $size = $skin_row['width'] . " x " . $skin_row['height'];
    $time = $skin_row['time_data'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- stylecss -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="./assets/css/font-awesome-pro-v6-6.2.0/css/all.min.css">
        <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/404.css">

        <!-- skinmodel -->
        <canvas id="headCanvas_<?php echo $skin_row['id']; ?>" width="64" height="64" class="absolute"></canvas>
        <script src="https://cdn.jsdelivr.net/npm/skinview3d@3.1.0/bundles/skinview3d.bundle.min.js"></script>
        <script src="https://unpkg.com/skinview3d@1.8.0/dist/skinview3d.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.153.0/three.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.153.0/controls/OrbitControls.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    </head>

    <body>
        <div class="container mx-auto pt-[50px]">
            <div class="content-skin-nav p-5 grid grid-cols-2">
                <div class="content-1">
                    <h1 class="text-lg lg:text-3xl leading-none font-bold text-slate-700">รหัสสินค้า: c<?php echo $skin_row['id']; ?></h1>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 p-2">
                <div class="box-skin">
                    <div class="relative p-4 w-full max-h-full">
                        <div class="content-skin-menu">
                        </div>
                        <div class="relative bg-f6 rounded-lg shadow p-15">
                            <div class="flex justify-center">
                                <canvas id="skin_container_<?php echo $skin_row['id']; ?>" class="rounded-t-3xl cursor-move"></canvas>
                            </div>
                            <div class="flex flex-col md:p-5 rounded-b-3xl bg-gray-800 text-white pt-3 pb-3">
                                <div class="flex justify-center items-center">
                                    <div class="grid grid-cols-3 gap-3 ">
                                        <button id="dropdownDividerButton_layers_<?php echo $skin_row['id']; ?>" data-dropdown-toggle="dropdownDivider_layers_<?php echo $skin_row['id']; ?>" class="text-white bg-gray-400 flex  font-medium text-sm px-5 py-2.5 text-center bg-opacity-25 w-12 h-12 rounded-full xl:w-full xl:h-full items-center justify-center" type="button">
                                            <i class="fa-sharp-duotone fa-regular fa-layer-group"></i><span class="hidden xl:inline">&nbsp;Layers</span>
                                        </button>
                                        <button id="dropdownDividerButton_animation_<?php echo $skin_row['id']; ?>" data-dropdown-toggle="dropdownDivider_animation_<?php echo $skin_row['id']; ?>" class="text-white bg-gray-400 flex  font-medium text-sm px-5 py-2.5 text-center bg-opacity-25 w-12 h-12 rounded-full xl:w-full xl:h-full items-center justify-center" type="button">
                                            <i class="fa-regular fa-person-walking"></i><span class="hidden xl:inline">&nbsp;Animation</span>
                                        </button>

                                        <button class="text-white bg-gray-400 flex  font-medium text-sm px-5 py-2.5 text-center bg-opacity-25 w-12 h-12 rounded-full xl:w-full xl:h-full items-center justify-center" type="button">
                                            <i class="fa-duotone fa-solid fa-camera-retro"></i><span class="hidden xl:inline">&nbsp;Screenshots</span>
                                        </button>
                                    </div>
                                </div>
                                <div id="dropdownDivider_layers_<?php echo $skin_row['id']; ?>" class="z-10 hidden bg-gray-700 divide-y rounded-lg shadow w-44 p-5">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton_layers_<?php echo $skin_row['id']; ?>">
                                        <h1 class="text-2xl">Layers</h1>
                                        <li>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" value="" id="toggleHead_<?php echo $skin_row['id']; ?>" class="sr-only peer" checked>
                                                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">ส่วนหัว</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" value="" id="toggleLeftArm_<?php echo $skin_row['id']; ?>" class="sr-only peer" checked>
                                                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">แขนซ้าย</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" value="" id="toggleRightArm_<?php echo $skin_row['id']; ?>" class="sr-only peer" checked>
                                                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">แขนขวา</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" value="" id="toggleBody_<?php echo $skin_row['id']; ?>" class="sr-only peer" checked>
                                                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">ลําตัว</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" value="" id="toggleLeftLeg_<?php echo $skin_row['id']; ?>" class="sr-only peer" checked>
                                                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">ขาซ้าย</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" value="" id="toggleRightLeg_<?php echo $skin_row['id']; ?>" class="sr-only peer" checked>
                                                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">ขาขวา</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div id="dropdownDivider_animation_<?php echo $skin_row['id']; ?>" class="z-10 hidden bg-gray-700 divide-y rounded-lg shadow w-44 p-5">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton_animation_<?php echo $skin_row['id']; ?>">
                                        <h1 class="text-2xl">Animation</h1>
                                        <li>
                                            <div class="flex items-center mb-4">
                                                <input type="radio" id="normal_<?php echo $skin_row['id']; ?>" value="" name="animation_<?php echo $skin_row['id']; ?>" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" selected>
                                                <label for="normal_<?php echo $skin_row['id']; ?>" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">ไม่มี</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center mb-4">
                                                <input type="radio" id="walk_<?php echo $skin_row['id']; ?>" value="" name="animation_<?php echo $skin_row['id']; ?>" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="walk_<?php echo $skin_row['id']; ?>" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">เดิน</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center mb-4">
                                                <input type="radio" id="slowRun_<?php echo $skin_row['id']; ?>" value="" name="animation_<?php echo $skin_row['id']; ?>" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="slowRun_<?php echo $skin_row['id']; ?>" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">วิ่ง</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center mb-4">
                                                <input type="radio" id="fly_<?php echo $skin_row['id']; ?>" value="" name="animation_<?php echo $skin_row['id']; ?>" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="fly_<?php echo $skin_row['id']; ?>" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">บิน</label>
                                            </div>
                                        </li>
                                        <li>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" value="" id="rotate_<?php echo $skin_row['id']; ?>" class="sr-only peer">
                                                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">หมุน</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center flex-col w-full ">
                    <div class="flex space-x-1 bg-white p-2 justify-center mx-10 shadow w-full mb-2 rounded-lg">
                        <div class="flex items-center space-x-1">
                            <div class="text-blue-500 bg-blue-200 p-2 rounded-full w-8 h-8 flex justify-center items-center"><i class="fa-duotone fa-solid fa-calendar"></i></div>
                            <span class="text-[9px] lg:text-[15px] text-gray-500 font-bold">วัน:&nbsp;<?= $date_format ?></span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <div class="text-red-500 bg-red-200 p-2 rounded-full w-8 h-8 flex justify-center items-center"><i class="fa-duotone fa-solid fa-clock-eight"></i></div>
                            <span class="text-[9px] lg:text-[15px] text-gray-500 font-bold">เวลา:&nbsp;<?= $time ?></span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <div class="text-green-500 bg-green-200 p-2 rounded-full w-8 h-8 flex justify-center items-center"><i class="fa-duotone fa-solid fa-image"></i></div>
                            <span class="text-[9px] lg:text-[15px] text-gray-500 font-bold">ขนาด:&nbsp;<?= $size ?></span>
                        </div>
                    </div>
                    <div class="flex justify-center items-center w-full mb-2">
                        <div class="block p-6 bg-white shadow w-full rounded-lg">
                            <div class="grid grid-cols-2 gap-2">
                                <a type="button" href='/assets/image/skin-file/<?php echo $skin_row['file']; ?>' class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800 w-full text-center" download="IDc<?php echo $skin_row['id']; ?>"><i class="fa-duotone fa-solid fa-download"></i> ดาวน์โหลด</a>
                                <a type="button" href="https://www.facebook.com/PmcShopTH" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 w-full text-center"><i class="fa-duotone fa-solid fa-bug"></i> แจ้งปัญหา</a>
                            </div>
                            <hr class="mt-3 mb-3">
                            <span>สอบถามเพิ่มเติมติดต่อเกี่ยวกับระบบ <span class="text-red-500">pmcshop</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('./assets/backend/api/icon.php'); ?>
            <?php include('./assets/backend/api/skin_Data.php'); ?>
        <?php } ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    </body>

    </html>