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
