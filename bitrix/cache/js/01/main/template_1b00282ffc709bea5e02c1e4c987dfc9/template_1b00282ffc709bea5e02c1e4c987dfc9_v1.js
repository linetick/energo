
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
; /* Start:"a:4:{s:4:"full";s:53:"/local/templates/main/script/header.js?17518949861222";s:6:"source";s:38:"/local/templates/main/script/header.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
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


/* End */
;
; /* Start:"a:4:{s:4:"full";s:55:"/local/templates/main/script/accordion.js?1751895462819";s:6:"source";s:41:"/local/templates/main/script/accordion.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll('details.info-cat').forEach((cat) => {
    const wrapper = cat.querySelector('.doc-wrap');
    if (cat.open) {
      wrapper.style.maxHeight = wrapper.scrollHeight + 'px';
    }

    cat.addEventListener('toggle', () => {
      document.querySelectorAll('details.info-cat[open]').forEach((other) => {
        if (other !== cat) {
          other.removeAttribute('open');
          const otherWrap = other.querySelector('.doc-wrap');
          if (otherWrap) {
            otherWrap.style.maxHeight = null;
          }
        }
      });

      if (cat.open) {
        wrapper.style.maxHeight = wrapper.scrollHeight + 'px';
      } else {
        wrapper.style.maxHeight = null;
      }
    });
  });
});

/* End */
;; /* /local/templates/main/script/map.js?1751890341417*/
; /* /local/templates/main/script/header.js?17518949861222*/
; /* /local/templates/main/script/accordion.js?1751895462819*/
