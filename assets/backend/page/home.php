 <div>
     <div class="flex overflow-hidden bg-white dark:bg-[#2F3640] pt-16">
         <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
         <div id="main-content" class="h-full w-full bg-gray-50 dark:bg-[#353B48] relative overflow-y-auto lg:ml-64">
             <main>
                 <div
                     class="pt-6 px-4 w-full grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-4 gap-4">
                     <div class="bg-white dark:bg-[#2F3640] shadow rounded-lg p-4 sm:p-6 xl:p-8">
                         <div class="flex items-center justify-between">
                             <div class="flex items-center space-x-4">
                                 <div
                                     class="flex items-center justify-center w-14 h-14 text-green-500 bg-green-100 rounded-lg">
                                     <i class="fa-regular fa-sack text-2xl"></i>
                                     <span class="sr-only">Viewers</span>
                                 </div>
                                 <div>
                                     <span class="text-2xl sm:text-3xl font-bold text-slate-700 dark:text-white">0
                                     </span>
                                     <h3 data-i18n="earnings" class="text-base font-normal text-gray-500 dark:text-gray-400">
                                         รายได้สุทธิ</h3>
                                 </div>
                             </div>
                             <div class="flex flex-col items-center space-y-2">
                                 <i class="fa-light fa-chart-line-up text-emerald-500 text-5xl"></i>
                                 <span
                                     class="flex items-center space-x-1 text-emerald-500 text-sm font-bold bg-green-100 px-4 py-0.5 rounded-full">
                                     <i class="fa-light fa-arrow-trend-up"></i>
                                     <span>+25%</span>
                                 </span>
                             </div>
                         </div>
                     </div>
                     <div class="bg-white dark:bg-[#2F3640] shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                         <div class="flex items-center justify-between">
                             <div class="flex items-center space-x-4">
                                 <div class="flex items-center justify-center w-14 h-14 text-red-500 bg-red-100 rounded-lg">
                                     <i class="fa-regular fa-user-group text-2xl"></i>
                                     <span class="sr-only">Viewers</span>
                                 </div>
                                 <div>
                                     <span class="text-2xl sm:text-3xl font-bold text-slate-700 dark:text-white">0
                                     </span>
                                     <h3 data-i18n="costs" class="text-base font-normal text-gray-500 dark:text-gray-400">
                                         ค่าใช้จ่าย</h3>
                                 </div>
                             </div>
                             <div class="flex flex-col items-center space-y-2">
                                 <i class="fa-light fa-chart-line-down text-red-500 text-5xl"></i>
                                 <span
                                     class="flex items-center space-x-1 text-red-500 text-sm font-bold bg-red-100 px-4 py-0.5 rounded-full">
                                     <i class="fa-light fa-arrow-trend-down"></i>
                                     <span>-25%</span>
                                 </span>
                             </div>
                         </div>
                     </div>
                     <div class="bg-white dark:bg-[#2F3640] shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                         <div class="flex items-center justify-between">
                             <div class="flex items-center space-x-4">
                                 <div
                                     class="flex items-center justify-center w-14 h-14 text-green-500 bg-green-100 rounded-lg">
                                     <i class="fa-regular fa-user-group text-2xl"></i>
                                     <span class="sr-only">Viewers</span>
                                 </div>
                                 <div>
                                     <span class="text-2xl sm:text-3xl font-bold text-slate-700 dark:text-white"><?= $onlineUsers ?><span
                                             data-i18n="peoples">คน</span></span>
                                     <h3 data-i18n="system_users"
                                         class="text-base font-normal text-gray-500 dark:text-gray-400">ผู้เข้าใช้งานระบบ
                                     </h3>
                                 </div>
                             </div>
                             <div class="flex flex-col items-center space-y-2">
                                 <i class="fa-light fa-chart-line-up text-emerald-500 text-5xl"></i>
                                 <span
                                     class="flex items-center space-x-1 text-emerald-500 text-sm font-bold bg-green-100 px-4 py-0.5 rounded-full">
                                     <i class="fa-light fa-arrow-trend-up"></i>
                                     <span>+25%</span>
                                 </span>
                             </div>
                         </div>
                     </div>
                     <div class="bg-white dark:bg-[#2F3640] shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                         <div class="flex items-center justify-between">
                             <div class="flex items-center space-x-4">
                                 <div
                                     class="flex items-center justify-center w-14 h-14 text-green-500 bg-green-100 rounded-lg">
                                     <i class="fa-regular fa-browser text-2xl"></i>
                                     <span class="sr-only">Viewers</span>
                                 </div>
                                 <div>
                                     <span class="text-2xl sm:text-3xl font-bold text-slate-700 dark:text-white"><?= htmlspecialchars($totalUsers) ?> <span
                                             data-i18n="peoples">คน</span></span>
                                     <h3 data-i18n="service_users"
                                         class="text-base font-normal text-gray-500 dark:text-gray-400">ผู้ใช้บริการ
                                     </h3>
                                 </div>
                             </div>
                             <div class="flex flex-col items-center space-y-2">
                                 <i class="fa-light fa-chart-line-up text-emerald-500 text-5xl"></i>
                                 <span
                                     class="flex items-center space-x-1 text-emerald-500 text-sm font-bold bg-green-100 px-4 py-0.5 rounded-full">
                                     <i class="fa-light fa-arrow-trend-up"></i>
                                     <span>+75%</span>
                                 </span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="pt-6 px-4">
                     <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
                         <div class="bg-white dark:bg-[#2F3640] shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
                             <div class="flex items-center justify-between mb-4">
                                 <div class="flex-shrink-0">
                                     <span data-i18n="earnings_per_year"
                                         class="text-2xl sm:text-3xl leading-none font-bold text-slate-700 dark:text-white">รายได้สุทธิอัตรารายปี</span>
                                 </div>
                                 <div class="flex items-center justify-end flex-1">
                                     <form>
                                         <select id="yearly"
                                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 px-5 mx-2">
                                             <option value="25">2568</option>
                                         </select>
                                     </form>
                                 </div>
                             </div>
                             <div id="labels-chart" class="px-2.5 rounded-lg"></div>
                         </div>
                         <div class="bg-white dark:bg-[#2F3640] shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                             <div class="mb-4 flex items-center justify-between">
                                 <div>
                                     <h3 data-i18n="transactions"
                                         class="text-xl font-bold text-slate-700 dark:text-white mb-2">ธุรกรรมล่าสุด
                                     </h3>
                                     <span data-i18n="transactions_info"
                                         class="text-base font-normal text-gray-500 dark:text-gray-400">รายการธุรกรรมล่าสุด
                                     </span>
                                 </div>
                                 <div class="flex-shrink-0">
                                     <a data-i18n="views" href="#"
                                         class="text-sm font-medium text-purple-600 hover:bg-gray-100 dark:text-purple-300 dark:hover:bg-[#353B48] rounded-lg p-2">
                                         ดูทั้งหมด</a>
                                 </div>
                             </div>
                             <div class="flex flex-col mt-8">
                                 <div class="overflow-x-auto rounded-lg">
                                     <div class="align-middle inline-block min-w-full">
                                         <div class="shadow overflow-hidden sm:rounded-lg">
                                             <table class="min-w-full divide-y divide-gray-200 dark:divide-[#2f3640]">
                                                 <thead class="bg-gray-50 dark:bg-[#353B48]">
                                                     <tr>
                                                         <th scope="col" data-i18n="transactions"
                                                             class="p-4 text-left text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                                             ธุรกรรม
                                                         </th>
                                                         <th scope="col" data-i18n="dates"
                                                             class="p-4 text-left text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                                             วันที่และเวลา
                                                         </th>
                                                         <th scope="col" data-i18n="amounts"
                                                             class="p-4 text-left text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                                             จำนวน
                                                         </th>
                                                     </tr>
                                                 </thead>
                                                 <tbody class="bg-white dark:bg-[#434a53]">
                                                     <tr>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 dark:text-white">
                                                             ชำระเงินจาก <span
                                                                 class="font-semibold text-gray-900 dark:text-purple-300">นายศรัณยกรฯ</span>
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-500 dark:text-gray-400">
                                                             27 มีนาคม, 2568
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900 dark:text-white">
                                                             1,500฿
                                                         </td>
                                                     </tr>
                                                     <tr class="bg-gray-50 dark:bg-[#434a53]">
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 dark:text-white">
                                                             ชำระเงินคืนที่ <span
                                                                 class="font-semibold text-gray-900 dark:text-purple-300">#00910</span>
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-500 dark:text-gray-400">
                                                             27 มีนาคม, 2568
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900 dark:text-white">
                                                             -3,790฿
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 dark:text-white">
                                                             ชำระเงินล้มเหลวจาก <span
                                                                 class="font-semibold text-gray-900 dark:text-purple-300">#087651</span>
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-500 dark:text-gray-400">
                                                             27 มีนาคม, 2568
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900 dark:text-white">
                                                             456,000฿
                                                         </td>
                                                     </tr>
                                                     <tr class="bg-gray-50 dark:bg-[#434a53]">
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 dark:text-white">
                                                             ชำระเงินจาก <span
                                                                 class="font-semibold text-gray-900 dark:text-purple-300">นายพีค</span>
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-500 dark:text-gray-400">
                                                             27 มีนาคม, 2568
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900 dark:text-white">
                                                             520฿
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 dark:text-white">
                                                             ชำระเงินจาก <span
                                                                 class="font-semibold text-gray-900 dark:text-purple-300">นายมิว</span>
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-500 dark:text-gray-400">
                                                             27 มีนาคม, 2568
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900 dark:text-white">
                                                             5฿
                                                         </td>
                                                     </tr>
                                                     <tr class="bg-gray-50 dark:bg-[#434a53]">
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 dark:text-white">
                                                             ชำระเงินจาก <span
                                                                 class="font-semibold text-gray-900 dark:text-purple-300">นายพีค</span>
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-500 dark:text-gray-400">
                                                             27 มีนาคม, 2568
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900 dark:text-white">
                                                             35฿
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 dark:text-white">
                                                             ชำระเงินจาก <span
                                                                 class="font-semibold text-gray-900 dark:text-purple-300">นายพีค</span>
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-normal text-gray-500 dark:text-gray-400">
                                                             27 มีนาคม, 2568
                                                         </td>
                                                         <td
                                                             class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900 dark:text-white">
                                                             1,346฿
                                                         </td>
                                                     </tr>
                                                 </tbody>
                                             </table>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-4 mt-5 2xl:grid-cols-2 xl:gap-4 my-4">
                         <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-2 gap-4">

                             <!-- Stats Cards -->

                             <div class="bg-white dark:bg-[#2F3640] p-4 rounded-lg shadow-md flex items-start space-x-4">
                                 <div class="w-12 h-12 flex items-center justify-center bg-red-100 text-red-500 rounded-full">
                                     <i class="fa-regular fa-box text-2xl"></i>
                                 </div>
                                 <div>
                                     <span class="text-3xl font-bold text-gray-800 dark:text-white">0</span>
                                     <p class="text-gray-500 dark:text-gray-400 text-sm">ยกเลิกคิว</p>
                                     <span class="text-green-500 dark:text-green-400 text-xs font-bold"><i
                                             class="fa-regular fa-square-arrow-up-right text-sm mr-0.5"></i> +1%</span>
                                 </div>
                             </div>

                             <div class="bg-white dark:bg-[#2F3640] p-4 rounded-lg shadow-md flex items-start space-x-4">
                                 <div
                                     class="w-12 h-12 flex items-center justify-center bg-green-100 text-green-500 rounded-full">
                                     <i class="fa-regular fa-truck text-2xl"></i>
                                 </div>
                                 <div>
                                     <span class="text-3xl font-bold text-gray-800 dark:text-white">0</span>
                                     <p class="text-gray-500 dark:text-gray-400 text-sm">ให้บริการ</p>
                                     <span class="text-red-500 dark:text-red-400 text-xs font-bold"><i
                                             class="fa-regular fa-square-arrow-up-right text-sm mr-0.5"></i> -1%</span>
                                 </div>
                             </div>

                             <div class="bg-white dark:bg-[#2F3640] p-4 rounded-lg shadow-md flex items-start space-x-4">
                                 <div
                                     class="w-12 h-12 flex items-center justify-center bg-purple-100 text-purple-500 rounded-full">
                                     <i class="fa-regular fa-box-open text-2xl"></i>
                                 </div>
                                 <div>
                                     <span class="text-3xl font-bold text-gray-800 dark:text-white">0</span>
                                     <p class="text-gray-500 dark:text-gray-400 text-sm">คิว</p>
                                     <span class="text-green-500 dark:text-green-400 text-xs font-bold"><i
                                             class="fa-regular fa-square-arrow-up-right text-sm mr-0.5"></i> +1%</span>
                                 </div>
                             </div>

                             <div class="bg-white dark:bg-[#2F3640] p-4 rounded-lg shadow-md flex items-start space-x-4">
                                 <div
                                     class="w-12 h-12 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full">
                                     <i class="fa-regular fa-clock text-2xl"></i>
                                 </div>
                                 <div>
                                     <span class="text-3xl font-bold text-gray-800 dark:text-white">0</span>
                                     <p class="text-gray-500 dark:text-gray-400 text-sm">รอให้บริการ</p>
                                     <span class="text-green-500 dark:text-green-400 text-xs font-bold"><i
                                             class="fa-regular fa-square-arrow-up-right text-sm mr-0.5"></i> +0%</span>
                                 </div>
                             </div>

                             <div class="bg-white dark:bg-[#2F3640] p-4 rounded-lg shadow-md flex items-start space-x-4">
                                 <div class="w-12 h-12 flex items-center justify-center bg-sky-100 text-sky-500 rounded-full">
                                     <i class="fa-regular fa-money-bill text-2xl"></i>
                                 </div>
                                 <div>
                                     <span class="text-3xl font-bold text-gray-800 dark:text-white">0฿</span>
                                     <p class="text-gray-500 dark:text-gray-400 text-sm">รายได้สนธิ</p>
                                     <span class="text-green-500 dark:text-green-400 text-xs font-bold"><i
                                             class="fa-regular fa-square-arrow-up-right text-sm mr-0.5"></i> +0%</span>
                                 </div>
                             </div>

                             <div class="bg-white dark:bg-[#2F3640] p-4 rounded-lg shadow-md flex items-start space-x-4">
                                 <div
                                     class="w-12 h-12 flex items-center justify-center bg-amber-100 text-amber-500 rounded-full">
                                     <i class="fa-regular fa-calendar-clock text-2xl"></i>
                                 </div>
                                 <div>
                                     <span class="text-3xl font-bold text-gray-800 dark:text-white">0</span>
                                     <p class="text-gray-500 dark:text-gray-400 text-sm">ดําเนินการ</p>
                                     <span class="text-red-500 dark:text-red-400 text-xs font-bold"><i
                                             class="fa-regular fa-square-arrow-down-right text-sm mr-0.5"></i> +0%</span>
                                 </div>
                             </div>
                         </div>
                         <div class="bg-white dark:bg-[#2F3640] shadow rounded-lg mb-4 p-4 sm:p-6 h-full w-full">
                             <div class="flex items-center justify-between mb-4">
                                 <h3 class="text-xl font-bold leading-none text-gray-900 dark:text-white">ลูกค้าล่าสุด</h3>
                                 <a href="#"
                                     class="text-sm font-medium text-purple-600 hover:bg-gray-100 dark:text-purple-300 dark:hover:bg-[#353B48] rounded-lg inline-flex items-center p-2">
                                     ดูทั้งหมด
                                 </a>
                             </div>
                             <div class="flow-root">
                                 <ul role="list" class="divide-y divide-gray-200 dark:divide-[#353B48]">
                                     <li class="py-3 sm:py-4">
                                         <div class="flex items-center space-x-4">
                                             <div class="list-none cursor-pointer w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                                 <i class="fa-solid fa-user text-gray-600"></i>
                                             </div>
                                             <div class="flex-1 min-w-0">
                                                 <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                                                     พีค
                                                 </p>
                                                 <p class="text-sm text-gray-500 truncate">
                                                     <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                         data-cfemail="17727a767e7b57607e7973646372653974787a">[email&#160;protected]</a>
                                                 </p>
                                             </div>
                                             <div
                                                 class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                 320฿
                                             </div>
                                         </div>
                                     </li>
                                     <li class="py-3 sm:py-4">
                                         <div class="flex items-center space-x-4">
                                             <div class="list-none cursor-pointer w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                                 <i class="fa-solid fa-user text-gray-600"></i>
                                             </div>
                                             <div class="flex-1 min-w-0">
                                                 <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                                                     พีค
                                                 </p>
                                                 <p class="text-sm text-gray-500 truncate">
                                                     <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                         data-cfemail="d4b1b9b5bdb894a3bdbab0a7a0b1a6fab7bbb9">[email&#160;protected]</a>
                                                 </p>
                                             </div>
                                             <div
                                                 class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                 3467฿
                                             </div>
                                         </div>
                                     </li>
                                     <li class="py-3 sm:py-4 ">
                                         <div class="flex items-center space-x-4">
                                             <div class="list-none cursor-pointer w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                                 <i class="fa-solid fa-user text-gray-600"></i>
                                             </div>
                                             <div class="flex-1 min-w-0">
                                                 <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                                                     พีค
                                                 </p>
                                                 <p class="text-sm text-gray-500 truncate">
                                                     <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                         data-cfemail="57323a363e3b17203e3933242332257934383a">[email&#160;protected]</a>
                                                 </p>
                                             </div>
                                             <div
                                                 class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                 67฿
                                             </div>
                                         </div>
                                     </li>
                                     <li class="py-3 sm:py-4">
                                         <div class="flex items-center space-x-4">
                                             <div class="list-none cursor-pointer w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                                 <i class="fa-solid fa-user text-gray-600"></i>
                                             </div>
                                             <div class="flex-1 min-w-0">
                                                 <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                                                     พีค
                                                 </p>
                                                 <p class="text-sm text-gray-500 truncate">
                                                     <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                         data-cfemail="284d45494144685f41464c5b5c4d5a064b4745">[email&#160;protected]</a>
                                                 </p>
                                             </div>
                                             <div
                                                 class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                 2367฿
                                             </div>
                                         </div>
                                     </li>
                                     <li class="pt-3 sm:pt-4 pb-0">
                                         <div class="flex items-center space-x-4">
                                             <div class="list-none cursor-pointer w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                                 <i class="fa-solid fa-user text-gray-600"></i>
                                             </div>
                                             <div class="flex-1 min-w-0">
                                                 <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                                                     พีค
                                                 </p>
                                                 <p class="text-sm text-gray-500 truncate">
                                                     <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                         data-cfemail="a2c7cfc3cbcee2d5cbccc6d1d6c7d08cc1cdcf">[email&#160;protected]</a>
                                                 </p>
                                             </div>
                                             <div
                                                 class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                 367฿
                                             </div>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </main>

         </div>
     </div>

 </div>