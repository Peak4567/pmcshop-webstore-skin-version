<script>
    function copyCustomURL() {
        const url = window.location.origin + "/customer.php?page=<?php echo $skin_row['id']; ?>"; // เปลี่ยนเส้นทางเป็นไฟล์ customer_downloader.php

        navigator.clipboard.writeText(url).then(() => {
            document.getElementById("status").textContent = "คัดลอกลิงก์เรียบร้อย!";
            setTimeout(() => {
                document.getElementById("status").textContent = "";
            }, 2000);
        }).catch(err => {
            console.error("การคัดลอกลิงก์ล้มเหลว", err);
        });
    }
</script>