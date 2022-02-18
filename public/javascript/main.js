// xs, sm, md, lg, xl, 2xl - theme toggle consts
const themeToggle = document.querySelector("#theme-toggle");
const themeToggleMobile = document.querySelector("#theme-toggle-mobile");
const html = document.querySelector("html");

// lg, xl, 2xl - save theme toggle state
function saveToggleState() {
  var checkbox = document.getElementById("theme-toggle");
  var checkbox2 = document.getElementById("theme-toggle-mobile");
  localStorage.setItem("theme-toggle", checkbox.checked);
  localStorage.setItem("theme-toggle-mobile", checkbox.checked);
}

// xs, sm, md - save theme toggle state
function saveToggleStateMobile() {
  var checkbox = document.getElementById("theme-toggle");
  var checkbox2 = document.getElementById("theme-toggle-mobile");
  localStorage.setItem("theme-toggle-mobile", checkbox2.checked);
  localStorage.setItem("theme-toggle", checkbox2.checked);
}

// xs, sm, md, lg, xl, 2xl - load saved theme state
function loadToggleState() {
  var checked = JSON.parse(localStorage.getItem("theme-toggle"));
  document.getElementById("theme-toggle").checked = checked;
  // deepcode ignore RedeclarationVars: <please specify a reason of ignoring this>
  var checked = JSON.parse(localStorage.getItem("theme-toggle-mobile"));
  document.getElementById("theme-toggle-mobile").checked = checked;
}

// xs, sm, md - theme toggle mobile function
var toggleThemeMobile = function () {
  themeToggleMobile.checked
    ? window.localStorage.setItem("theme", "dark")
    : localStorage.setItem("theme", "light");
  if (localStorage.theme === "dark") {
    html.classList.add("dark", "c_darkmode");
    var checked = JSON.parse(localStorage.getItem("theme-toggle"));
    document.getElementById("theme-toggle").checked = checked;
    document.getElementById("moon-mobile").classList.remove("hidden");
    document.getElementById("sun-mobile").classList.add("hidden");
    document.getElementById("moon").classList.remove("hidden");
    document.getElementById("sun").classList.add("hidden");
  } else {
    html.classList.remove("dark", "c_darkmode");
    var checked = JSON.parse(localStorage.getItem("theme-toggle"));
    document.getElementById("theme-toggle").checked = checked;
    document.getElementById("sun-mobile").classList.remove("hidden");
    document.getElementById("moon-mobile").classList.add("hidden");
    document.getElementById("sun").classList.remove("hidden");
    document.getElementById("moon").classList.add("hidden");
  }
};

// lg, xl, 2xl - theme toggle functions
var toggleTheme = function () {
  themeToggle.checked
    ? window.localStorage.setItem("theme", "dark")
    : localStorage.setItem("theme", "light");
  if (localStorage.theme === "dark") {
    html.classList.add("dark", "c_darkmode");
    var checked = JSON.parse(localStorage.getItem("theme-toggle-mobile"));
    document.getElementById("theme-toggle-mobile").checked = checked;
    document.getElementById("moon").classList.remove("hidden");
    document.getElementById("moon-mobile").classList.remove("hidden");
    document.getElementById("sun").classList.add("hidden");
    document.getElementById("sun-mobile").classList.add("hidden");
  } else {
    html.classList.remove("dark", "c_darkmode");
    var checked = JSON.parse(localStorage.getItem("theme-toggle-mobile"));
    document.getElementById("theme-toggle-mobile").checked = checked;
    document.getElementById("sun").classList.remove("hidden");
    document.getElementById("moon").classList.add("hidden");
    document.getElementById("sun-mobile").classList.remove("hidden");
    document.getElementById("moon-mobile").classList.add("hidden");
  }
};

// xs, sm, md - calling theme toggle mobile function directly
toggleThemeMobile();
themeToggleMobile.addEventListener("click", toggleThemeMobile);

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

sleep(200).then(() => {
  document.getElementById("dot").classList.add("transition");
});

// lg, xl, 2xl - calling theme toggle function directly
toggleTheme();
themeToggle.addEventListener("click", toggleTheme);

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

sleep(200).then(() => {
  document.getElementById("dot").classList.add("transition");
  document.getElementById("dot2").classList.add("transition");
});

// xs, sm, md, lg, xl, 2xl - calling function directly
loadToggleState();

// xs, sm, md - ui and accessbility mobile menu consts
const menuMobile = document.getElementById("menu-wrapper-mobile");
const menuNavMobile = document.querySelector(".header-wrapper");
const menuButtonMobile = document.getElementById("menu-button-mobile");
const menuBurgerMobile = document.getElementById("hamburger");

// xs, sm, md - mobile menu button click listener
menuButtonMobile.addEventListener("click", () => {
  menuMobile.classList.toggle("hidden");
});

// xs, sm, md - mobile menu click outside and close
document.addEventListener("click", function (event) {
  if (event.target.closest(".header-wrapper")) return;
  menuMobile.classList.add("hidden");
  menuButtonMobile.classList.remove("active");
  menuBurgerMobile.setAttribute("aria-expanded", "false");
});

// xs, sm, md  - add aria label open to mobile nav when open
function menuAttributeMobile() {
  document.getElementById("menu-button-mobile").classList.toggle("active");
  var x = document.getElementById("hamburger").getAttribute("aria-expanded");
  if (x == "true") {
    x = "false";
  } else {
    x = "true";
  }
  document.getElementById("hamburger").setAttribute("aria-expanded", x);
}

// xs, sm, md, lg, xl, 2xl - menu keyboard bindings for accessibility
var kbAccess = document.getElementById("theme-toggle");
kbAccess.addEventListener("keyup", function (event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("theme-toggle").click();
  }
});
var kbAccessMobile = document.getElementById("theme-toggle-mobile");
kbAccessMobile.addEventListener("keyup", function (event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("theme-toggle-mobile").click();
  }
});

// xs, sm, md, lg, xl, 2xl - active nav link styles
window.onload = function () {
  var navLinks = document.getElementById("nav-ul").getElementsByTagName("a"),
    i = 0, len = navLinks.length, full_path = location.href.split("#")[0];
  for (; i < len; i++) {
    if (navLinks[i].href.split("#")[0] == full_path) {
      navLinks[i].className += " active";
    }
  }
  var navLinksMobile = document
      .getElementById("nav-ul-mobile")
      .getElementsByTagName("a"),
    b = 0, lenny = navLinksMobile.length, full_path2 = location.href.split("#")[0]; 
  for (; b < lenny; b++) {
    if (navLinksMobile[b].href.split("#")[0] == full_path2) {
      navLinksMobile[b].className += " active";
    }
  }
};

// xs, sm, md, lg, xl, 2xl - load google tag manager or analytics
const gtm = "false"

if (gtm => true) {
  document.addEventListener("DOMContentLoaded", () => {
    setTimeout(initGTM, 3500);
  });
  document.addEventListener("scroll", initGTMOnEvent);
  document.addEventListener("mousemove", initGTMOnEvent);
  document.addEventListener("touchstart", initGTMOnEvent);
  function initGTMOnEvent(event) {
    initGTM();
    event.currentTarget.removeEventListener(event.type, initGTMOnEvent);
  }
  function initGTM() {
    if (window.gtmDidInit) {
      return false;
    }
    window.gtmDidInit = true;
    const script = document.createElement("script");
    script.type = "text/javascript";
    script.async = true;
    script.onload = () => {
      dataLayer.push({
        event: "gtm.js",
        "gtm.start": new Date().getTime(),
        "gtm.uniqueEventId": 0,
      });
    };
    script.src = "https://www.googletagmanager.com/gtm.js?id=GTM-XXXX";
    document.head.appendChild(script);
  }
} else {
  console.log("gtm is false")
}
