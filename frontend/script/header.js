document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector(".menu-toggle");
  const headerTop = document.querySelector(".header-top");

  menuToggle.addEventListener("click", function () {
    this.classList.toggle("active");
    headerTop.classList.toggle("active");

    // Блокировка прокрутки страницы при открытом меню
    if (headerTop.classList.contains("active")) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "";
    }
  });

  // Закрытие меню при клике на ссылку
  const navLinks = document.querySelectorAll(".main-nav a");
  navLinks.forEach((link) => {
    link.addEventListener("click", function () {
      if (window.innerWidth <= 773) {
        menuToggle.classList.remove("active");
        headerTop.classList.remove("active");
        document.body.style.overflow = "";
      }
    });
  });
});
