<?php

if (isset($_SESSION['success_login']) && !empty($_SESSION['success_login'])) {
    echo "<script>window.location.href = '/home';</script>";
    exit;
}
?>


<main class="transition-fade" id="swup">
    <div class="relative h-screen overflow-hidden">
        <div
            class="absolute top-20 left-2 w-[500px] h-[500px] bg-blue-500 rounded-full mix-blend-multiply filter blur-[150px] opacity-70 animate-blob">
        </div>
        <div
            class="absolute top-20 right-32 w-[500px] h-[500px] bg-[#1696ff80] rounded-full mix-blend-multiply filter blur-[150px] opacity-70 animate-blob animation-delay-2000">
        </div>
        <div
            class="hidden xl:block absolute bottom-10 left-32 w-[500px] h-[500px] bg-gradient-to-br from-white to-slate-100 rounded-full mix-blend-multiply filter blur-[150px] opacity-70 animate-blob animation-delay-4000">
        </div>

        <div class="pt-24">
            <h1
                class="text-center text-5xl/tight font-bold bg-gradient-to-b from-sky-400 via-cyan-500 to-blue-600 bg-clip-text text-transparent">
                LOGIN
            </h1>

            <h1 class="text-center text-3xl font-semibold text-black">
                เข้าสู่ระบบ</h1>
        </div>

        <div class="relative">
            <div class="flex min-h-full flex-col justify-center pb-20 py-12 sm:px-6 lg:px-8">

                <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-lg">
                    <div class="bg-white py-8 px-8 shadow sm:rounded-lg sm:px-10">

                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="bg-white px-2 text-gray-500">เข้าสู่ระบบด้วย</span>
                            </div>
                        </div>

                        <div class="my-2 w-full flex flex-col gap-2">
                            <button
                                class="w-full flex justify-center items-center gap-2 bg-white text-sm text-red-600 p-2 rounded-md hover:bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" class="w-5" preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 0C5.372 0 0 5.373 0 12s5.372 12 12 12c6.627 0 12-5.373 12-12S18.627 0 12 0zm.14 19.018c-3.868 0-7-3.14-7-7.018c0-3.878 3.132-7.018 7-7.018c1.89 0 3.47.697 4.682 1.829l-1.974 1.978v-.004c-.735-.702-1.667-1.062-2.708-1.062c-2.31 0-4.187 1.956-4.187 4.273c0 2.315 1.877 4.277 4.187 4.277c2.096 0 3.522-1.202 3.816-2.852H12.14v-2.737h6.585c.088.47.135.96.135 1.474c0 4.01-2.677 6.86-6.72 6.86z"
                                            fill="currentColor" />
                                    </g>
                                </svg>
                                เข้าสู่ระบบด้วย Google
                            </button>
                            <button
                                class="w-full flex justify-center items-center gap-2 bg-white text-sm text-indigo-600 p-2 rounded-md hover:bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" class="w-5" preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 1024 1024">
                                    <path
                                        d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-92.4 233.5h-63.9c-50.1 0-59.8 23.8-59.8 58.8v77.1h119.6l-15.6 120.7h-104V912H539.2V602.2H434.9V481.4h104.3v-89c0-103.3 63.1-159.6 155.3-159.6c44.2 0 82.1 3.3 93.2 4.8v107.9z"
                                        fill="currentColor" />
                                </svg>
                                เข้าสู่ระบบด้วย Facebook
                            </button>
                        </div>
                        <?php
                        $errors = $_SESSION['login_errors'] ?? [];
                        if (!empty($errors)) { ?>
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mt-2">
                                <ul>
                                    <?php foreach ($errors as $e) { ?>
                                        <li><?= htmlspecialchars($e) ?></li>
                                    <?php  } ?>
                                </ul>
                            </div>
                        <?php }unset($_SESSION['login_errors'], $_SESSION['old_input']); ?>

                        <form class="space-y-6 mt-3" action="/assets/api/login.php" method="POST">
                            <div>
                                <label for="username" class="block text-sm font-medium text-gray-700">
                                    ชื่อผู้ใช้งาน *
                                </label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-regular fa-user text-sky-500 opacity-60 "></i>
                                    </div>
                                    <input id="username" name="username" type="username" required placeholder="example" class="block w-full appearance-none rounded-md border border-gray-300 px-10 py-2 ps-9 placeholder-gray-400 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-2 focus:ring-sky-400 sm:text-sm transition-all duration-200" />
                                </div>
                            </div>


                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">รหัสผ่าน *</label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-regular fa-key text-sky-500 opacity-60"></i>
                                    </div>
                                    <input id="password" name="password" type="password" autocomplete="current-password" required placeholder="***********" class="block w-full appearance-none rounded-md border border-gray-300 px-10 py-2 ps-9 placeholder-gray-400 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-2 focus:ring-sky-400 sm:text-sm transition-all duration-200" />
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember-me" name="remember-me" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-400 text-white focus:ring-fuchsia-500">
                                    <label for="remember-me"
                                        class="ml-2 block text-sm text-gray-900">จดจำฉันตลอด</label>
                                </div>

                                <div class="text-sm">
                                    <a href="#"
                                        class="font-medium text-sky-500 hover:text-blue-600 transition-colors duration-200">
                                        คุณลืมรหัสผ่านงั้นเหรอ?
                                    </a>

                                </div>
                            </div>
                            <!-- Error messages -->
                            <div id="errorContainer" class="text-red-600 text-sm space-y-1"></div>
                            <div>
                                <button type="submit"
                                    class="w-full text-white bg-gradient-to-r from-sky-500 to-blue-600 hover:bg-gradient-to-r hover:from-sky-600 hover:to-blue-700 focus:ring-4 focus:outline-none focus:ring-sky-300 transition-all font-semibold rounded-md text-md px-3 py-1.5 text-center shadow-md duration-300">
                                    เข้าสู่ระบบใช้งาน
                                </button>
                            </div>
                        </form>

                        <div class="mt-6">
                            <div class="text-sm mt-3 space-x-1 flex items-center justify-center">
                                <div class="flex items-center">
                                    <p class="ml-2 block text-gray-900">คุณยังไม่มีบัญชีเหรอ</p>
                                </div>

                                <a href="/sign-up"
                                    class="font-medium text-sky-600 hover:text-blue-700 transition-colors duration-200">
                                    เริ่มต้นบัญชีใหม่ของคุณ!
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>