<?php
$docRoot = getenv("DOCUMENT_ROOT");
require $docRoot . "/script-header.php";
?>
<title>Home | <?php echo $name; ?></title>
</head>
<?php require $docRoot . "/header.php"; ?>

<main id="main" role="main" class="flex flex-auto flex-col w-full h-full justify-center">
  <div class="flex-col w-full h-fit items-center bg-img-1 bg-fixed bg-cover bg-center">
    <div class="backdrop-brightness-75 dark:backdrop-brightness-50 backdrop-blur-sm h-full">
      <div class="flex mx-auto max-w-5xl px-3 h-full items-center">
        <article class="flex-col py-12 md:py-32">
          <div class="flex-col">
            <h1 class="pb-4"><span class="font-extrabold text-white text-3xl md:text-4xl lg:text-5xl text-shadow-lg">
                Our product is service.</span></h1>
            <p class="text-zinc-50 pb-6 text-base md:text-lg font-semibold text-shadow-lg">
              We are convinced that new-generation time frames work effectively. State-of-the-art
              culture changes probably ensure standard disclosures. In order to assure that communication
              has a best-of-breed product line, we must be certain that a task-driven customer steps up to
              the challenge of a mobile schedule. The strategic headcount readjustment will not
              encapsulate the quality-assured deliverable, so lightwight solutions efficiently attack
              the problem of teams.</p>
          </div>
          <div class="flex"></div>
          <div class="space-x-0 md:space-x-2">
            <a href="#">
              <button type="button"
                class="my-2 md:my-0 scale-100 hover:scale-105 drop-shadow-sm hover:drop-shadow-lg transition-transform duration-300 inline-flex items-center px-3 py-2 shadow-sm text-base font-medium rounded-md text-emerald-800 hover:text-emerald-900 border border-emerald-500 dark:border-emerald-600 dark:text-emerald-100 bg-gradient-to-b from-emerald-400 via-emerald-300 to-emerald-400 hover:from-emerald-300 hover:via-emerald-200 hover:to-emerald-300 dark:hover:bg-emerald-600 hover:border-emerald-600 dark:hover:border-emerald-200 dark:from-emerald-700 dark:via-emerald-600 dark:to-emerald-700 dark:hover:from-emerald-800 dark:hover:via-emerald-700 dark:hover:to-emerald-800 focus:outline-none focus:ring focus:ring-emerald-500">
                <!-- Heroicon name: solid/mail -->
                <svg class="-ml-0.5 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                  fill="currentColor" aria-hidden="true">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>
                First Button
              </button>
            </a>
            <a href="#">
              <button type="button"
                class="my-2 md:my-0 scale-100 hover:scale-105 transition-transform duration-300 drop-shadow-sm hover:drop-shadow-lg inline-flex items-center px-3 py-2 shadow-sm text-base font-medium rounded-md text-emerald-800 hover:text-emerald-900 border border-emerald-500 dark:border-emerald-600 dark:text-emerald-100 bg-gradient-to-b from-emerald-400 via-emerald-300 to-emerald-400 hover:from-emerald-300 hover:via-emerald-200 hover:to-emerald-300 dark:hover:bg-emerald-600 hover:border-emerald-600 dark:hover:border-emerald-200 dark:from-emerald-700 dark:via-emerald-600 dark:to-emerald-700 dark:hover:from-emerald-800 dark:hover:via-emerald-700 dark:hover:to-emerald-800 focus:outline-none focus:ring focus:ring-emerald-500">
                <!-- Heroicon name: solid/mail -->
                <svg class="-ml-0.5 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                  fill="currentColor" aria-hidden="true">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>
                Second Button
              </button>
            </a>
          </div>
        </article>
      </div>
    </div>
  </div>
  <!-- whiteboard svg banner -->
  <div class="text-neutral-300 dark:text-neutral-800 flex-col bg-temple w-full py-16">
    <div class="flex max-w-5xl mx-auto px-4">
      <p class="pb-4"><span class="font-extrabold text-white text-3xl md:text-4xl lg:text-5xl text-shadow-lg">
          Whiteboard collaborative bandwidth
        </span></p>
    </div>
  </div>
  <!-- responsive image demo -->
  <div
    class="flex-col w-full h-full max-w-screen-sm md:max-w-5xl mx-auto px-3 py-16 prose lg:prose-xl dark:prose-invert">
    <?php
    function image1()
    {
      $imgName = "fv";
      $imgLocation = $GLOBALS['$imgLocation'];
      echo '<img class="w-32 h-48 object-cover object-center rounded-lg mx-auto lg:mx-0 bg-gray-200 dark:bg-gray-900 backdrop-blur-3xl transition motion-reduce:transition-none duration-250"' .
        'data-src="' .
        $imgLocation .
        $imgName .
        '-xs.jpg"' .
        'srcset="' .
        $imgLocation .
        $imgName .
        "-xs.jpg 320w," .
        $imgLocation .
        $imgName .
        "-sm.jpg 375w," .
        $imgLocation .
        $imgName .
        "-md.jpg 768w," .
        $imgLocation .
        $imgName .
        "-lg.jpg 960w," .
        $imgLocation .
        $imgName .
        "-lg.jpg 1024w," .
        $imgLocation .
        $imgName .
        "-xl.jpg 1400w," .
        $imgLocation .
        $imgName .
        '-2xl.jpg 1536w,"' .
        'sizes="50vmin, 100vmax" width="1" height="1"' .
        'loading="lazy" alt="Descriptive alt text here!">';
    }
    image1();
    ?>
  </div>
</main>

<?php require $docRoot . "/footer.php"; ?>