<?php
include("../backend/api/skin-download-page.php"); //นับจํานวนข้อมูลทั้งหมด
include("../backend/api/skin-download-data.php"); //นับจํานวนหน้า
include("../backend/api/skin-download-count-data-page.php"); //คํานวนนับเฉพาะหน้า
?>

<?php
foreach ($skins as $skin_row) {
    $date = date_create($skin_row['create_at']);
    $date_format = date_format($date, "d/m/Y");

    $size = $skin_row['width'] . " x " . $skin_row['height'];
    $time = $skin_row['time_data'];
?>
    <div class="lg:ml-64 pt-25">
        <div class="content-skin-nav px-20 grid grid-cols-2 ">
            <div class="content-1">
                <h1 class="text-lg lg:text-3xl leading-none font-bold text-slate-700">รหัสสินค้า: c<?php echo $skin_row['id']; ?></h1>
            </div>
            <div class="content-2 flex justify-end gap-5">
                <a href="?page=<?php echo max(1, $page - 1); ?>" class="border border-gray-300 rounded-full w-10 h-10 flex justify-center items-center"><i class="fa-solid fa-arrow-left"></i></a>
                <a href="?page=<?php echo min($totalPages, $page + 1); ?>" class="border border-gray-300 rounded-full w-10 h-10 flex justify-center items-center"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="grid grid-cols-1 xl:grid-cols-2 p-2">

            <div class="box-skin">
                <div class="relative p-4 w-full max-h-full">
                    <div class="content-skin-menu">
                    </div>
                    <div class="relative bg-f6 rounded-lg p-15">
                        <div class="flex justify-center">
                            <canvas id="skin_container_<?php echo $skin_row['id']; ?>" class="rounded-t-3xl cursor-move"></canvas>
                        </div>
                        <div class="flex flex-col md:p-5 rounded-b-3xl bg-gray-800 text-white pt-3 pb-3">
                            <div class="flex justify-center">
                                <div class="grid grid-cols-4 gap-3 ">
                                    <button id="dropdownDividerButton_layers_<?php echo $skin_row['id']; ?>" data-dropdown-toggle="dropdownDivider_layers_<?php echo $skin_row['id']; ?>" class="text-white bg-gray-400 flex  font-medium text-sm px-5 py-2.5 text-center bg-opacity-25 w-12 h-12 rounded-full xl:w-full xl:h-full items-center justify-center" type="button">
                                        <i class="fa-sharp-duotone fa-regular fa-layer-group"></i><span class="hidden 2xl:inline">&nbsp;Layers</span>
                                    </button>
                                    <button id="dropdownDividerButton_animation_<?php echo $skin_row['id']; ?>" data-dropdown-toggle="dropdownDivider_animation_<?php echo $skin_row['id']; ?>" class="text-white bg-gray-400 flex  font-medium text-sm px-5 py-2.5 text-center bg-opacity-25 w-12 h-12 rounded-full xl:w-full xl:h-full items-center justify-center" type="button">
                                        <i class="fa-regular fa-person-walking"></i><span class="hidden 2xl:inline">&nbsp;Animation</span>
                                    </button>
                                    <a href="../../../assets/image/skin-file/<?php echo $skin_row['file']; ?>" download="IDc<?php echo $skin_row['id']; ?>">
                                        <button class="text-white bg-gray-400 flex  font-medium text-sm px-5 py-2.5 text-center bg-opacity-25 w-12 h-12 rounded-full xl:w-full xl:h-full items-center justify-center" type="button">
                                            <i class="fa-solid fa-download"></i><span class="hidden 2xl:inline">&nbsp;Download</span>
                                        </button>
                                    </a>
                                    <button class="text-white bg-gray-400 flex  font-medium text-sm px-5 py-2.5 text-center bg-opacity-25 w-12 h-12 rounded-full xl:w-full xl:h-full items-center justify-center" type="button" onclick="captureSkin()">
                                        <i class="fa-duotone fa-solid fa-camera-retro"></i><span class="hidden 2xl:inline">&nbsp;Screenshots</span>
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

            <div class="flex items-center  justify-center flex-col w-full">
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
                    <a href="#" class="block p-6 bg-white shadow w-full rounded-lg">
                        <!-- <button type="button" onclick="location='/assets/page/customer_downloader.php?page=<?= $skin_row['id'] ?>'" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-full">CustomerSkin Download</button> -->
                        <div class="grid grid-cols-2 gap-2">
                            <button type="button" class="focus:outline-none text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 w-full"><i class="fa-duotone fa-solid fa-gears"></i> แก้ไขสกิน</button>
                            <button class="focus:outline-none text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 w-full" onclick="copyCustomURL()"><i class="fa-duotone fa-solid fa-link-horizontal"></i> คัดลอกลิงก์</button>
                        </div>
                        <p id="status" style="color: green; margin-top: 10px;"></p>
                        <hr class="mt-3 mb-3">
                        <span>สอบถามเพิ่มเติมติดต่อเกี่ยวกับระบบ <span class="text-red-500">pmcshop</span></span>
                    </a>
                </div>
            </div>
        </div>
        <?php include('../backend/api/url.php'); ?>
        <?php include('../backend/api/icon.php'); ?>
        <?php include('../backend/api/skin_Data.php'); ?>

    <?php } ?>
    </div>