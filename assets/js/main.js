const DARK_THEME_PREFERENCE_KEY = "prefersDarkTheme"

import { hasShareButton } from "./modules/share.js";
import { handleMobileMenu } from "./modules/navmenu.js";

const handleDarkTheme = () => {
  const body = document.querySelector("body")

  const bodyClasses = body.classList
  const bodyContainsDarkClass = bodyClasses.contains("dark")
  const prefersDarkTheme = Number(
    localStorage.getItem(DARK_THEME_PREFERENCE_KEY)
  )

  if (prefersDarkTheme && !bodyContainsDarkClass) {
    bodyClasses.add("dark")
    return
  }

  if (!prefersDarkTheme && bodyContainsDarkClass) {
    bodyClasses.remove("dark")
    return
  }
}

const themeBtn = document.getElementById("change-theme-btn")
themeBtn.addEventListener("click", function (ev) {
  let isDarkPrefer = Number(localStorage.getItem(DARK_THEME_PREFERENCE_KEY))
  localStorage.setItem(DARK_THEME_PREFERENCE_KEY, Boolean(isDarkPrefer) ? 0 : 1)
  handleDarkTheme()
})


handleMobileMenu()
hasShareButton()

window.addEventListener("load", function (event) {
  handleDarkTheme()
});