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
