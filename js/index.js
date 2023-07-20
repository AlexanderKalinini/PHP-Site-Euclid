"use strict";
const burger = document.querySelector(".header__burger");
const menu = document.querySelector(".header__nav-block");
const menuLinks = document.querySelectorAll(".header__nav-items");
const headerSearch = document.querySelector(".header__search");
const headerBtn = document.querySelector(".header__btn");
const headerBtnClose = document.querySelector(".header__button-close");
const headerLogo = document.querySelector(".header__logo");
const input = document.querySelector(".header__input");

const mediaQuery768 = window.matchMedia("(max-width:768px)");
const mediaQuery500 = window.matchMedia("(max-width:500px)");
const mediaQuery1024 = window.matchMedia("(max-width:1024px)");

burger.addEventListener("click", () => {
  burger.classList.toggle("header__burger_active");
  menu.classList.toggle("header__nav_active");
  document.body.classList.toggle("stop_scroll");
});

menuLinks.forEach((link) => {
  link.addEventListener("click", () => {
    burger.classList.remove("header__burger_active");
    menu.classList.remove("header__nav_active");
    document.body.classList.remove("stop_scroll");
  });
});

function openSearch() {
  headerSearch.style.display = "flex";
  headerBtn.style.display = "none";
  if (mediaQuery768.matches) {
    headerLogo.style.display = "none";
  }
  if (mediaQuery500.matches) {
    burger.style.display = "none";
  }
}
if (input.value !== "") {
  openSearch();
}

headerBtn.addEventListener("click", function () {
  openSearch();
});

const swiper = new Swiper(".swiper", {
  slidesPerView: 1,
  slidesPerGroup: 1,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
});
