const themeToggle = document.querySelector("#themeToggle");
const body = document.querySelector("body");

themeToggle.addEventListener("click", () => {
  if (body.classList.contains("dark")) {
    body.classList.remove("dark");
    themeToggle.firstChild.classList.remove("fa-moon");
    themeToggle.firstChild.classList.add("fa-sun");
    document.querySelector(":root").style.setProperty("--clr-light", "#000");
    document.querySelector(":root").style.setProperty("--clr-dark", "#fff");
  } else {
    body.classList.add("dark");
    themeToggle.firstChild.classList.remove("fa-sun");
    themeToggle.firstChild.classList.add("fa-moon");
    document.querySelector(":root").style.setProperty("--clr-light", "#fff");
    document.querySelector(":root").style.setProperty("--clr-dark", "#000");
  }
});
