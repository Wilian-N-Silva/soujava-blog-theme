const themeBtn = document.getElementById("change-theme-btn")
themeBtn.addEventListener("click", function (ev) {
  let isDarkPrefer = Number(localStorage.getItem(DARK_THEME_PREFERENCE_KEY))
  localStorage.setItem(DARK_THEME_PREFERENCE_KEY, Boolean(isDarkPrefer) ? 0 : 1)
  handleDarkTheme()
})

const homepage = document.querySelector(".home")
const mockpost = homepage.querySelector(".copy-me")

const NUMBER_OF_MOCKS = 5

for (let index = 0; index < NUMBER_OF_MOCKS; index++) {
  const mock = mockpost.cloneNode(true)
  homepage.appendChild(mock)
}
