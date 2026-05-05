const isDarkMode = document.documentElement.classList.contains("dark");

const options = {
    // set the labels option to true to show the labels on the X and Y axis
    xaxis: {
        show: true,
        categories: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
        labels: {
            show: true,
            style: {
                fontFamily: "LINE Seed Sans TH, sans-serif",
                cssClass: 'text-xs font-normal fill-gray-600',
                colors: isDarkMode ? "#D1D5DB" : "#4B5563"
            }
        },
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        show: true,
        labels: {
            show: true,
            style: {
                fontFamily: "LINE Seed Sans TH, sans-serif",
                cssClass: 'text-xs font-normal fill-gray-600',
                colors: isDarkMode ? "#D1D5DB" : "#4B5563"
            },
            formatter: function (value) {
                return value + '฿';
            }
        }
    },
    series: [
        {
            name: "เดือนละ",
            data: [562, 124, 379, 365, 462, 973, 222, 209, 199, 203, 633, 712],
            color: "#623bff",
        },
        {
            name: "สัปดาห์ละ",
            data: [321, 24, 52, 235, 12, 764, 456, 23, 432, 56, 346, 867],
            color: "#36c9ff",
        },
    ],
    chart: {
        sparkline: {
            enabled: false
        },
        height: "100%",
        width: "100%",
        type: "area",
        fontFamily: "LINE Seed Sans TH, sans-serif",
        background: document.documentElement.classList.contains('dark') ? "#000" : "#fff",
        dropShadow: {
            enabled: false,
        },
        toolbar: {
            show: false,
        },
    },
    tooltip: {
        enabled: true,
        x: {
            show: true,
        },
        theme: isDarkMode ? "dark" : "light",
    },
    fill: {
        type: "gradient",
        gradient: {
            opacityFrom: 0.55,
            opacityTo: 0,
            shade: "#1C64F2",
            gradientToColors: ["#1C64F2"],
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        width: 6,
    },
    legend: {
        show: true,
        colors: isDarkMode ? "#D1D5DB" : "#4B5563"
    },
    grid: {
        show: true,
        borderColor: isDarkMode ? "#374151" : "#E5E7EB"
    },
}

if (window.chart) {
    window.chart.updateOptions(options);
}

if (document.getElementById("labels-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("labels-chart"), options);
    chart.render();
}

const getChartOptions = () => {
    const isDarkMode = document.documentElement.classList.contains('dark'); // อัปเดตค่า dark mode ตาม class ใน HTML

    return {
        series: [70, 20, 10],
        colors: ["#1C64F2", "#16BDCA", "#f22a2a"],
        chart: {
            height: 320,
            width: "100%",
            type: "donut",
            background: isDarkMode ? "#1E293B" : "#FFFFFF", // เปลี่ยนสีพื้นหลัง
        },
        stroke: {
            colors: ["transparent"],
            lineCap: "",
        },
        plotOptions: {
            pie: {
                donut: {
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            fontFamily: "LINE Seed Sans TH, sans-serif",
                            offsetY: 20,
                            color: isDarkMode ? "#D1D5DB" : "#4B5563"
                        },
                        total: {
                            showAlways: true,
                            show: true,
                            label: "ผู้ใช้งานระบบ",
                            fontFamily: "LINE Seed Sans TH, sans-serif",
                            color: isDarkMode ? "#D1D5DB" : "#4B5563",
                            formatter: function (w) {
                                const sum = w.globals.seriesTotals.reduce((a, b) => a + b, 0);
                                return sum + '%';
                            },
                        },
                        value: {
                            show: true,
                            fontFamily: "LINE Seed Sans TH, sans-serif",
                            offsetY: -20,
                            color: isDarkMode ? "#D1D5DB" : "#4B5563",
                            formatter: function (value) {
                                return value + "%";
                            },
                        },
                    },
                    size: "80%",
                },
            },
        },
        grid: {
            padding: {
                top: -2,
            },
            borderColor: isDarkMode ? "#374151" : "#E5E7EB", // เปลี่ยนสี grid
        },
        labels: ["คอมพิวเตอร์ (PC)", "โทรศัพท์ (Mobile)", "อื่นๆ (Others)"],
        dataLabels: {
            enabled: false,
        },
        legend: {
            position: "bottom",
            fontFamily: "LINE Seed Sans TH, sans-serif",
            labels: {
                colors: isDarkMode ? "#D1D5DB" : "#4B5563" // เปลี่ยนสี legend
            }
        },
        yaxis: {
            labels: {
                style: {
                    colors: isDarkMode ? "#D1D5DB" : "#4B5563",
                },
                formatter: function (value) {
                    return value + "%";
                },
            },
        },
        xaxis: {
            labels: {
                colors: isDarkMode ? "#D1D5DB" : "#4B5563",
                formatter: function (value) {
                    return value + "%";
                },
            },
            axisTicks: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
        },
    };
};

// ฟังก์ชันสร้างและอัปเดตกราฟ
const renderChart = () => {
    if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("donut-chart"), getChartOptions());
        chart.render();

        // อัปเดตกราฟเมื่อเปลี่ยนธีม
        document.getElementById('darkModeToggle').addEventListener('click', () => {
            setTimeout(() => {
                chart.updateOptions(getChartOptions()); // อัปเดต options ตามโหมดใหม่
            }, 500);
        });
    }
};


if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("donut-chart"), getChartOptions());
    chart.render();

    // Get all the checkboxes by their class name
    const checkboxes = document.querySelectorAll('#devices input[type="checkbox"]');

    // Function to handle the checkbox change event
    function handleCheckboxChange(event, chart) {
        const checkbox = event.target;
        if (checkbox.checked) {
            switch (checkbox.value) {
                case 'desktop':
                    chart.updateSeries([15.1, 22.5, 4.4, 8.4]);
                    break;
                case 'tablet':
                    chart.updateSeries([25.1, 26.5, 1.4, 3.4]);
                    break;
                case 'mobile':
                    chart.updateSeries([45.1, 27.5, 8.4, 2.4]);
                    break;
                default:
                    chart.updateSeries([55.1, 28.5, 1.4, 5.4]);
            }

        } else {
            chart.updateSeries([35.1, 23.5, 2.4, 5.4]);
        }
    }

    // Attach the event listener to each checkbox
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', (event) => handleCheckboxChange(event, chart));
    });
}

document.querySelectorAll(".dropdown-btn").forEach(button => {
    button.addEventListener("click", function () {
        const parentLi = this.closest("li");
        const menu = parentLi.querySelector(".dropdown-menu");
        const icon = this.querySelector(".dropdown-icon");
        const items = parentLi.querySelectorAll(".dropdown-item");

        menu.classList.toggle("hidden");

        if (!menu.classList.contains("hidden")) {
            setTimeout(() => {
                menu.classList.toggle("opacity-0");
                menu.classList.toggle("scale-y-0");
                items.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.toggle("opacity-0");
                        item.classList.toggle("translate-y-2");
                    }, index * 100);
                });
            }, 50);
        } else {
            items.forEach((item, index) => {
                setTimeout(() => {
                    item.classList.toggle("opacity-0");
                    item.classList.toggle("translate-y-2");
                }, index * 100);
            });
            setTimeout(() => {
                menu.classList.toggle("opacity-0");
                menu.classList.toggle("scale-y-0");
            }, items.length * 100);
        }

        icon.classList.toggle("rotate-180");
    });
});



// ฟังก์ชันนี้ใช้ในการโหลดไฟล์ภาษา
async function loadLanguage(lang) {
    const res = await fetch(`./languages/${lang}.json`);
    const translations = await res.json();

    document.querySelectorAll("[data-i18n]").forEach(el => {
        const key = el.getAttribute("data-i18n");
        if (translations[key]) {
            el.textContent = translations[key];
        }
    });
}

// ฟังก์ชันที่ใช้เปลี่ยนภาษา
function changeLanguage(lang) {
    localStorage.setItem("lang", lang);

    // อัปเดตภาษาและไอคอน
    loadLanguage(lang);
    updateCurrencyPosition(lang); // อัปเดตตำแหน่งของ icon หลังการเปลี่ยนภาษา
}

const langFlags = {
    th: "/dist/assets/img/Flag_of_Thailand.svg",
    en: "/dist/assets/img/Flag_of_America.webp",
    jp: "/dist/assets/img/Flag_of_Japan.svg"
};

const langLabels = {
    th: "ไทย",
    en: "English",
    jp: "日本語"
};

const langIcons = {
    th: "fa-solid fa-baht-sign",
    en: "fa-solid fa-dollar-sign",
    jp: "fa-solid fa-yen-sign"
};

function updateLanguageIcon(lang) {
    const iconClass = langIcons[lang]; // ดึงคลาสของไอคอนที่เกี่ยวข้องกับภาษา

    // อัปเดต icon สำหรับ lang-icon-1
    const iconEl1 = document.getElementById("lang-icon-1");
    if (iconEl1) {
        iconEl1.className = iconClass; // อัปเดตไอคอน
    }

    // อัปเดต icon สำหรับ lang-icon-2
    const iconEl2 = document.getElementById("lang-icon-2");
    if (iconEl2) {
        iconEl2.className = iconClass; // อัปเดตไอคอน
    }
}



function changeLanguage(lang) {
    localStorage.setItem("lang", lang);
    loadLanguage(lang); // โหลดข้อมูลการแปล

    // อัพเดตตำแหน่งของสัญลักษณ์ (currency icon)
    updateCurrencyPosition(lang);
}

// เรียกใช้ updateCurrencyPosition เมื่อโหลดหน้า
updateCurrencyPosition(localStorage.getItem("lang") || "th");



const currencyPosition = {
    en: "prefix",  // Dollar อยู่หน้าตัวเลข
    jp: "prefix",  // Yen อยู่หลังตัวเลข
    th: "prefix"   // Baht อยู่หลังตัวเลข
};

function updateCurrencyPosition(lang) {
    // หา container ที่ประกอบด้วย icon และ numberText
    const container = document.querySelector("#lang-icon-1")?.parentElement;
    console.log(container);  // เช็คว่า container ถูกเลือกไหม
    if (!container) return;  // ถ้าไม่พบ container จะไม่ทำอะไร

    const icon = document.getElementById("lang-icon-1");
    const numberText = container.querySelector("span");  // ใช้ span ในการดึงตัวเลข

    if (!icon || !numberText) return;  // ถ้าไม่มี icon หรือ numberText ก็จะไม่ทำอะไร

    console.log("Before icon move: ", container);  // เช็คตำแหน่งก่อนการย้าย

    // ลบ icon ออกจากตำแหน่งเดิม
    icon.remove();

    // เปลี่ยนตำแหน่งตามภาษาที่เลือก
    if (currencyPosition[lang] === "prefix") {
        container.insertBefore(icon, numberText);  // วางไอคอนที่หน้าตัวเลข
    } else {
        container.appendChild(icon);  // วางไอคอนที่หลังตัวเลข
    }
}








// ฟังก์ชันเปลี่ยนภาษา
function changeLanguage(lang, dropdownId) {
    // บันทึกการตั้งค่าภาษาใน localStorage
    localStorage.setItem("lang", lang);
    loadLanguage(lang); // ฟังก์ชันโหลดภาษา

    // ดึงค่า icon, flag, และ label สำหรับแต่ละภาษา
    const flagSrc = langFlags[lang];
    const labelText = langLabels[lang];
    const iconClass = langIcons[lang];

    // ค้นหา dropdown button ตาม ID
    const dropdownBtn = document.getElementById(dropdownId);
    const idSuffix = dropdownId.split('-')[2]; // แยก ID suffix เช่น 1, 2 สำหรับปุ่มภาษา

    // อัปเดต flag, label และ icon สำหรับปุ่มแรก
    const flagEl = dropdownBtn.querySelector(`#lang-flag-${idSuffix}`);
    if (flagEl) flagEl.src = flagSrc;

    const labelEl = dropdownBtn.querySelector(`#lang-label-${idSuffix}`);
    if (labelEl) labelEl.textContent = labelText;

    const iconEl = dropdownBtn.querySelector(`#lang-icon-${idSuffix}`);
    if (iconEl) {
        iconEl.className = iconClass; // อัปเดต icon
    }

    // อัปเดตสำหรับปุ่มภาษาอื่น (เช่น ถ้าเลือกปุ่มแรก ก็อัปเดตปุ่มที่สอง)
    const otherId = dropdownId === "lang-button-1" ? "lang-button-2" : "lang-button-1";
    const otherSuffix = otherId.split('-')[2]; // ดึง suffix ของปุ่มที่สอง
    const otherBtn = document.getElementById(otherId);

    const otherFlag = otherBtn.querySelector(`#lang-flag-${otherSuffix}`);
    if (otherFlag) otherFlag.src = flagSrc;

    const otherLabel = otherBtn.querySelector(`#lang-label-${otherSuffix}`);
    if (otherLabel) otherLabel.textContent = labelText;

    const otherIcon = otherBtn.querySelector(`#lang-icon-${otherSuffix}`);
    if (otherIcon) {
        otherIcon.className = iconClass; // อัปเดต icon ให้ตรงกับปุ่มที่สอง
    }

    updateLanguageIcon(lang); // อัปเดตไอคอนตามภาษาที่เลือก
    updateCurrencyPosition(lang); // อัปเดตตำแหน่ง icon ที่เกี่ยวข้องกับการแสดงผล
}


// โหลดภาษาเริ่มต้น
const savedLang = localStorage.getItem("lang") || "th";
loadLanguage(savedLang);
changeLanguage(savedLang, "lang-button-1");
changeLanguage(savedLang, "lang-button-2");




function changeLanguageWithFade(lang, dropdownId) {
    localStorage.setItem("lang-toast", lang);
    const overlay = document.getElementById("fade-overlay");
    const message = document.getElementById("fade-message");
    const html = document.documentElement;

    // ตั้งข้อความตามภาษาที่เลือก
    const messages = {
        th: "กำลังเปลี่ยนเป็นภาษาเป็นไทย...",
        en: "Switching to English...",
        jp: "日本語に切り替え中..."
    };
    message.textContent = messages[lang] || "Loading...";

    const isDarkMode = html.classList.contains("dark");

    overlay.style.backgroundColor = isDarkMode ? "rgba(20, 20, 20, 1)" : "rgba(255, 255, 255, 1)";
    message.style.color = isDarkMode ? "#fff" : "#333";

    // แสดง overlay + ข้อความ
    overlay.style.pointerEvents = "auto";
    overlay.style.opacity = "1";
    message.style.opacity = "1";

    setTimeout(() => {
        localStorage.setItem("lang", lang);
        localStorage.setItem("lang-toast", lang); // ✅ บอกไว้ว่า toast อะไรจะแสดง
        window.location.reload();
    }, 700);
}

function showLanguageToast(lang) {
    const toast = document.getElementById("lang-toast");
    const messageSpan = document.getElementById("toast-message");
    const timerBar = document.getElementById("toast-timer");
    const html = document.documentElement;

    // ข้อความและรูปธงของแต่ละภาษา
    const messages = {
        th: `<div style="display: inline-flex; align-items: center;">คุณได้เปลี่ยนเป็นภาษาไทยแล้ว<img src="/dist/assets/img/Flag_of_Thailand.svg" alt="ไทย" class="w-6 h-4" style="margin-left: 5px;"></div>`,
        en: `<div style="display: inline-flex; align-items: center;">Language switched to English<img src="/dist/assets/img/Flag_of_America.webp" alt="English" class="w-6 h-4" style="margin-left: 5px;"></div>`,
        jp: `<div style="display: inline-flex; align-items: center;">日本語に変更されました<img src="/dist/assets/img/Flag_of_Japan.svg" alt="日本語" class="w-6 h-4" style="margin-left: 5px;"></div>`
    };

    // แสดงข้อความพร้อมธงที่เหมาะสม
    messageSpan.innerHTML = messages[lang] || "Language changed";

    const isDarkMode = html.classList.contains("dark");
    toast.style.backgroundColor = isDarkMode ? "#333" : "#fff";
    toast.style.color = isDarkMode ? "#fff" : "333";
    toast.style.boxShadow = isDarkMode ? "0px 4px 6px rgba(255, 255, 255, 0.2)" : "0px 4px 6px rgba(0, 0, 0, 0.2)";

    toast.style.opacity = "1";
    toast.style.transform = "translateX(-50%) translateY(0)";

    // เริ่มแอนิเมชันของ progress bar
    timerBar.style.transition = "none"; // หยุดการเคลื่อนไหวชั่วขณะ
    timerBar.style.width = "100%"; // รีเซ็ต progress bar
    void timerBar.offsetWidth; // force reflow เพื่อให้แอนิเมชันเริ่มใหม่
    timerBar.style.transition = "width 5s linear"; // เริ่มการเคลื่อนไหว
    timerBar.style.width = "0%"; // ทำให้ progress bar หายไป

    // รอเวลา 2.5 วินาที แล้วค่อยปิด
    window._toastTimeout = setTimeout(() => {
        dismissToast();
    }, 4999);
}

function dismissToast() {
    const toast = document.getElementById("lang-toast");
    const timerBar = document.getElementById("toast-timer");

    // หยุดการทำงานของ progress bar ก่อนจะปิด toast
    timerBar.style.transition = "none"; // หยุดการเคลื่อนไหว
    timerBar.style.width = "100%"; // รีเซ็ต progress bar

    // ปิด toast
    toast.style.opacity = "0";
    toast.style.transform = "translateX(-50%) translateY(-5px)";

    clearTimeout(window._toastTimeout); // ยกเลิกการทำงานของ setTimeout

    // ตั้งเวลาใหม่ในการแสดง toast หากต้องการเรียกใช้ในอนาคต
    setTimeout(() => {
        // ทำให้ toast หายไปอย่างนุ่มนวล
        toast.style.display = "none";
    }, 200); // รอให้การปิดแอนิเมชันเสร็จสมบูรณ์
}

window.addEventListener("load", () => {
    const pendingLang = localStorage.getItem("lang-toast");
    if (pendingLang) {
        showLanguageToast(pendingLang);
        localStorage.removeItem("lang-toast"); // ล้างค่าเมื่อแสดงเสร็จ
    }
});







document.addEventListener("DOMContentLoaded", function () {
    const screen = document.getElementById('transition-screen');
    const text = document.getElementById('transition-text');
    const modeName = document.getElementById('mode-name');
    const progressBar = document.getElementById('progress-bar');
    const html = document.documentElement;
    const toast = document.getElementById('toast');
    const toastMode = document.getElementById('toast-mode');
    const closeToastBtn = document.getElementById('close-toast');
    const toggleButton = document.getElementById('darkModeToggle');
    const themeIcon = document.getElementById('themeIcon');
    const logo = document.querySelector('a img');

    // ตรวจสอบธีมจาก localStorage
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        html.classList.add('dark');
        themeIcon.classList.remove('fa-moon-stars');
        themeIcon.classList.add('fa-sun-bright');  // ✅ แก้เป็น fa-sun
        logo.src = "../assets/img/NaHost_Text_Black.png";
    } else {
        html.classList.remove('dark');
        themeIcon.classList.remove('fa-sun-bright');
        themeIcon.classList.add('fa-moon-stars'); // ✅ แก้ให้ตรงกับที่ใช้
        logo.src = "../assets/img/NaHost_Text_White.png";
    }

    function toggleDarkMode() {
        const isDark = html.classList.contains('dark');

        // แสดง overlay
        screen.style.opacity = '1';
        screen.style.pointerEvents = 'auto';

        modeName.innerText = isDark ? 'สว่าง' : 'กลางคืน';
        modeName.style.color = isDark ? '#fff' : '#333';

        setTimeout(() => {
            text.style.opacity = '1';
            progressBar.style.width = '100%';
        }, 100);

        setTimeout(() => {
            html.classList.toggle('dark');

            // ✅ ใช้ toggle() เพื่อสลับไอคอน
            themeIcon.classList.toggle('fa-moon-stars');
            themeIcon.classList.toggle('fa-sun-bright');

            if (html.classList.contains('dark')) {
                logo.src = "../assets/img/NaHost_Text_Black.png";
                localStorage.setItem('theme', 'dark');
            } else {
                logo.src = "../assets/img/NaHost_Text_White.png";
                localStorage.setItem('theme', 'light');
            }

            const isDarkAfterChange = html.classList.contains('dark');
            screen.style.background = isDarkAfterChange ? 'linear-gradient(45deg, #000000, #333333)' : 'linear-gradient(45deg, #9c9c9c, #ffffff)';
            text.style.color = isDarkAfterChange ? '#fff' : '#333';

            setTimeout(() => {
                toastMode.innerHTML = isDarkAfterChange ?
                    'คุณได้ทำการเปลี่ยนโหมดเป็น <span style="color: #fff; font-weight: bold;">กลางคืน</span> แล้ว' :
                    'คุณได้ทำการเปลี่ยนโหมดเป็น <span style="color: #fff; font-weight: bold;">สว่าง</span> แล้ว';
                toast.style.backgroundColor = isDarkAfterChange ? '#333' : '#fff';
                toast.style.opacity = '1';
                toast.style.visibility = 'visible';

                setTimeout(() => {
                    toast.style.opacity = '0';
                    toast.style.visibility = 'hidden';
                }, 3000);
            }, 1000);

        }, 2000);

        setTimeout(() => {
            text.style.opacity = '0';
            progressBar.style.width = '0%';
            screen.style.opacity = '0';
            screen.style.pointerEvents = 'none';
        }, 2500);
    }

    closeToastBtn.addEventListener('click', () => {
        toast.style.opacity = '0';
        toast.style.visibility = 'hidden';
    });

    toggleButton.addEventListener('click', toggleDarkMode);
});
