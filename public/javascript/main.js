// Dark and light mode toggle
const themeToggle = document.querySelector("#toggle");
const themeToggleMobile = document.querySelector("#toggle2");
const html = document.querySelector("html");
0;

// this function does not work on mobile slider
function saveToggleState() {
  var checkbox = document.getElementById("toggle");
  var checkbox2 = document.getElementById("toggle2");
  localStorage.setItem("toggle", checkbox.checked);
  localStorage.setItem("toggle2", checkbox.checked);
}

function saveToggleStateMobile() {
  var checkbox = document.getElementById("toggle");
  var checkbox2 = document.getElementById("toggle2");
  localStorage.setItem("toggle2", checkbox2.checked);
  localStorage.setItem("toggle", checkbox2.checked);
}

// this load is functioning properly
function loadToggleState() {
  var checked = JSON.parse(localStorage.getItem("toggle"));
  document.getElementById("toggle").checked = checked;
  // deepcode ignore RedeclarationVars: <please specify a reason of ignoring this>
  var checked = JSON.parse(localStorage.getItem("toggle2"));
  document.getElementById("toggle2").checked = checked;
}

loadToggleState();

var toggleTheme = function () {
  themeToggle.checked
    ? window.localStorage.setItem("theme", "dark")
    : localStorage.setItem("theme", "light");
  if (localStorage.theme === "dark") {
    html.classList.add("dark", "c_darkmode");
    var checked = JSON.parse(localStorage.getItem("toggle2"));
    document.getElementById("toggle2").checked = checked;
    document.getElementById("moon").classList.remove("hidden");
    document.getElementById("moon2").classList.remove("hidden");
    document.getElementById("sun").classList.add("hidden");
    document.getElementById("sun2").classList.add("hidden");
  } else {
    html.classList.remove("dark", "c_darkmode");
    var checked = JSON.parse(localStorage.getItem("toggle2"));
    document.getElementById("toggle2").checked = checked;
    document.getElementById("sun").classList.remove("hidden");
    document.getElementById("moon").classList.add("hidden");
    document.getElementById("sun2").classList.remove("hidden");
    document.getElementById("moon2").classList.add("hidden");
  }
};

var toggleThemeMobile = function () {
  themeToggleMobile.checked
    ? window.localStorage.setItem("theme", "dark")
    : localStorage.setItem("theme", "light");
  if (localStorage.theme === "dark") {
    html.classList.add("dark", "c_darkmode");
    var checked = JSON.parse(localStorage.getItem("toggle"));
    document.getElementById("toggle").checked = checked;
    document.getElementById("moon2").classList.remove("hidden");
    document.getElementById("sun2").classList.add("hidden");
    document.getElementById("moon").classList.remove("hidden");
    document.getElementById("sun").classList.add("hidden");
  } else {
    html.classList.remove("dark", "c_darkmode");
    var checked = JSON.parse(localStorage.getItem("toggle"));
    document.getElementById("toggle").checked = checked;
    document.getElementById("sun2").classList.remove("hidden");
    document.getElementById("moon2").classList.add("hidden");
    document.getElementById("sun").classList.remove("hidden");
    document.getElementById("moon").classList.add("hidden");
  }
};

// Calling the function directly
toggleThemeMobile();
themeToggleMobile.addEventListener("click", toggleThemeMobile);

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

// deepcode ignore PromiseNotCaughtGeneral: <please specify a reason of ignoring this>
sleep(200).then(() => {
  document.getElementById("dot").classList.add("transition");
});
// Calling the function directly
toggleTheme();
themeToggle.addEventListener("click", toggleTheme);

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

sleep(200).then(() => {
  document.getElementById("dot").classList.add("transition");
  document.getElementById("dot2").classList.add("transition");
});

// Navigation links javascript + active link color and border-bottom
window.onload = function () {
  var navLinks = document.getElementById("nav-ul").getElementsByTagName("a"),
    i = 0,
    len = navLinks.length,
    full_path = location.href.split("#")[0]; //Ignore hashes?

  // Loop through each link.
  for (; i < len; i++) {
    if (navLinks[i].href.split("#")[0] == full_path) {
      navLinks[i].className += " active";
    }
  }
  var navLinksMobile = document
      .getElementById("nav-ul-mobile")
      .getElementsByTagName("a"),
    b = 0,
    lenny = navLinksMobile.length,
    full_path2 = location.href.split("#")[0]; //Ignore hashes?

  // Loop through each link.
  for (; b < lenny; b++) {
    if (navLinksMobile[b].href.split("#")[0] == full_path2) {
      navLinksMobile[b].className += " active";
    }
  }
}; // this closes window.onload

// keyboard bilnding enter key
var kbAccess = document.getElementById("toggle");
kbAccess.addEventListener("keyup", function (event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("toggle").click();
  }
});
var kbAccessMobile = document.getElementById("toggle2");
kbAccessMobile.addEventListener("keyup", function (event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("toggle2").click();
  }
});

// Select the button on which the
// class has to be toggled
const menuMobile = document.getElementById("hello");
const menuNavMobile = document.querySelector(".headclose");
const menuButtonMobile = document.getElementById("prof");
const menuBurgerMobile = document.getElementById("hamburger");

// Add Event Listeners
menuButtonMobile.addEventListener("click", () => {
  menuMobile.classList.toggle("hidden");
});

// Add an event listener for a
// click to the html document
document.addEventListener("click", function (event) {
  // If the element that is clicked on is
  // not the button itself, then remove
  // the class that was added earlier
  if (event.target.closest(".headclose")) return;
  menuMobile.classList.add("hidden");
  menuButtonMobile.classList.remove("active");
  menuBurgerMobile.setAttribute("aria-expanded", "false");
});

// add aria label open to mobile nav when open
function menuAttributeMobile() {
  document.getElementById("prof").classList.toggle("active");
  var x = document.getElementById("hamburger").getAttribute("aria-expanded");
  if (x == "true") {
    x = "false";
  } else {
    x = "true";
  }
  document.getElementById("hamburger").setAttribute("aria-expanded", x);
}

document.addEventListener("DOMContentLoaded", () => {
  /** init gtm after 3500 seconds - this could be adjusted */
  setTimeout(initGTM, 3500);
});
document.addEventListener("scroll", initGTMOnEvent);
document.addEventListener("mousemove", initGTMOnEvent);
document.addEventListener("touchstart", initGTMOnEvent);
function initGTMOnEvent(event) {
  initGTM();
  event.currentTarget.removeEventListener(event.type, initGTMOnEvent); // remove the event listener that got triggered
}
function initGTM() {
  if (window.gtmDidInit) {
    return false;
  }
  window.gtmDidInit = true; // flag to ensure script does not get added to DOM more than once.
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
  // this part ensures PageViews is always tracked
  script.src = "https://www.googletagmanager.com/gtm.js?id=GTM-XXXX";
  document.head.appendChild(script);
}
