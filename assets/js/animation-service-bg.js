 const container = document.getElementById("grid-dots-container");

  function createDot() {
    const dot = document.createElement("div");
    const size = Math.random() * 40 + 20; // 20–60px
    const top = Math.random() * 100;
    const left = Math.random() * 100;

    dot.className = "dot";
    dot.style.width = `${size}px`;
    dot.style.height = `${size}px`;
    dot.style.top = `${top}%`;
    dot.style.left = `${left}%`;
    dot.style.animationDuration = `${8 + Math.random() * 6}s`;

    // ✅ เมื่อคลิกให้วงกลมแตกแล้วสร้างใหม่
    dot.addEventListener("click", () => {
      dot.classList.add("bubble-pop");
      setTimeout(() => {
        dot.remove();           // ลบออก
        container.appendChild(createDot()); // สร้างใหม่
      }, 400); // ต้องตรงกับ transition time
    });

    return dot;
  }

  function createBeautifulDots(numDots = 35) {
    for (let i = 0; i < numDots; i++) {
      container.appendChild(createDot());
    }
  }

  createBeautifulDots();