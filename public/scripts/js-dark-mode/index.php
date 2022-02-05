<?php require_once dirname(__FILE__).'/../../functions/script-header.php'; ?>
<title>Js Dark / Light Mode | <?php echo $name ?></title>
<link rel="canonical" href="<?php echo $canonicalFilename; ?>">
</head>
<?php require_once dirname(__FILE__).'/../..//functions/navigation.php'; ?>

<main id="main" role="main" class="flex flex-auto flex-wrap w-full justify-center max-w-screen-sm md:max-w-5xl mx-auto">

<div class="flex flex-col">
<label for="toggle" id="checkbox" class="flex items-center justify-center cursor-pointer">
<div class="relative">
<input type="checkbox" id="toggle" class="sr-only">
<div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
<div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
</div>
</label>
</div>

<pre class="px-4 lg:px-6 overflow-y-hidden pt-4">
<code>
/* Install javascript into your 'tailwind.css' file

// Dark and light mode toggle
const toggle = document.querySelector(&quot;#toggle&quot;);
const html = document.querySelector(&quot;html&quot;);

const toggleDarkMode = function () {
  toggle.checked
  ? html.classList.add(&quot;dark&quot;)
  : html.classList.remove(&quot;dark&quot;);
}

// Calling the function directly
toggleDarkMode();
toggle.addEventListener(&quot;click&quot;,toggleDarkMode);

/* Install css into your tailwind.css file

input:checked ~ .dot {
    transform: translateX(100%);
    background-color: #48bb78;
}

*/

/* Install html into your desired '*.php' file

&lt;div class=&quot;flex flex-col&quot;&gt;
&lt;label for=&quot;toggle&quot; id=&quot;checkbox&quot; class=&quot;flex items-center justify-center cursor-pointer pr-4 lg:pr-0&quot;&gt;
&lt;div class=&quot;relative&quot;&gt;
&lt;input type=&quot;checkbox&quot; id=&quot;toggle&quot; class=&quot;sr-only&quot;&gt;
&lt;div class=&quot;block bg-gray-600 w-14 h-8 rounded-full&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/label&gt;
&lt;/div&gt;

*/

/* Install empty class tag into your '/functions/script-header.php' file

&lt;html lang=&quot;en&quot; class=&quot;&quot;&gt;&lt;/html&gt;

*/

/* Install darkMode class setting into your './tailwind.config.js' file and restart 'npm run watch'

module.exports = {
    content: ['./src/*.php', './src/**/*.php', './src/**/**/*.php', './src/**/**/**/*.php', './src/**/**/**/**/*.php', './src/javascript/*.js'],
    darkMode: 'class',
    theme: {
      extend: {},
    },
    variants: {},
    plugins: [
      require('@tailwindcss/forms'),
      require('@tailwindcss/aspect-ratio'),
      require('@tailwindcss/typography'),
    ],
  }

  */


?&#x3E;
</code>
</pre>

</main>

<?php require_once dirname(__FILE__).'/../..//functions/footer.php'; ?>