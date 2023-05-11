const DARK_THEME_PREFERENCE_KEY = "prefersDarkTheme"

const themeBtn = document.getElementById("change-theme-btn")
const body = document.querySelector("body")

const changeTheme = (state) => {}

const handleDarkTheme = () => {
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

const homepage = document.querySelector(".home")
const mockpost = homepage.querySelector(".copy-me")

const NUMBER_OF_MOCKS = 5

for (let index = 0; index < NUMBER_OF_MOCKS; index++) {
  const mock = mockpost.cloneNode(true)
  homepage.appendChild(mock)
}
