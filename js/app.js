(()=>{window.addEventListener("load",function(){this.document.querySelectorAll(".button-menu").forEach(t=>{t.addEventListener("click",e=>{e.preventDefault(),this.document.querySelector(".wrapper-menu").classList.toggle("hidden")})}),this.document.body.addEventListener("click",t=>{!t.target.classList.contains("button-dropdown")&&!t.target.closest(".button-dropdown")&&this.document.querySelectorAll(".button-dropdown").forEach(e=>{e.nextElementSibling.classList.contains("hidden")||e.nextElementSibling.classList.add("hidden")})}),this.document.querySelectorAll(".button-dropdown").forEach(t=>{t.addEventListener("click",()=>{t.nextElementSibling.classList.toggle("hidden")})})});})();
