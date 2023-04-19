const DARK_THEME_PREFERENCE_KEY = "prefersDarkTheme"

const themeBtn = document.getElementById("change-theme-btn")
const body = document.querySelector("body")

const changeTheme = (state) => {}

const handleDarkTheme = () => {
  const prefersDarkTheme = Number(
    localStorage.getItem(DARK_THEME_PREFERENCE_KEY)
  )

  const bodyClasses = body.classList

  const bodyContainsDarkClass = bodyClasses.contains("dark")

  if (prefersDarkTheme && !bodyContainsDarkClass) {
    bodyClasses.add("dark")
    return
  }

  if (!prefersDarkTheme && bodyContainsDarkClass) {
    bodyClasses.remove("dark")
    return
  }
}

themeBtn.addEventListener("click", function (ev) {
  let isDarkPrefer = Number(localStorage.getItem(DARK_THEME_PREFERENCE_KEY))
  localStorage.setItem(DARK_THEME_PREFERENCE_KEY, Boolean(isDarkPrefer) ? 0 : 1)
  handleDarkTheme()
})

window.onload = () => {
  if (!localStorage.getItem(DARK_THEME_PREFERENCE_KEY)) {
    let isDarkPrefer = window.matchMedia("(prefers-color-scheme: dark)").matches
    localStorage.setItem(DARK_THEME_PREFERENCE_KEY, isDarkPrefer ? 1 : 0)
  }
  handleDarkTheme()
}
