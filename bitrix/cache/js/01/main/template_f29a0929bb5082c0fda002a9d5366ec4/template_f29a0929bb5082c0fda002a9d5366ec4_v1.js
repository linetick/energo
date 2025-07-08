
; /* Start:"a:4:{s:4:"full";s:49:"/local/templates/main/script/map.js?1751964922542";s:6:"source";s:35:"/local/templates/main/script/map.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
document.addEventListener("DOMContentLoaded", function () {
  if (typeof ymaps === "undefined") return;

  ymaps.ready(function () {
    var map = new ymaps.Map("map", {
      center: [55.977204, 92.856875],
      zoom: 14,
    });

    var placemark = new ymaps.Placemark([55.977204, 92.856875], {
      hintContent: "Фармэнерго",
      balloonContent: "Красноярский край, г. Красноярск, ул. 60 лет Октября, зд. 2/50",
    });

    map.geoObjects.add(placemark);
  });
});

/* End */
;
; /* Start:"a:4:{s:4:"full";s:53:"/local/templates/main/script/header.js?17519649221222";s:6:"source";s:38:"/local/templates/main/script/header.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
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
; /* Start:"a:4:{s:4:"full";s:56:"/local/templates/main/script/accordion.js?17519649221060";s:6:"source";s:41:"/local/templates/main/script/accordion.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
document.addEventListener("DOMContentLoaded", function () {
  const categories = document.querySelectorAll("details.info-cat");

  categories.forEach((cat) => {
    const summary = cat.querySelector("summary");
    const wrapper = cat.querySelector(".doc-wrap");

    // Если открыт — задаём начальную высоту
    if (cat.hasAttribute("open")) {
      wrapper.style.maxHeight = wrapper.scrollHeight + "px";
    }

    summary.addEventListener("click", function (e) {
      e.preventDefault();

      const isOpen = cat.hasAttribute("open");

      // Закрываем все
      categories.forEach((other) => {
        other.removeAttribute("open");
        const otherWrap = other.querySelector(".doc-wrap");
        if (otherWrap) otherWrap.style.maxHeight = null;
      });

      // Если не был открыт — открываем
      if (!isOpen) {
        cat.setAttribute("open", "");
        wrapper.style.maxHeight = wrapper.scrollHeight + "px";
      }
    });
  });
});

/* End */
;; /* /local/templates/main/script/map.js?1751964922542*/
; /* /local/templates/main/script/header.js?17519649221222*/
; /* /local/templates/main/script/accordion.js?17519649221060*/
