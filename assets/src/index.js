import "./main.css";

const hamburgerElem = document.getElementsByClassName("hamburger");

hamburgerElem[0].addEventListener("click", (e) => {
  console.log("clicked hamburger!");
  const mainNav = document.querySelector(".main-nav");

  mainNav.classList.toggle("hidden");
  mainNav.classList.toggle("flex");

  const topBar = document.querySelector(".top-bar");

  if (topBar.classList.contains("flex")) {
    topBar.classList.toggle("hidden");
    topBar.classList.toggle("flex");
  }
});

const kebabElem = document.querySelector(".kebab-menu");

kebabElem.addEventListener("click", (e) => {
  console.log("clicked topbar icon");
  const topBar = document.querySelector(".top-bar");

  topBar.classList.toggle("hidden");
  topBar.classList.toggle("flex");

  const mainNav = document.querySelector(".main-nav");

  if (mainNav.classList.contains("flex")) {
    mainNav.classList.toggle("hidden");
    mainNav.classList.toggle("flex");
  }
});
