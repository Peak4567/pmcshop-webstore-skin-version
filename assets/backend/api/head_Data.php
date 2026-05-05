<script>
    // โหลดภาพสกิน Minecraft
    const skinImage_<?php echo $skin_row['id']; ?> = new Image();
    skinImage_<?php echo $skin_row['id']; ?>.src = "../../../assets/image/skin-file/<?php echo $skin_row['file']; ?>"; // เปลี่ยนเส้นทางไฟล์สกินที่นี่

    skinImage_<?php echo $skin_row['id']; ?>.onload = () => {
        // ดึง canvas และ context
        const canvas = document.getElementById("headCanvas_<?php echo $skin_row['id']; ?>");
        const ctx = canvas.getContext("2d");

        // ตั้งค่าขนาด canvas เป็น 64x64 (ย่อลงจาก 128x128)
        canvas.width = 64;
        canvas.height = 64;

        // ปิด image smoothing เพื่อให้ภาพคมชัด
        ctx.imageSmoothingEnabled = false;

        // คัดลอกเฉพาะส่วนหัว (8x8 พิกเซล บนสกิน Minecraft)
        // ตำแหน่งพิกัด: x=8, y=8, ความกว้าง=8, ความสูง=8
        ctx.drawImage(skinImage_<?php echo $skin_row['id']; ?>, 8, 8, 8, 8, 0, 0, 64, 64);

        // วาด overlay layer (หมวก/แว่นตา)
        ctx.drawImage(skinImage_<?php echo $skin_row['id']; ?>, 40, 8, 8, 8, 0, 0, 64, 64);

        // สร้าง favicon จาก canvas (ไม่บังคับ)
        const favicon = document.createElement("link");
        favicon.rel = "icon";
        favicon.type = "image/png";
        favicon.href = canvas.toDataURL("image/png"); // แปลง canvas เป็น data URL

        // ลบ favicon เก่าออกก่อน (ถ้ามี)
        const oldFavicon = document.querySelector("link[rel='icon']");
        if (oldFavicon) {
            oldFavicon.remove();
        }

        // เพิ่ม favicon ไปใน `<head>` (ถ้าต้องการ)
        document.head.appendChild(favicon);
    };

    // ฟังก์ชันสำหรับสร้างภาพ Error
    function createErrorImage_<?php echo $skin_row['id']; ?>() {
        const canvas = document.getElementById("headCanvas_<?php echo $skin_row['id']; ?>");
        const ctx = canvas.getContext("2d");
        
        // ตั้งค่าขนาด canvas เป็น 64x64
        canvas.width = 64;
        canvas.height = 64;
        
        // ปิด image smoothing
        ctx.imageSmoothingEnabled = false;
        
        // วาดพื้นหลังสีแดงอ่อน
        ctx.fillStyle = "#ff6b6b";
        ctx.fillRect(0, 0, 64, 64);
        
        // วาดเส้นขอบ
        ctx.strokeStyle = "#ff4757";
        ctx.lineWidth = 2;
        ctx.strokeRect(1, 1, 62, 62);
        
        // วาดสัญลักษณ์ X (เครื่องหมายกากบาท)
        ctx.strokeStyle = "#ffffff";
        ctx.lineWidth = 4;
        ctx.lineCap = "round";
        
        // เส้นทแยงมุมซ้ายบนไปขวาล่าง
        ctx.beginPath();
        ctx.moveTo(16, 16);
        ctx.lineTo(48, 48);
        ctx.stroke();
        
        // เส้นทแยงมุมขวาบนไปซ้ายล่าง
        ctx.beginPath();
        ctx.moveTo(48, 16);
        ctx.lineTo(16, 48);
        ctx.stroke();
        
        // เขียนข้อความ "ERROR"
        ctx.fillStyle = "#ffffff";
        ctx.font = "bold 8px Arial";
        ctx.textAlign = "center";
        ctx.fillText("ERROR", 32, 58);
    }

    // กรณีโหลดภาพไม่สำเร็จ
    skinImage_<?php echo $skin_row['id']; ?>.onerror = () => {
        console.error("Failed to load skin image:", skinImage_<?php echo $skin_row['id']; ?>.src);
        
        // สร้างภาพ Error แทน
        createErrorImage_<?php echo $skin_row['id']; ?>();
    };
</script>