
; /* Start:"a:4:{s:4:"full";s:49:"/local/templates/main/script/map.js?1751890341417";s:6:"source";s:35:"/local/templates/main/script/map.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
ymaps.ready(function () {
  var map = new ymaps.Map("footer-map", {
    center: [55.76, 37.64],
    zoom: 14,
  });

  var placemark = new ymaps.Placemark([55.76, 37.64], {
    hintContent: "Фармэнерго",
    balloonContent: "Адрес: 660042, Красноярский край, г. Красноярск, ул. 60 лет Октября, зд. 2/50"
  });

  map.geoObjects.add(placemark);
});

/* End */
;
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
;
; /* Start:"a:4:{s:4:"full";s:55:"/local/templates/main/script/accordion.js?1751892650558";s:6:"source";s:41:"/local/templates/main/script/accordion.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
document.querySelectorAll('details.info-cat').forEach((cat) => {
  const wrapper = cat.querySelector('.doc-wrap');
  if (cat.open) wrapper.style.maxHeight = wrapper.scrollHeight + 'px';
  cat.addEventListener('toggle', () => {
    if (cat.open) {
      document.querySelectorAll('details.info-cat[open]').forEach((other) => {
        if (other !== cat) {
          other.removeAttribute('open');
        }
      });
      wrapper.style.maxHeight = wrapper.scrollHeight + 'px';
    } else {
      wrapper.style.maxHeight = null;
    }
  });
});
/* End */
;; /* /local/templates/main/script/map.js?1751890341417*/
; /* /local/templates/main/script/header.js?17515241871489*/
; /* /local/templates/main/script/accordion.js?1751892650558*/
