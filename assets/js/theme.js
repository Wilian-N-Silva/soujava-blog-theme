const DARK_THEME_PREFERENCE_KEY = "prefersDarkTheme"

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


window.onload = () => {
  if (!localStorage.getItem(DARK_THEME_PREFERENCE_KEY)) {
    let isDarkPrefer = window.matchMedia("(prefers-color-scheme: dark)").matches
    localStorage.setItem(DARK_THEME_PREFERENCE_KEY, isDarkPrefer ? 1 : 0)
  }
  handleDarkTheme()
}

