import { hasShareButton } from "./modules/share.js";


const themeBtn = document.getElementById("change-theme-btn")
themeBtn.addEventListener("click", function (ev) {
  let isDarkPrefer = Number(localStorage.getItem(DARK_THEME_PREFERENCE_KEY))
  localStorage.setItem(DARK_THEME_PREFERENCE_KEY, Boolean(isDarkPrefer) ? 0 : 1)
  handleDarkTheme()
})



hasShareButton()