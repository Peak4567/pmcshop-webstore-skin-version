<?php
include("../backend/api/skin-list-search.php"); //ดึงข้อมูลการค้นหา
include("../backend/api/skin-list-count-rows.php"); //ดึงข้อมูลจํานวนแถวทั้งหมด
include("../backend/api/skin-list.php"); //ดึงข้อมูลจากฐานข้อมูล
include("../backend/api/skin-list-count-page.php"); //ดึงข้อมูลนับจํานวนหน้า
?>

<div class="lg:ml-64 pt-20">
    <div class="mx-4">
        <div class="flex justify-start p-4 grid grid-cols-1 xl:grid-cols-2">
            <div class="text">
                <span class="text-lg lg:text-3xl leading-none font-bold text-slate-700 dark:text-white">รายการสกิน</span>
                <p class="text-xs lg:text-lg text-gray-500">ใช้สําหรับเพิ่มข้อมูลแก้ไขข้อมูลลบข้อมูลจากฐานข้อมูล</p>
            </div>

            <div class="flex flex-wrap justify-end items-center gap-2 p-2">
                <button data-modal-target="static-modal-add" data-modal-toggle="static-modal-add" type="button"
                    class="text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium text-sm px-3 py-2 text-center me-2 rounded-md shadow-md transition-all duration-200 flex items-center min-w-[40px]">
                    <i class="fa-solid fa-plus mr-0 md:mr-1"></i>
                    <span class="hidden md:inline">เพิ่มข้อมูล</span>
                </button>

                <div class="flex-none w-full sm:w-80">
                    <form action="/" class="flex items-center py-2 mx-3" method="POST">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search" name="input_search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="ค้นหาไอดีสกิน" required />
                        </div>
                        <button type="submit"
                            class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal addfile -->
        <!-- Modal -->
        <div id="static-modal-add" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 overflow-x-hidden overflow-y-auto">
            <div class="relative w-full max-w-2xl bg-white rounded-lg shadow-lg">
                <!-- Header -->
                <div class="flex items-center justify-between px-6 py-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">เพิ่มข้อมูล</h3>
                    <button type="button" data-modal-hide="static-modal-add"
                        class="text-gray-400 hover:text-gray-900 hover:bg-gray-200 rounded-lg p-1.5">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1l12 12M13 1L1 13" />
                        </svg>
                    </button>
                </div>

                <!-- Body -->
                <form action="/assets/backend/api/AddskinFile.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="px-6 py-5 space-y-4 text-black">
                        <div>
                            <label for="file" class="block mb-2 text-sm font-medium text-gray-700">อัปโหลดไฟล์</label>
                            <input type="file" name="file" id="file"
                                accept="image/png"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" />
                            <p class="mt-1 text-xs text-gray-500">รองรับเฉพาะ .png</p>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="flex justify-end items-center gap-3 px-6 py-4 border-t rounded-b">
                        <button type="submit" name="submit"
                            class="inline-flex justify-center items-center px-5 py-2.5 text-sm font-medium text-white bg-green-600 hover:bg-green-700 rounded-lg">
                            <i class="fa-solid fa-floppy-disk mr-2"></i> ยืนยัน
                        </button>
                        <button data-modal-hide="static-modal-add" type="button"
                            class="inline-flex justify-center items-center px-5 py-2.5 text-sm font-medium text-white bg-red-600 hover:bg-red-700 rounded-lg">
                            ยกเลิก
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md rounded-tl-2xl rounded-tr-2xl">


            <div class="relative overflow-x-auto" id="table-container">
                <table class="w-full text-sm rtl:text-right text-gray-500 text-center border-2 border-gray-200" id="data-table">
                    <thead class="text-xs text-white uppercase bg-blue-600 rounded-tl-lg rounded-tr-lg">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-tl-2xl whitespace-nowrap overflow-hidden overflow-ellipsis">
                                #รหัสสินค้า
                            </th>

                            <th scope="col" class="px-6 py-3 whitespace-nowrap overflow-hidden overflow-ellipsis hidden 2xl:table-cell">
                                รูปภาพ
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap overflow-hidden overflow-ellipsis">
                                ความละเอียด
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap overflow-hidden overflow-ellipsis hidden md:table-cell">
                                โมเดล
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap overflow-hidden overflow-ellipsis hidden 2xl:table-cell">
                                ประเภทไฟล์
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap overflow-hidden overflow-ellipsis hidden 2xl:table-cell">
                                วันที่
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap overflow-hidden overflow-ellipsis hidden 2xl:table-cell">
                                เวลา
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap overflow-hidden overflow-ellipsis">
                                ตัวอย่าง
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap overflow-hidden overflow-ellipsis rounded-tr-2xl">
                                ลบทิ้ง
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (count($skins) > 0): ?>
                            <?php foreach ($skins as $skin_row): ?>
                                <?php
                                $date = date_create($skin_row['create_at']);
                                $date_format = date_format($date, "d/m/Y");
                                $id = "#c" . $skin_row['id'];
                                ?>
                                <tr class="bg-white border-b ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        <?= htmlspecialchars($id) ?>
                                    </th>
                                    <td class="px-6 py-4 text-center align-middle hidden 2xl:table-cell">
                                        <canvas id="headCanvas_<?= $skin_row['id']; ?>" width="64" height="64" class="mx-auto"></canvas>
                                    </td>

                                    <td class="px-6 py-4"><?= $skin_row['width'] . 'x' . $skin_row['height'] ?></td>
                                    <td class="px-6 py-4 hidden md:table-cell"><?= htmlspecialchars($skin_row['model']) ?></td>
                                    <td class="px-6 py-4 hidden 2xl:table-cell"><?= htmlspecialchars($skin_row['file_type']) ?></td>
                                    <td class="px-6 py-4 hidden 2xl:table-cell"><?= $date_format ?></td>
                                    <td class="px-6 py-4 hidden 2xl:table-cell"><?= htmlspecialchars($skin_row['time_data']) ?></td>
                                    <td class="px-6 py-4 text-center align-middle">
                                        <div class="flex justify-center items-center">
                                            <a href="/backend/download?page=<?= $skin_row['id'] ?>"
                                                class="text-white bg-green-600 hover:bg-green-700 font-medium text-sm px-5 py-2.5 text-center rounded-full w-10 h-10 flex items-center justify-center shadow-md transition-all duration-200">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center align-middle">
                                        <form action="/assets/backend/api/DeleteskinFile.php" method="POST" class="inline-block">
                                            <input type="hidden" name="id" value="<?= $skin_row['id'] ?>">
                                            <button type="submit" name="delete"
                                                class="text-white bg-red-600 hover:bg-red-700 flex items-center justify-center font-medium text-sm px-5 py-2.5 text-center rounded-full w-10 h-10 shadow-md transition-all duration-200 mx-auto">
                                                <i class="fa-sharp-duotone fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>


                                </tr>
                                <?php include('../backend/api/head_Data.php'); ?>
                                <?php include('../backend/api/skin_Data.php'); ?>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr class="bg-red-500/50">
                                <th scope="row" class="px-6 py-4 font-xl text-red-100 text-center" colspan="100%">ไม่มีข้อมูล!</th>
                            </tr>
                        <?php endif; ?>
                    </tbody>

                </table>

            </div>

        </div>
        <nav class="pagination py-5">
            <ul class="flex items-center space-x-2 justify-center text-base">

                <!-- ปุ่มไปหน้าแรก -->
                <li>
                    <a href="?page=1"
                        class="flex items-center justify-center px-4 h-10 text-white bg-blue-600 rounded-l-lg shadow-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition">
                        <i class="fa-solid fa-angles-left"></i>
                    </a>
                </li>

                <!-- ปุ่มก่อนหน้า -->
                <li>
                    <a href="?page=<?php echo max(1, $page - 1); ?>"
                        class="flex items-center justify-center px-4 h-10 text-white bg-blue-600 shadow-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition">
                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                    </a>
                </li>

                <!-- ลูปหน้า -->
                <?php for ($i = $startPage; $i <= $endPage; $i++): ?>
                    <li>
                        <a href="?page=<?php echo $i; ?>"
                            class="px-4 py-2 rounded-md font-medium shadow-md transition
                   <?= $i == $page
                        ? 'bg-blue-700 text-white'
                        : 'bg-white text-blue-700 hover:bg-blue-100' ?>">
                            <?= $i ?>
                        </a>
                    </li>
                <?php endfor; ?>

                <!-- ปุ่มถัดไป -->
                <li>
                    <a href="?page=<?php echo min($totalPages, $page + 1); ?>"
                        class="flex items-center justify-center px-4 h-10 text-white bg-blue-600 shadow-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition">
                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                    </a>
                </li>

                <!-- ปุ่มไปหน้าสุดท้าย -->
                <li>
                    <a href="?page=<?php echo $totalPages; ?>"
                        class="flex items-center justify-center px-4 h-10 text-white bg-blue-600 rounded-r-lg shadow-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition">
                        <i class="fa-solid fa-angles-right"></i>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</div>