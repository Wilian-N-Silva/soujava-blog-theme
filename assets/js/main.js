const themeBtn = document.getElementById("change-theme-btn")
const body = document.querySelector("body")

themeBtn.addEventListener("click", function (ev) {
  body.classList.toggle("dark")
})
