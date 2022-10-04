(() => {
  // resources/js/app.js
  window.addEventListener("load", function() {
    this.document.querySelectorAll(".button-menu").forEach((el) => {
      el.addEventListener("click", (e) => {
        e.preventDefault();
        this.document.querySelector(".wrapper-menu").classList.toggle("hidden");
      });
    });
    this.document.body.addEventListener("click", (e) => {
      if (!e.target.classList.contains("button-dropdown") && !e.target.closest(".button-dropdown")) {
        this.document.querySelectorAll(".button-dropdown").forEach((el) => {
          if (!el.nextElementSibling.classList.contains("hidden")) {
            el.nextElementSibling.classList.add("hidden");
          }
        });
      }
    });
    this.document.querySelectorAll(".button-dropdown").forEach((el) => {
      el.addEventListener("click", () => {
        el.nextElementSibling.classList.toggle("hidden");
      });
    });
  });
})();
