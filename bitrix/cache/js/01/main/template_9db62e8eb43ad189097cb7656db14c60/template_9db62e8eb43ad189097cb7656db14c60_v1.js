
; /* Start:"a:4:{s:4:"full";s:53:"/local/templates/main/script/header.js?17515241871489";s:6:"source";s:38:"/local/templates/main/script/header.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector(".menu-toggle");
  const headerTop = document.querySelector(".header-top");
  const logoPhone = document.querySelector(".logo-phone"); // Получаем элемент логотипа

  menuToggle.addEventListener("click", function () {
    // Переключаем классы active для меню и кнопки
    this.classList.toggle("active");
    headerTop.classList.toggle("active");

    // Переключаем видимость логотипа
    logoPhone.classList.toggle(
      "hidden",
      headerTop.classList.contains("active")
    );

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
        logoPhone.classList.remove("hidden"); // Показываем логотип при закрытии
        document.body.style.overflow = "";
      }
    });
  });
});

/* End */
;; /* /local/templates/main/script/header.js?17515241871489*/
