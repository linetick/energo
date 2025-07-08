document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector(".menu-toggle");
  const headerTop = document.querySelector(".header-top");
  const logoPhone = document.querySelector(".logo-phone");

  function closeMobileMenu() {
    menuToggle.classList.remove("active");
    headerTop.classList.remove("active");
    logoPhone.classList.remove("hidden");
    document.body.style.overflow = "";
  }

  menuToggle.addEventListener("click", function () {
    this.classList.toggle("active");
    headerTop.classList.toggle("active");

    logoPhone.classList.toggle("hidden", headerTop.classList.contains("active"));

    document.body.style.overflow = headerTop.classList.contains("active")
      ? "hidden"
      : "";
  });

  const navLinks = document.querySelectorAll(".main-nav a");
  navLinks.forEach((link) => {
    link.addEventListener("click", function () {
      if (window.innerWidth <= 773) {
        closeMobileMenu();
      }
    });
  });

  // 🧠 Сброс при увеличении окна
  window.addEventListener("resize", function () {
    if (window.innerWidth > 773) {
      closeMobileMenu();
    }
  });
});

