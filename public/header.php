<body class="flex flex-col h-screen mx-auto text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-900 transition motion-reduce:transition-none">
<header aria-label="navigation" class="">
<!-- secondary (top) navbar goes here -->
<div class="bg-neutral-400 dark:bg-neutral-900 hidden md:block">
<nav class="flex max-w-5xl mx-auto px-4 py-1 justify-evenly w-full">
  <!-- left group -->
  <div class="flex justify-evenly my-auto text-sm">
  <a href="tel:<?php echo $phone; ?>"><div class="mr-auto flex justify-evenly">
  <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="phone-square-alt" class="svg-inline--fa fa-phone-square-alt fa-w-14 h-5 w-5 my-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M344.73 309l-56-24a14.46 14.46 0 0 0-4.73-1 13.61 13.61 0 0 0-9.29 4.4l-24.8 30.31a185.51 185.51 0 0 1-88.62-88.62l30.31-24.8A13.61 13.61 0 0 0 196 196a14.2 14.2 0 0 0-1-4.73l-24-56a13 13 0 0 0-11-7.27 14.51 14.51 0 0 0-2.7.31l-52 12A12.57 12.57 0 0 0 96 152c0 128.23 104 232 232 232a12.57 12.57 0 0 0 11.69-9.3l12-52a14.51 14.51 0 0 0 .31-2.7 13 13 0 0 0-7.27-11zM400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48zm0 394a6 6 0 0 1-6 6H54a6 6 0 0 1-6-6V86a6 6 0 0 1 6-6h340a6 6 0 0 1 6 6z"></path></svg>
  &nbsp;<?php echo $phone; ?>
</div>
</a>
<p class="flex">&nbsp &nbsp; <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="clock" class="svg-inline--fa fa-clock fa-w-16 h-5 w-5 my-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path></svg>&nbsp;<?php echo $hours; ?></p>
  </div>
  <!-- right group -->
  <label for="toggle" id="checkbox" class="flex items-center justify-center cursor-pointer text-zinc-400 dark:text-yellow-100 ml-auto">
  <span class="text-xs text-slate-800 dark:text-slate-200">Theme&nbsp;</span>
  <div class="relative">
  <input type="checkbox" id="toggle" class="sr-only darkmode switch" title="darkmode switch" onclick="save();">
  <div class="block bg-gray-600 w-12 h-7 rounded-full"></div>
  <div id="dot" class="dot absolute left-1 top-1 w-5 h-5 rounded-full bg-white flex justify-center mx-auto">
      <div class="flex-col justify-center my-auto">
      <svg id="moon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="moon-stars" class="svg-inline--fa fa-moon-stars h-3 w-4 hidden" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M332.2 426.4c-93.1 17.7-178.5-53.7-178.5-147.7 0-54.2 29-104 76.1-130.8 7.3-4.1 5.4-15.1-2.8-16.7C108.7 109.4 0 200 0 320c0 106 85.8 192 191.8 192 59.2 0 113.2-26.9 149-71.1 5.3-6.5-.5-16.1-8.6-14.5zM304 96l16-32 32-16-32-16-16-32-16 32-32 16 32 16 16 32zm154.7 85.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208l-53.3-26.7z"></path></svg>
      <!-- <svg id="sun" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sun" class="svg-inline--fa fa-sun h-4 w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z"></path></svg> -->
        <svg xmlns="http://www.w3.org/2000/svg" id="sun" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
      </div>
  </div>
  </div>
  </label>
</nav>
</div>
<!-- primary nav -->
<nav class="bg-gray-200 dark:bg-gray-900 transition motion-reduce:transition-none shadow-md shadow-transparent relative">
<div class="max-w-5xl mx-auto px-4">
<div class="flex justify-between">
<div class="flex space-x-7">
<div>
<!-- Website Logo -->
<a href="/" class="flex items-center py-0 px-2">
<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="hooli" class="svg-inline--fa fa-hooli h-20 w-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M144.5 352l38.3.8c-13.2-4.6-26-10.2-38.3-16.8zm57.7-5.3v5.3l-19.4.8c36.5 12.5 69.9 14.2 94.7 7.2-19.9.2-45.8-2.6-75.3-13.3zm408.9-115.2c15.9 0 28.9-12.9 28.9-28.9s-12.9-24.5-28.9-24.5c-15.9 0-28.9 8.6-28.9 24.5s12.9 28.9 28.9 28.9zm-29 120.5H640V241.5h-57.9zm-73.7 0h57.9V156.7L508.4 184zm-31-119.4c-18.2-18.2-50.4-17.1-50.4-17.1s-32.3-1.1-50.4 17.1c-18.2 18.2-16.8 33.9-16.8 52.6s-1.4 34.3 16.8 52.5 50.4 17.1 50.4 17.1 32.3 1.1 50.4-17.1c18.2-18.2 16.8-33.8 16.8-52.5-.1-18.8 1.3-34.5-16.8-52.6zm-39.8 71.9c0 3.6-1.8 12.5-10.7 12.5s-10.7-8.9-10.7-12.5v-40.4c0-8.7 7.3-10.9 10.7-10.9s10.7 2.1 10.7 10.9zm-106.2-71.9c-18.2-18.2-50.4-17.1-50.4-17.1s-32.2-1.1-50.4 17.1c-1.9 1.9-3.7 3.9-5.3 6-38.2-29.6-72.5-46.5-102.1-61.1v-20.7l-22.5 10.6c-54.4-22.1-89-18.2-97.3.1 0 0-24.9 32.8 61.8 110.8V352h57.9v-28.6c-6.5-4.2-13-8.7-19.4-13.6-14.8-11.2-27.4-21.6-38.4-31.4v-31c13.1 14.7 30.5 31.4 53.4 50.3l4.5 3.6v-29.8c0-6.9 1.7-18.2 10.8-18.2s10.6 6.9 10.6 15V317c18 12.2 37.3 22.1 57.7 29.6v-93.9c0-18.7-13.4-37.4-40.6-37.4-15.8-.1-30.5 8.2-38.5 21.9v-54.3c41.9 20.9 83.9 46.5 99.9 58.3-10.2 14.6-9.3 28.1-9.3 43.7 0 18.7-1.4 34.3 16.8 52.5s50.4 17.1 50.4 17.1 32.3 1.1 50.4-17.1c18.2-18.2 16.7-33.8 16.7-52.5 0-18.5 1.5-34.2-16.7-52.3zM65.2 184v63.3c-48.7-54.5-38.9-76-35.2-79.1 13.5-11.4 37.5-8 64.4 2.1zm226.5 120.5c0 3.6-1.8 12.5-10.7 12.5s-10.7-8.9-10.7-12.5v-40.4c0-8.7 7.3-10.9 10.7-10.9s10.7 2.1 10.7 10.9z"></path></svg>
</a>
</div>
<!-- Primary Navbar items -->
<div class="hidden md:flex items-center space-x-1">
<ol id="navigation-ol" class="navigation-ol flex flex-wrap md:inline-flex list-none">
<li class="navigation-links mx-3"><a href="/" class="font-semibold">Home</a></li>
<li class="navigation-links mx-3"><a href="/live-dev-page/" class="font-semibold">Live Dev Page</a></li>
<li class="navigation-links mx-3"><a href="/default-page-template/" class="font-semibold">Default Page Template</a></li>
</ol>
</div>
</div>
<!-- Secondary Navbar items -->

<div class="hidden md:flex items-center space-x-3">

<button type="button" class="scale-100 hover:scale-105 transition-transform duration-300 drop-shadow-sm hover:drop-shadow-lg inline-flex items-center px-6 py-3 shadow-sm text-base font-medium rounded-md text-emerald-800 hover:text-emerald-900 border border-emerald-500 dark:border-emerald-600 dark:text-emerald-100 bg-gradient-to-b from-emerald-400 via-emerald-300 to-emerald-400 hover:from-emerald-300 hover:via-emerald-200 hover:to-emerald-300 dark:hover:bg-emerald-600 hover:border-emerald-600 dark:hover:border-emerald-200 dark:from-emerald-700 dark:via-emerald-600 dark:to-emerald-700 dark:hover:from-emerald-800 dark:hover:via-emerald-700 dark:hover:to-emerald-800 focus:outline-none focus:ring focus:ring-emerald-500">
  Please Click Me
  <!-- Heroicon name: solid/mail -->
  <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
  </svg>
</button>

</div>

<!-- this is a right-justified darkmode slider in the main navbar
<div class="hidden md:flex items-center space-x-3 text-zinc-400 dark:text-yellow-100">
<div class="flex flex-col absolute right-4">
<label for="toggle" id="checkbox" class="flex items-center justify-center cursor-pointer">
<div class="relative">
<input type="checkbox" id="toggle" class="sr-only darkmode switch" title="darkmode switch" onclick="save();">
<div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
<div id="dot" class="dot absolute left-1 top-1 w-6 h-6 rounded-full bg-white flex justify-center mx-auto">
    <div class="flex-col justify-center my-auto">
    <svg id="moon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="moon-stars" class="svg-inline--fa fa-moon-stars h-4 w-5 hidden" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M332.2 426.4c-93.1 17.7-178.5-53.7-178.5-147.7 0-54.2 29-104 76.1-130.8 7.3-4.1 5.4-15.1-2.8-16.7C108.7 109.4 0 200 0 320c0 106 85.8 192 191.8 192 59.2 0 113.2-26.9 149-71.1 5.3-6.5-.5-16.1-8.6-14.5zM304 96l16-32 32-16-32-16-16-32-16 32-32 16 32 16 16 32zm154.7 85.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208l-53.3-26.7z"></path></svg>
      <svg xmlns="http://www.w3.org/2000/svg" id="sun" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
      </svg>
    </div>
</div>
</div>
</label>
</div>
</div> -->
<!-- Mobile menu button -->
<div class="md:hidden flex items-center dark:text-white" onclick="this.classList.toggle('active')">
<!--<button class="outline-none mobile-menu-button">
<svg class=" w-6 h-6 hover:"
x-show="!showMenu"
fill="none"
stroke-linecap="round"
stroke-linejoin="round"
stroke-width="2"
viewBox="0 0 24 24"
stroke="currentColor"
>
<path d="M4 6h16M4 12h16M4 18h16"></path>
</svg>
</button>-->
<button class="outline-none mobile-menu-button">
  <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 200 200" class=" hover:" shape-rendering="crispEdges">
        <g stroke-width="6.5" stroke-linecap="round">
          <path
            d="M72 82.286h28.75"
            fill="currentColor"
            fill-rule="evenodd"
            stroke="currentColor"
            shape-rendering="crispEdges"
          />
          <path
            d="M100.75 103.714l72.482-.143c.043 39.398-32.284 71.434-72.16 71.434-39.878 0-72.204-32.036-72.204-71.554"
            fill="none"
            stroke="currentColor"
            shape-rendering="crispEdges"
          />
          <path
            d="M72 125.143h28.75"
            fill="currentColor"
            fill-rule="evenodd"
            stroke="currentColor"
            shape-rendering="crispEdges"
          />
          <path
            d="M100.75 103.714l-71.908-.143c.026-39.638 32.352-71.674 72.23-71.674 39.876 0 72.203 32.036 72.203 71.554"
            fill="none"
            stroke="currentColor"
            shape-rendering="crispEdges"
          />
          <path
            d="M100.75 82.286h28.75"
            fill="currentColor"
            fill-rule="evenodd"
            stroke="currentColor"
          />
          <path
            d="M100.75 125.143h28.75"
            fill="currentColor"
            fill-rule="evenodd"
            stroke="currentColor"
          />
        </g>
      </svg>
      </button>
</div>
</div>
</div>
<!-- mobile menu -->
<div class="hidden md:hidden absolute w-full z-50 mobile-menu bg-gray-200 dark:bg-gray-700">
<ol id="navigation-ol-mobile" class="navigation-ol-mobile list-none">
<li class="navigation-links-mobile"><a href="/" class="flex justify-center mx-auto px-2 py-4 hover:bg-gray-500 transition duration-250 motion-reduce:transition-none text-xl">Home</a></li>
<li class="navigation-links-mobile"><a href="/live-dev-page/" class="navigation-links flex justify-center mx-auto px-2 py-4 hover:bg-gray-500 transition motion-reduce:transition-none duration-250 text-xl">Live Dev Page</a></li>
<li class="navigation-links-mobile"><a href="/default-page-template/" class="navigation-links flex justify-center mx-auto px-2 py-4 hover:bg-gray-500 transition motion-reduce:transition-none duration-250 text-xl">Default Page Template</a></li>
<li class="navigation-links-mobile"><a href="/test2/" class="navigation-links flex justify-center mx-auto px-2 py-4 hover:bg-gray-500 transition motion-reduce:transition-none duration-250 text-xl">Test</a></li>
</ol>
<div class="flex justify-center mx-auto text-zinc-400 dark:text-yellow-100 border-t border-gray-300 dark:border-gray-500">
<label for="toggle2" id="checkbox2" class="flex items-center justify-start cursor-pointer px-2 py-4"><span class="mr-5 text-gray-600 dark:text-gray-100">Switch theme</span> 
<div class="relative">
<input type="checkbox" id="toggle2" class="sr-only darkmode switch" title="darkmode switch" onclick="save2();">
<div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
<div id="dot2" class="dot absolute left-1 top-1 w-6 h-6 rounded-full bg-white flex justify-center mx-auto">
<div class="flex-col justify-center my-auto">
<svg id="moon2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="moon-stars" class="svg-inline--fa fa-moon-stars h-4 w-5 hidden" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M332.2 426.4c-93.1 17.7-178.5-53.7-178.5-147.7 0-54.2 29-104 76.1-130.8 7.3-4.1 5.4-15.1-2.8-16.7C108.7 109.4 0 200 0 320c0 106 85.8 192 191.8 192 59.2 0 113.2-26.9 149-71.1 5.3-6.5-.5-16.1-8.6-14.5zM304 96l16-32 32-16-32-16-16-32-16 32-32 16 32 16 16 32zm154.7 85.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208l-53.3-26.7z"></path></svg>
      <svg xmlns="http://www.w3.org/2000/svg" id="sun2" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
      </svg>
</div>
</div>
</div>
</label>
</div>
</div>
</header>
</div>
</nav>