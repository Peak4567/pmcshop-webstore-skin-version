<script>
    // กำหนดฟังก์ชันสำหรับปรับขนาด SkinViewer
    function resizeSkinViewer(skinViewer, canvasId) {
        const canvas = document.getElementById(canvasId);
        const containerWidth = canvas.parentElement.clientWidth;
        const containerHeight = containerWidth * 0.75; // อัตราส่วน 4:3 หรือปรับตามความเหมาะสม

        canvas.width = containerWidth;
        canvas.height = containerHeight;

        // อัปเดตขนาดของ SkinViewer
        skinViewer.width = containerWidth;
        skinViewer.height = containerHeight;
    }

    // สร้าง SkinViewer
    const canvasId = "skin_container_<?php echo $skin_row['id']; ?>";
    const skinViewer_<?php echo $skin_row['id']; ?> = new skinview3d.SkinViewer({
        canvas: document.getElementById(canvasId),
        width: 736, // ขนาดเริ่มต้น
        height: 560,
        skin: "../../../assets/image/skin-file/<?php echo $skin_row['file']; ?>" // เปลี่ยนเส้นทางไฟล์สกินที่นี่
    });

    // เรียกใช้ฟังก์ชันปรับขนาดเริ่มต้น
    resizeSkinViewer(skinViewer_<?php echo $skin_row['id']; ?>, canvasId);

    // ฟังเหตุการณ์การเปลี่ยนขนาดหน้าต่าง
    window.addEventListener('resize', () => {
        resizeSkinViewer(skinViewer_<?php echo $skin_row['id']; ?>, canvasId);
    });

    // เพิ่มพื้นหลัง Skybox
    const skyboxLoader_<?php echo $skin_row['id']; ?> = new THREE.CubeTextureLoader();
    const skyboxTexture_<?php echo $skin_row['id']; ?> = skyboxLoader_<?php echo $skin_row['id']; ?>.load([
        '../../../assets/image/bg-skin/panorama_1.png',
        '../../../assets/image/bg-skin/panorama_3.png',
        '../../../assets/image/bg-skin/panorama_4.png',
        '../../../assets/image/bg-skin/panorama_5.png',
        '../../../assets/image/bg-skin/panorama_0.png',
        '../../../assets/image/bg-skin/panorama_2.png'
    ]);

    // ตั้งค่า anisotropy เพื่อให้ภาพคมชัดขึ้นและไม่เห็นขอบภาพ
    skyboxTexture_<?php echo $skin_row['id']; ?>.anisotropy = 16;

    // ตั้ง Skybox ให้กับฉากของ SkinViewer
    skinViewer_<?php echo $skin_row['id']; ?>.scene.background = skyboxTexture_<?php echo $skin_row['id']; ?>;

    // ปรับกล้องให้สามารถมองเห็น Skybox ได้อย่างเหมาะสม
    skinViewer_<?php echo $skin_row['id']; ?>.camera.position.set(0, 20, 50); // ปรับระยะกล้องตามความเหมาะสม

    // การตั้งค่า renderer สำหรับทำให้ภาพพื้นหลังเนียนขึ้น
    const renderer_<?php echo $skin_row['id']; ?> = skinViewer_<?php echo $skin_row['id']; ?>.renderer;

    // เพิ่มการตั้งค่าการเรนเดอร์เพื่อให้ภาพพื้นหลังเนียนขึ้น
    renderer_<?php echo $skin_row['id']; ?>.getContext().imageSmoothingEnabled = true; // ทำให้การแสดงภาพเรียบเนียนขึ้น
    renderer_<?php echo $skin_row['id']; ?>.getContext().mozImageSmoothingEnabled = true; // สำหรับ Firefox
    renderer_<?php echo $skin_row['id']; ?>.getContext().webkitImageSmoothingEnabled = true; // สำหรับ Webkit (Safari)

    // ตั้งค่า toneMapping และ gammaCorrection เพื่อให้ภาพเนียนขึ้น
    renderer_<?php echo $skin_row['id']; ?>.toneMapping = THREE.ACESFilmicToneMapping;
    renderer_<?php echo $skin_row['id']; ?>.toneMappingExposure = 1.0;
    renderer_<?php echo $skin_row['id']; ?>.gammaFactor = 2.2;
    renderer_<?php echo $skin_row['id']; ?>.gammaOutput = true;

    // ตั้งค่าการบิดเบือนภาพหรือการจับภาพให้มีความนุ่มนวล
    renderer_<?php echo $skin_row['id']; ?>.setClearColor(0x000000, 0); // ทำให้พื้นหลังโปร่งใสเมื่อไม่มี Skybox





    // ฟังก์ชันสำหรับเปิด/ปิดการแสดงผลของชิ้นส่วน
    const togglePartVisibility_<?php echo $skin_row['id']; ?> = (part, visible) => {
        skinViewer_<?php echo $skin_row['id']; ?>.playerObject.skin[part].visible = visible;
    };
    // ดึง Element ของ checkbox สำหรับชิ้นส่วนแต่ละส่วน
    document.getElementById("toggleHead_<?php echo $skin_row['id']; ?>").addEventListener("change", function() {
        togglePartVisibility_<?php echo $skin_row['id']; ?>("head", this.checked);
    });
    document.getElementById("toggleLeftArm_<?php echo $skin_row['id']; ?>").addEventListener("change", function() {
        togglePartVisibility_<?php echo $skin_row['id']; ?>("leftArm", this.checked);
    });
    document.getElementById("toggleRightArm_<?php echo $skin_row['id']; ?>").addEventListener("change", function() {
        togglePartVisibility_<?php echo $skin_row['id']; ?>("rightArm", this.checked);
    });
    document.getElementById("toggleBody_<?php echo $skin_row['id']; ?>").addEventListener("change", function() {
        togglePartVisibility_<?php echo $skin_row['id']; ?>("body", this.checked);
    });
    document.getElementById("toggleLeftLeg_<?php echo $skin_row['id']; ?>").addEventListener("change", function() {
        togglePartVisibility_<?php echo $skin_row['id']; ?>("leftLeg", this.checked);
    });
    document.getElementById("toggleRightLeg_<?php echo $skin_row['id']; ?>").addEventListener("change", function() {
        togglePartVisibility_<?php echo $skin_row['id']; ?>("rightLeg", this.checked);
    });



    // ฟังก์ชันสำหรับจัดการแอนิเมชัน
    const setAnimation_<?php echo $skin_row['id']; ?> = (type) => {
        // ลบแอนิเมชันเก่า
        skinViewer_<?php echo $skin_row['id']; ?>.animation = null;

        // ตั้งค่าแอนิเมชันใหม่
        if (type === "walk") {
            const walkAnimation = new skinview3d.WalkingAnimation();
            walkAnimation.speed = 1; // ความเร็วปกติ
            skinViewer_<?php echo $skin_row['id']; ?>.animation = walkAnimation;
        } else if (type === "slowRun") {
            const runAnimation = new skinview3d.RunningAnimation();
            runAnimation.speed = 0.5; // วิ่งช้าๆ
            skinViewer_<?php echo $skin_row['id']; ?>.animation = runAnimation;
        } else if (type === "fly") {
            const flyAnimation = new skinview3d.FlyingAnimation();
            flyAnimation.speed = 1; // ความเร็วการบิน
            skinViewer_<?php echo $skin_row['id']; ?>.animation = flyAnimation;
        } else if (type === "rotate") {
            skinViewer_<?php echo $skin_row['id']; ?>.autoRotate = true; // หมุนอัตโนมัติ
        } else {
            skinViewer_<?php echo $skin_row['id']; ?>.autoRotate = false; // หยุดหมุน
            skinViewer_<?php echo $skin_row['id']; ?>.animation = null; // คืนค่าเป็นปกติ
        }
    };

    // ตัวแปรสำหรับสถานะของการหมุน
    let rotateState_<?php echo $skin_row['id']; ?> = false;

    // ฟังก์ชันสำหรับ toggle การหมุน
    const toggleRotate_<?php echo $skin_row['id']; ?> = () => {
        if (rotateState_<?php echo $skin_row['id']; ?>) {
            // ปิดการหมุน
            skinViewer_<?php echo $skin_row['id']; ?>.autoRotate = false;
            rotateState_<?php echo $skin_row['id']; ?> = false;
        } else {
            // เปิดการหมุน
            skinViewer_<?php echo $skin_row['id']; ?>.autoRotate = true;
            rotateState_<?php echo $skin_row['id']; ?> = true;
        }
    };

    // Event listener สำหรับปุ่มแอนิเมชัน
    document.getElementById("normal_<?php echo $skin_row['id']; ?>").addEventListener("click", () => setAnimation_<?php echo $skin_row['id']; ?>(null));
    document.getElementById("walk_<?php echo $skin_row['id']; ?>").addEventListener("click", () => setAnimation_<?php echo $skin_row['id']; ?>("walk"));
    document.getElementById("slowRun_<?php echo $skin_row['id']; ?>").addEventListener("click", () => setAnimation_<?php echo $skin_row['id']; ?>("slowRun"));
    document.getElementById("fly_<?php echo $skin_row['id']; ?>").addEventListener("click", () => setAnimation_<?php echo $skin_row['id']; ?>("fly"));
    document.getElementById("rotate_<?php echo $skin_row['id']; ?>").addEventListener("click", () => toggleRotate_<?php echo $skin_row['id']; ?>()); // เปลี่ยนเป็น toggleRotate
</script>