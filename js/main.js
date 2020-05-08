const menu = document.getElementById("menu__wrapper");
const menu__mobile = document.getElementById("menu__mobile-wrapper");
const close = document.getElementById("close__mobile");
const menuside = document.getElementById("menu__side");
const menucontent = document.getElementById("menu__content");

const specifiedElement = document.getElementById("menu__side");
const specifiedElementtest = document.getElementById("menu__side");

const menu__mobile2 = document.getElementById("menu__mobile");
const header = document.querySelector(".header__logo_link ul");
const headerlink = document.querySelector(".test");

const header_link = document.querySelector(".header__logo_link ul li a");

const lang = document.querySelector(".lang__link");
const lang_select = document.querySelector(".lang__select");

lang.onclick = function () {
  event.preventDefault();
  if (lang_select.style.display === "") {
    return (lang_select.style.display = "block");
  } else if (lang_select.style.display === "block") {
    return (lang_select.style.display = "none");
  } else {
    lang_select.style.display = "block";
  }
};

document.addEventListener("click", function (event) {
  const isClickInside = menucontent.contains(event.target);
  const isClickInsidehhh = menu__mobile2.contains(event.target);

  if (isClickInside) {
  } else if (isClickInsidehhh) {
  } else {
    menucontent.classList.remove("active");
    menu__mobile.classList.remove("opened");
  }
});
menuside.onclick = function () {
  menucontent.classList.toggle("active");
};

menu.onclick = function () {
  menu__mobile.classList.add("opened");
};

close.onclick = function () {
  menu__mobile.classList.remove("opened");
};
