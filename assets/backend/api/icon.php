<script>
    // โหลดภาพสกิน Minecraft
    const skinImage2_<?php echo $skin_row['id']; ?> = new Image();
    skinImage2_<?php echo $skin_row['id']; ?>.src = "../../../assets/image/skin-file/<?php echo $skin_row['file']; ?>"; // เปลี่ยนเส้นทางไฟล์สกินที่นี่

    skinImage2_<?php echo $skin_row['id']; ?>.onload = () => {
        // ดึง canvas และ context
        const canvas = document.createElement("canvas");
        canvas.width = 64; // ขนาด canvas
        canvas.height = 64;
        const ctx = canvas.getContext("2d");

        // ปิด image smoothing เพื่อให้ภาพคมชัด
        ctx.imageSmoothingEnabled = false;

        // คัดลอกเฉพาะส่วนหัว (8x8 บนสกิน Minecraft)
        // พิกัด: x=8, y=8, ความกว้าง=8, ความสูง=8
        ctx.drawImage(skinImage2_<?php echo $skin_row['id']; ?>, 8, 8, 8, 8, 0, 0, 64, 64);

        // สร้าง favicon
        const favicon = document.createElement("link");
        favicon.rel = "icon";
        favicon.type = "image/png";
        favicon.href = canvas.toDataURL("image/png"); // แปลง canvas เป็น data URL

        // เพิ่ม favicon ไปใน `<head>`
        document.head.appendChild(favicon);
    };
</script>