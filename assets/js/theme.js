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


