/* Custom javascript goes here, please comment your code */

// Dark and light mode toggle
const toggle = document.querySelector("#toggle");
const toggle2 = document.querySelector("#toggle2");
const html = document.querySelector("html");

// this function does not work on mobile slider
function save() {
  var checkbox = document.getElementById("toggle");
  var checkbox2 = document.getElementById("toggle2");
  localStorage.setItem("toggle", checkbox.checked);
  localStorage.setItem("toggle2", checkbox.checked);
}

function save2() {
  var checkbox = document.getElementById("toggle");
  var checkbox2 = document.getElementById("toggle2");
  localStorage.setItem("toggle2", checkbox2.checked);
  localStorage.setItem("toggle", checkbox2.checked);
}

// this load is functioning properly
function load() {
  var checked = JSON.parse(localStorage.getItem("toggle"));
  document.getElementById("toggle").checked = checked;
  // deepcode ignore RedeclarationVars: <please specify a reason of ignoring this>
  var checked = JSON.parse(localStorage.getItem("toggle2"));
  document.getElementById("toggle2").checked = checked;
}

load();

var toggleDarkMode = function () {
  toggle.checked
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

var toggleDarkMode2 = function () {
  toggle2.checked
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
toggleDarkMode2();
toggle2.addEventListener("click", toggleDarkMode2);

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

// deepcode ignore PromiseNotCaughtGeneral: <please specify a reason of ignoring this>
sleep(200).then(() => {
  document.getElementById("dot").classList.add("transition");
});
// Calling the function directly
toggleDarkMode();
toggle.addEventListener("click", toggleDarkMode);

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

sleep(200).then(() => {
  document.getElementById("dot").classList.add("transition");
  document.getElementById("dot2").classList.add("transition");
});

// Navigation links javascript + active link color and border-bottom
window.onload = function () {
  var all_links = document
      .getElementById("navigation-ol")
      .getElementsByTagName("a"),
    i = 0,
    len = all_links.length,
    full_path = location.href.split("#")[0]; //Ignore hashes?

  // Loop through each link.
  for (; i < len; i++) {
    if (all_links[i].href.split("#")[0] == full_path) {
      all_links[i].className += " active";
    }
  }
  var all_links2 = document
      .getElementById("navigation-ol-mobile")
      .getElementsByTagName("a"),
    b = 0,
    len2 = all_links2.length,
    full_path2 = location.href.split("#")[0]; //Ignore hashes?

  // Loop through each link.
  for (; b < len2; b++) {
    if (all_links2[b].href.split("#")[0] == full_path2) {
      all_links2[b].className += " active";
    }
  }
}; // this closes window.onload

// Mobile Menu
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

// Add Event Listeners
btn.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});

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
  }; // this part ensures PageViews is always tracked
  script.src = "https://www.googletagmanager.com/gtm.js?id=GTM-XXXX";
  document.head.appendChild(script);
}
