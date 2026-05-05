document.addEventListener("DOMContentLoaded", () => {
  const observerOptions = {
    threshold: 0.2, // เมื่อเห็น 20% ของ element
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if (entry.target.classList.contains("box-animate")) {
          entry.target.classList.add("show");
        }
        if (entry.target.classList.contains("img-pop-trigger")) {
          entry.target.classList.add("img-pop");
        }
      } else {
        // เมื่อ element เลื่อนออกไป ให้ลบ class เพื่อให้ animation พร้อมเล่นใหม่ตอนเลื่อนกลับมา
        if (entry.target.classList.contains("box-animate")) {
          entry.target.classList.remove("show");
        }
        if (entry.target.classList.contains("img-pop-trigger")) {
          entry.target.classList.remove("img-pop");
        }
      }
    });
  }, observerOptions);

  document.querySelectorAll(".box-animate").forEach((el) => {
    observer.observe(el);
  });

  const img = document.querySelector(".img-pop-trigger");
  if (img) observer.observe(img);
});
