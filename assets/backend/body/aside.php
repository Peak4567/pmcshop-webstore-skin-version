         <aside id="sidebar"
             class="fixed hidden z-20 h-full top-0 left-0 pt-16 lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
             aria-label="Sidebar">
             <div
                 class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white dark:bg-[#2F3640] dark:border-[#353B48] pt-0">
                 <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                     <div class="flex-1 px-3 bg-white dark:bg-[#2F3640] divide-y space-y-1">
                         <ul class="space-y-2 pb-2">
                             <li>
                                 <form action="#" method="GET" class="lg:hidden">
                                     <label for="mobile-search" class="sr-only">Search</label>
                                     <div class="relative">
                                         <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                             <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                 <path
                                                     d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                                 </path>
                                             </svg>
                                         </div>
                                         <input type="text" name="email" id="mobile-search"
                                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:ring-cyan-600 block w-full pl-10 p-2.5"
                                             placeholder="Search">
                                     </div>
                                 </form>
                             </li>
                             <div>
                                 <span data-i18n="nav_main"
                                     class="text-sm ml-3 font-normal whitespace-normal opacity-50 tracking-widest text-black dark:text-white">
                                     หลัก
                                 </span>
                             </div>
                             <ul class="space-y-2">
                                 <li>
                                     <button data-dropdown="menu1"
                                         class="dropdown-btn text-md dark:text-white text-gray-900 font-normal rounded-lg flex items-center p-1.5 hover:bg-gray-200 dark:hover:bg-[#353B48] group duration-300 transition-all w-full">
                                         <i
                                             class="fa-regular fa-house-blank text-lg ml-1 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition duration-100"></i>
                                         <span data-i18n="dashboard"
                                             class="ml-3 tracking-tight text-black dark:text-white">ภาพรวม</span>
                                         <i
                                             class="dropdown-icon fa-solid fa-chevron-down ml-auto text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition-transform duration-300"></i>
                                     </button>
                                     <ul
                                         class="dropdown-menu hidden space-y-1 opacity-0 transform scale-y-0 origin-top transition-all duration-300 bg-gray-100 dark:bg-[#353B48] p-1 rounded-xl mt-2">
                                         <li
                                             class="dropdown-item opacity-0 transform translate-y-2 transition-all duration-300 delay-75">
                                             <a href="#"
                                                 class="text-md text-gray-900 font-normal rounded-lg flex items-center p-1.5 hover:bg-gray-200 dark:hover:bg-[#4c5158] dark:text-white group duration-300 transition-all">
                                                 <i
                                                     class="fa-regular fa-chart-mixed-up-circle-dollar text-lg ml-2 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition duration-100"></i>
                                                 <span data-i18n="revenue_loss" class="ml-3 tracking-tight">รายได้ & ขาดทุน</span>
                                             </a>
                                         </li>
                                         <li
                                             class="dropdown-item opacity-0 transform translate-y-2 transition-all duration-300 delay-200">
                                             <a href="#"
                                                 class="text-md text-gray-900 font-normal rounded-lg flex items-start p-1.5 hover:bg-gray-200 dark:hover:bg-[#4c5158] dark:text-white group duration-300 transition-all">
                                                 <i
                                                     class="fa-regular fa-chart-user text-lg ml-2 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition duration-100"></i>
                                                 <span data-i18n="customers" class="ml-3 tracking-tight">ลูกค้า</span>
                                             </a>
                                         </li>
                                         <li
                                             class="dropdown-item opacity-0 transform translate-y-2 transition-all duration-300 delay-200">
                                             <a href="/backend/home"
                                                 class="text-md text-gray-900 font-normal rounded-lg flex items-start p-1.5 hover:bg-gray-200 dark:hover:bg-[#4c5158] dark:text-white group duration-300 transition-all">
                                                 <i
                                                     class="fa-regular fa-grid-2-plus text-lg ml-2 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition duration-100"></i>
                                                 <span data-i18n="other_overview" class="ml-3 tracking-tight">ภาพรวม</span>
                                             </a>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                             <div>
                                 <span data-i18n="nav_general"
                                     class="text-sm ml-3 font-normal whitespace-normal opacity-50 tracking-widest text-black dark:text-white">
                                     ทั่วไป
                                 </span>
                             </div>
                             <ul class="space-y-2">
                                 <li>
                                     <button data-dropdown="menu2"
                                         class="dropdown-btn text-md dark:text-white text-gray-900 font-normal rounded-lg flex items-center p-1.5 hover:bg-gray-200 dark:hover:bg-[#353B48] group duration-300 transition-all w-full">
                                         <i
                                             class="fa-regular fa-box-taped text-lg ml-2 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition duration-100"></i>
                                         <span data-i18n="product_list" class="ml-3 tracking-tight">รายการสินค้า</span>
                                         <i
                                             class="dropdown-icon fa-solid fa-chevron-down ml-auto text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition-transform duration-300"></i>
                                     </button>
                                     <ul
                                         class="dropdown-menu hidden space-y-1 opacity-0 transform scale-y-0 origin-top transition-all duration-300 bg-gray-100 dark:bg-[#353B48] p-1 rounded-xl mt-2">
                                         <li
                                             class="dropdown-item opacity-0 transform translate-y-2 transition-all duration-300 delay-75">
                                             <a href="/backend/skin-list"
                                                 class="text-md text-gray-900 font-normal rounded-lg flex items-center p-1.5 hover:bg-gray-200 dark:hover:bg-[#4c5158] dark:text-white group duration-300 transition-all">
                                                 <i class="fa-regular fa-person-ski-jumping text-lg ml-2 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition duration-100"></i>
                                                 <span data-i18n="web_hostings" class="ml-3 tracking-tight">สกิน</span>
                                             </a>
                                         </li>
                                         <li
                                             class="dropdown-item opacity-0 transform translate-y-2 transition-all duration-300 delay-150">
                                             <a href="#"
                                                 class="text-md text-gray-900 font-normal rounded-lg flex items-center p-1.5 hover:bg-gray-200 dark:hover:bg-[#4c5158] dark:text-white group duration-300 transition-all">
                                                 <i class="fa-regular fa-block-brick text-lg ml-2 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition duration-100"></i>
                                                 <span data-i18n="domains" class="ml-3 tracking-tight">โมเดล</span>
                                             </a>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                             <li>
                                 <a href="#"
                                     class="text-md dark:text-white text-gray-900 font-normal rounded-lg flex items-center p-1.5 hover:bg-gray-200 dark:hover:bg-[#4c5158] group duration-300 transition-all">
                                     <i
                                         class="fa-regular fa-cart-shopping text-lg ml-2 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition duration-100"></i>
                                     <span data-i18n="orders" class="ml-3 tracking-tight">ออเดอร์</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="#"
                                     class="text-md dark:text-white text-gray-900 font-normal rounded-lg flex items-center p-1.5 hover:bg-gray-200 dark:hover:bg-[#4c5158] group duration-300 transition-all">
                                     <i
                                         class="fa-regular fa-sparkles text-lg ml-2 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition duration-100"></i>
                                     <span data-i18n="advertises" class="ml-3 tracking-tight">ลงผลงาน</span>
                                 </a>
                             </li>
                             <div>
                                 <span data-i18n="nav_settings"
                                     class="text-sm ml-3 font-normal whitespace-normal opacity-50 tracking-widest text-black dark:text-white">
                                     ตั้งค่า
                                 </span>
                             </div>
                             <li>
                                 <a href="#"
                                     class="text-md text-gray-900 font-normal rounded-lg flex items-center p-1.5 hover:bg-gray-200 dark:hover:bg-[#4c5158] dark:text-white group duration-300 transition-all">
                                     <i
                                         class="fa-regular fa-sliders-up text-lg ml-2 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition duration-100"></i>
                                     <span data-i18n="settings" class="ml-3 tracking-tight">การตั้งค่า</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="#"
                                     class="text-md text-gray-900 font-normal rounded-lg flex items-center p-1.5 hover:bg-gray-200 dark:hover:bg-[#4c5158] dark:text-white group duration-300 transition-all">
                                     <i
                                         class="fa-regular fa-gear text-lg ml-2 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition duration-100"></i>
                                     <span data-i18n="roles_permissions" class="ml-3 tracking-tight">บทบาท & ความสามารถ</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="#"
                                     class="text-md text-gray-900 font-normal rounded-lg flex items-center p-1.5 hover:bg-gray-200 dark:hover:bg-[#4c5158] dark:text-white group duration-300 transition-all">
                                     <i
                                         class="fa-regular fa-user-group text-lg ml-2 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-300 transition duration-100"></i>
                                     <span data-i18n="users" class="ml-3 tracking-tight">ผู้ใช้งาน</span>
                                 </a>
                             </li>
                         </ul>
                         <div></div>
                     </div>
                 </div>
             </div>
         </aside>