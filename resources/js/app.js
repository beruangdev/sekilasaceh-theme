// Navigation toggle
window.addEventListener('load', function () {
    this.document.querySelectorAll(".button-menu").forEach(el => {
        el.addEventListener("click", (e) => {
            e.preventDefault()
            this.document.querySelector(".wrapper-menu").classList.toggle("hidden")
        })
    })


    // Menu Dropdown
    this.document.body.addEventListener("click", (e) => {
        if (!e.target.classList.contains("button-dropdown") && !e.target.closest(".button-dropdown")) {
            this.document.querySelectorAll(".button-dropdown").forEach(el => {
                if (!el.nextElementSibling.classList.contains("hidden")) {
                    el.nextElementSibling.classList.add("hidden")
                }
            })
        }
    })

    this.document.querySelectorAll(".button-dropdown").forEach(el => {
        el.addEventListener("click", () => {
            el.nextElementSibling.classList.toggle("hidden")
        })
    });
    
    // Menu Dropdown END
    
    this.document.querySelectorAll(".search-submit").forEach(el => {
        el.addEventListener("click", (e) => {
            e.preventDefault()
            el.closest(".wrapper-search").classList.toggle("active")
        })
    });
});
