<body
  class="flex flex-col h-screen mx-auto text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-900 transition motion-reduce:transition-none">
  <header class="header-wrapper" id="">
    <!-- secondary (top) navbar goes here -->
    <div class="bg-neutral-400 dark:bg-neutral-900 hidden md:block">
      <nav class="flex max-w-5xl mx-auto px-4 py-1 justify-evenly w-full" role="navigation" aria-label="Secondary Menu">
        <!-- left group -->
        <div class="flex justify-evenly my-auto text-sm">
          <label for="phone" aria-label="Call our phone number">
            <a href="tel:<?php echo $phone; ?>">
              <div class="mr-auto flex justify-evenly">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 my-auto" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h320c35.35 0 64-28.65 64-64V96C448 60.65 419.3 32 384 32zM351.6 321.5l-11.62 50.39c-1.633 7.125-7.9 12.11-15.24 12.11c-126.1 0-228.7-102.6-228.7-228.8c0-7.328 4.984-13.59 12.11-15.22l50.38-11.63c7.344-1.703 14.88 2.109 17.93 9.062l23.27 54.28c2.719 6.391 .8828 13.83-4.492 18.22L168.3 232c16.99 34.61 45.14 62.75 79.77 79.75l22.02-26.91c4.344-5.391 11.85-7.25 18.24-4.484l54.24 23.25C349.5 306.6 353.3 314.2 351.6 321.5z"/></svg>
                &nbsp;<?php echo $phone; ?>
              </div>
            </a>
          </label>
          <label for="hours" aria-label="Hours of operation" tabindex="0">
            <div class="flex">&nbsp &nbsp;
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 my-auto" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"/></svg>  
            &nbsp;<?php echo $hours; ?>
            </div>
          </label>
        </div>
        <!-- right group -->
        <label for="theme-toggle" id="checkbox"
          class="flex items-center justify-center cursor-pointer text-zinc-400 dark:text-yellow-100 ml-auto">
          <span class="text-xs text-slate-800 dark:text-slate-200">Theme&nbsp;</span>
          <div class="relative">
            <input type="checkbox" id="theme-toggle" class="sr-only darkmode switch" title="darkmode switch"
              onclick="return saveToggleState();">
            <div class="block bg-gray-600 w-12 h-7 rounded-full"></div>
            <div id="dot" class="dot absolute left-1 top-1 w-5 h-5 rounded-full bg-white flex justify-center mx-auto">
              <div class="flex-col justify-center my-auto">
                <svg id="moon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="moon-stars"
                  class="svg-inline--fa fa-moon-stars h-3 w-4 hidden" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M332.2 426.4c-93.1 17.7-178.5-53.7-178.5-147.7 0-54.2 29-104 76.1-130.8 7.3-4.1 5.4-15.1-2.8-16.7C108.7 109.4 0 200 0 320c0 106 85.8 192 191.8 192 59.2 0 113.2-26.9 149-71.1 5.3-6.5-.5-16.1-8.6-14.5zM304 96l16-32 32-16-32-16-16-32-16 32-32 16 32 16 16 32zm154.7 85.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208l-53.3-26.7z">
                  </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" id="sun" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
              </div>
            </div>
          </div>
        </label>
      </nav>
    </div>
    <!-- primary nav -->
    <nav id=""
      class="bg-gray-200 dark:bg-gray-900 transition motion-reduce:transition-none shadow-md shadow-transparent relative"
      aria-label="navigation" aria-label="Main menu">
      <div class="max-w-5xl mx-auto px-4">
        <div class="flex justify-between">
          <div class="flex space-x-7">
            <div>
              <!-- Website Logo -->
              <a href="/" class="flex items-center py-0 px-2">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="hooli"
                  class="svg-inline--fa fa-hooli h-20 w-auto" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 640 512">
                  <path fill="currentColor"
                    d="M144.5 352l38.3.8c-13.2-4.6-26-10.2-38.3-16.8zm57.7-5.3v5.3l-19.4.8c36.5 12.5 69.9 14.2 94.7 7.2-19.9.2-45.8-2.6-75.3-13.3zm408.9-115.2c15.9 0 28.9-12.9 28.9-28.9s-12.9-24.5-28.9-24.5c-15.9 0-28.9 8.6-28.9 24.5s12.9 28.9 28.9 28.9zm-29 120.5H640V241.5h-57.9zm-73.7 0h57.9V156.7L508.4 184zm-31-119.4c-18.2-18.2-50.4-17.1-50.4-17.1s-32.3-1.1-50.4 17.1c-18.2 18.2-16.8 33.9-16.8 52.6s-1.4 34.3 16.8 52.5 50.4 17.1 50.4 17.1 32.3 1.1 50.4-17.1c18.2-18.2 16.8-33.8 16.8-52.5-.1-18.8 1.3-34.5-16.8-52.6zm-39.8 71.9c0 3.6-1.8 12.5-10.7 12.5s-10.7-8.9-10.7-12.5v-40.4c0-8.7 7.3-10.9 10.7-10.9s10.7 2.1 10.7 10.9zm-106.2-71.9c-18.2-18.2-50.4-17.1-50.4-17.1s-32.2-1.1-50.4 17.1c-1.9 1.9-3.7 3.9-5.3 6-38.2-29.6-72.5-46.5-102.1-61.1v-20.7l-22.5 10.6c-54.4-22.1-89-18.2-97.3.1 0 0-24.9 32.8 61.8 110.8V352h57.9v-28.6c-6.5-4.2-13-8.7-19.4-13.6-14.8-11.2-27.4-21.6-38.4-31.4v-31c13.1 14.7 30.5 31.4 53.4 50.3l4.5 3.6v-29.8c0-6.9 1.7-18.2 10.8-18.2s10.6 6.9 10.6 15V317c18 12.2 37.3 22.1 57.7 29.6v-93.9c0-18.7-13.4-37.4-40.6-37.4-15.8-.1-30.5 8.2-38.5 21.9v-54.3c41.9 20.9 83.9 46.5 99.9 58.3-10.2 14.6-9.3 28.1-9.3 43.7 0 18.7-1.4 34.3 16.8 52.5s50.4 17.1 50.4 17.1 32.3 1.1 50.4-17.1c18.2-18.2 16.7-33.8 16.7-52.5 0-18.5 1.5-34.2-16.7-52.3zM65.2 184v63.3c-48.7-54.5-38.9-76-35.2-79.1 13.5-11.4 37.5-8 64.4 2.1zm226.5 120.5c0 3.6-1.8 12.5-10.7 12.5s-10.7-8.9-10.7-12.5v-40.4c0-8.7 7.3-10.9 10.7-10.9s10.7 2.1 10.7 10.9z">
                  </path>
                </svg>
                <span class="sr-only"><?php echo $name; ?> Logo</span>
              </a>
            </div>
            <!-- Primary Navbar items -->
            <div class="hidden md:flex items-center space-x-1">
              <ul role="menu" id="nav-ul" class="nav-ul flex flex-wrap md:inline-flex list-none">
                <li role="menuitem" class="nav-active-link mx-3"><a href="/" class="font-semibold">Home</a></li>
                <li role="menuitem" class="nav-active-link mx-3"><a href="/demo/" class="font-semibold">
                    Prose Demo</a></li>
                <li role="menuitem" class="nav-active-link mx-3"><a href="/contact/" class="font-semibold">
                    Contact</a></li>
              </ul>
            </div>
          </div>
          <!-- Secondary Navbar items -->
          <div class="hidden md:flex items-center space-x-3">
            <button type="button"
              class="scale-100 hover:scale-105 transition-transform duration-300 drop-shadow-sm hover:drop-shadow-lg inline-flex items-center px-6 py-3 shadow-sm text-base font-medium rounded-md text-emerald-800 hover:text-emerald-900 border border-emerald-500 dark:border-emerald-600 dark:text-emerald-100 bg-gradient-to-b from-emerald-400 via-emerald-300 to-emerald-400 hover:from-emerald-300 hover:via-emerald-200 hover:to-emerald-300 dark:hover:bg-emerald-600 hover:border-emerald-600 dark:hover:border-emerald-200 dark:from-emerald-700 dark:via-emerald-600 dark:to-emerald-700 dark:hover:from-emerald-800 dark:hover:via-emerald-700 dark:hover:to-emerald-800 focus:outline-none focus:ring focus:ring-emerald-500">
              Please Click Me
              <!-- Heroicon name: solid/mail -->
              <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
              </svg>
            </button>
          </div>
          <!-- Mobile menu button -->
          <div class="md:hidden flex items-center dark:text-white" id="menu-button-mobile">
            <button id="hamburger" onclick="menuAttributeMobile()" class=" mobile-menu-button outline-none"
              aria-expanded="false" aria-controls="menu">
              <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 200 200" class=" hover:"
                shape-rendering="crispEdges">
                <g stroke-width="6.5" stroke-linecap="round">
                  <path d="M72 82.286h28.75" fill="currentColor" fill-rule="evenodd" stroke="currentColor"
                    shape-rendering="crispEdges" />
                  <path
                    d="M100.75 103.714l72.482-.143c.043 39.398-32.284 71.434-72.16 71.434-39.878 0-72.204-32.036-72.204-71.554"
                    fill="none" stroke="currentColor" shape-rendering="crispEdges" />
                  <path d="M72 125.143h28.75" fill="currentColor" fill-rule="evenodd" stroke="currentColor"
                    shape-rendering="crispEdges" />
                  <path
                    d="M100.75 103.714l-71.908-.143c.026-39.638 32.352-71.674 72.23-71.674 39.876 0 72.203 32.036 72.203 71.554"
                    fill="none" stroke="currentColor" shape-rendering="crispEdges" />
                  <path d="M100.75 82.286h28.75" fill="currentColor" fill-rule="evenodd" stroke="currentColor" />
                  <path d="M100.75 125.143h28.75" fill="currentColor" fill-rule="evenodd" stroke="currentColor" />
                </g>
              </svg>
              <span class="sr-only">Hamburger menu</span>
            </button>
          </div>
        </div>
      </div>
      <!-- mobile menu -->
      <div class="hidden md:hidden absolute w-full z-50 bg-gray-200 dark:bg-gray-700" id="menu-wrapper-mobile">
        <ul role="menu" id="nav-ul-mobile" class="nav-ul-mobile list-none">
          <li role="menuitem" class="nav-active-link-mobile"><a href="/"
              class="flex justify-center mx-auto px-2 py-4 hover:bg-gray-500 transition duration-250 motion-reduce:transition-none text-xl">Home</a>
          </li>
          <li role="menuitem" class="nav-active-link-mobile"><a href="/demo/"
              class="nav-active-link flex justify-center mx-auto px-2 py-4 hover:bg-gray-500 transition motion-reduce:transition-none duration-250 text-xl">
              Prose Demo</a></li>
          <li role="menuitem" class="nav-active-link-mobile"><a href="/contact/"
              class="nav-active-link flex justify-center mx-auto px-2 py-4 hover:bg-gray-500 transition motion-reduce:transition-none duration-250 text-xl">
              Contact</a></li>
        </ul>
        <div
          class="flex justify-center mx-auto text-zinc-400 dark:text-yellow-100 border-t border-gray-300 dark:border-gray-500">
          <label for="theme-toggle-mobile" id="checkbox2"
            class="flex items-center justify-start cursor-pointer px-2 py-4"><span
              class="mr-5 text-gray-600 dark:text-gray-100">Switch theme</span>
            <div class="relative">
              <input type="checkbox" id="theme-toggle-mobile" class="sr-only darkmode switch" title="darkmode switch"
                onclick="return saveToggleStateMobile();">
              <div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
              <div id="dot2"
                class="dot absolute left-1 top-1 w-6 h-6 rounded-full bg-white flex justify-center mx-auto">
                <div class="flex-col justify-center my-auto">
                  <svg id="moon-mobile" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="moon-stars"
                    class="svg-inline--fa fa-moon-stars h-4 w-5 hidden" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512">
                    <path fill="currentColor"
                      d="M332.2 426.4c-93.1 17.7-178.5-53.7-178.5-147.7 0-54.2 29-104 76.1-130.8 7.3-4.1 5.4-15.1-2.8-16.7C108.7 109.4 0 200 0 320c0 106 85.8 192 191.8 192 59.2 0 113.2-26.9 149-71.1 5.3-6.5-.5-16.1-8.6-14.5zM304 96l16-32 32-16-32-16-16-32-16 32-32 16 32 16 16 32zm154.7 85.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208l-53.3-26.7z">
                    </path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" id="sun-mobile" class="h-5 w-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
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