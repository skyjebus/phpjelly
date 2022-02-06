<?php
$docRoot = getenv("DOCUMENT_ROOT");
require $docRoot."/functions/script-header.php"; ?>
<title>Home | <?php echo $name ?></title>
<link rel="canonical" href="<?php echo $canonicalFilename; ?>">
<style>

</style>
<script>

</script>
</head>
<?php require $docRoot."/functions/navigation.php"; ?>
<main id="main" role="main" class="flex flex-col w-full justify-center">
<!--<pre class="overflow-y-hidden">
<code>// Copy &amp; paste php / html ifrastructure template

// Copy &amp; paste navigation /    margin: 10px 0;header template

// Copy &amp; paste footer template

</pre>
</code>-->

<div class="flex-col w-full h-fit items-center
bg-img-1 bg-fixed bg-cover bg-center">
<div class="backdrop-brightness-75 dark:backdrop-brightness-50 backdrop-blur-sm h-full">
<div class="flex mx-auto max-w-5xl px-3 h-full items-center">

<div class="flex-col py-12 md:py-32">
  <div class="flex-col">
<h1 class="pb-4"><span class="font-extrabold text-white text-3xl md:text-4xl lg:text-5xl text-shadow-lg">
Our product is service.
</span></h1>
<p class="text-zinc-100 pb-6 text-base md:text-lg font-semibold text-shadow-lg">Target rich environment we need to future-proof this granularity, or we need to button up our approach and it's about managing expectations. Can we parallel path productize idea shower. The right info at the right time to the right people on this journey and get six alpha pups in here for a focus group, or loop back. Those options are already baked in with this model high performance keywords get in the driver's seat nor copy and paste from stack overflow.</p>
</div>
<div class="flex"></div>
<div class="space-x-0 md:space-x-2">
<a href="#">
<button type="button" class="my-2 md:my-0 scale-100 hover:scale-105 drop-shadow-sm hover:drop-shadow-lg transition-transform duration-300 inline-flex items-center px-3 py-2 shadow-sm text-base font-medium rounded-md text-emerald-800 hover:text-emerald-900 border border-emerald-500 dark:border-emerald-600 dark:text-emerald-100 bg-gradient-to-b from-emerald-400 via-emerald-300 to-emerald-400 hover:from-emerald-300 hover:via-emerald-200 hover:to-emerald-300 dark:hover:bg-emerald-600 hover:border-emerald-600 dark:hover:border-emerald-200 dark:from-emerald-700 dark:via-emerald-600 dark:to-emerald-700 dark:hover:from-emerald-800 dark:hover:via-emerald-700 dark:hover:to-emerald-800 focus:outline-none focus:ring focus:ring-emerald-500">
  <!-- Heroicon name: solid/mail -->
  <svg class="-ml-0.5 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
  </svg>
  First Button
</button>
</a>
<a href="#">
<button type="button" class="my-2 md:my-0 scale-100 hover:scale-105 transition-transform duration-300 drop-shadow-sm hover:drop-shadow-lg inline-flex items-center px-3 py-2 shadow-sm text-base font-medium rounded-md text-emerald-800 hover:text-emerald-900 border border-emerald-500 dark:border-emerald-600 dark:text-emerald-100 bg-gradient-to-b from-emerald-400 via-emerald-300 to-emerald-400 hover:from-emerald-300 hover:via-emerald-200 hover:to-emerald-300 dark:hover:bg-emerald-600 hover:border-emerald-600 dark:hover:border-emerald-200 dark:from-emerald-700 dark:via-emerald-600 dark:to-emerald-700 dark:hover:from-emerald-800 dark:hover:via-emerald-700 dark:hover:to-emerald-800 focus:outline-none focus:ring focus:ring-emerald-500">
  <!-- Heroicon name: solid/mail -->
  <svg class="-ml-0.5 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
  </svg>
  Second Button
</button>
</a>
</div>
</div>

</div>
</div>
</div>

<div class="flex-col w-full max-w-screen-sm md:max-w-5xl mx-auto px-3 py-16 prose lg:prose-xl">
<div class="inline-flex">
<?php function image1() {
    $imgName = 'fv'; $imgLocation = $GLOBALS['$imgLocation'];
    echo '<img class="w-32 h-48 object-cover object-center rounded-lg
    bg-gray-200 dark:bg-gray-900 backdrop-blur-3xl
    transition motion-reduce:transition-none duration-250"' . 'data-src="$imgLocation' . $imgName . '-320.jpg"' . 
    'srcset="' . $imgLocation . $imgName . '-320.jpg 320w,' . $imgLocation . $imgName . '-375.jpg 375w,' . $imgLocation . $imgName . '768.jpg 750w,' .
    $imgLocation . $imgName . '-480.jpg 480w,' . $imgLocation . $imgName . '-1024.jpg 960w,' .
    $imgLocation . $imgName . '-768.jpg 768w,' . $imgLocation . $imgName . '-1400.jpg 1536w,' . $imgLocation . $imgName . '-1024.jpg 1024w,' .
    $imgLocation . $imgName . '-4000.jpg 2048w,' . $imgLocation . $imgName . '-1400.jpg 1400w,' . $imgLocation . $imgName . '-1400.jpg 2800w,' .
    $imgLocation . $imgName . '-4000.jpg 2000w,' . $imgLocation . $imgName . '-4000.jpg 4000w"' . 'sizes="50vmin, 100vmax" width="1" height="1"' . 'loading="eager" alt="Descriptive alt text here!">';
}
image1(); ?>
<?php function image2() {
    $imgName = 'fv'; $imgLocation = $GLOBALS['$imgLocation'];
    echo '<img class="w-32 h-48 object-cover object-center rounded-lg
    bg-gray-200 dark:bg-gray-900 backdrop-blur-3xl
    transition motion-reduce:transition-none duration-250"' . 'data-src="$imgLocation' . $imgName . '-320.jpg"' . 
    'srcset="' . $imgLocation . $imgName . '-320.jpg 320w,' . $imgLocation . $imgName . '-375.jpg 375w,' . $imgLocation . $imgName . '768.jpg 750w,' .
    $imgLocation . $imgName . '-480.jpg 480w,' . $imgLocation . $imgName . '-1024.jpg 960w,' .
    $imgLocation . $imgName . '-768.jpg 768w,' . $imgLocation . $imgName . '-1400.jpg 1536w,' . $imgLocation . $imgName . '-1024.jpg 1024w,' .
    $imgLocation . $imgName . '-4000.jpg 2048w,' . $imgLocation . $imgName . '-1400.jpg 1400w,' . $imgLocation . $imgName . '-1400.jpg 2800w,' .
    $imgLocation . $imgName . '-4000.jpg 2000w,' . $imgLocation . $imgName . '-4000.jpg 4000w"' . 'sizes="50vmin, 100vmax" width="1" height="1"' . 'loading="eager" alt="Descriptive alt text here!">';
}
image2(); ?>
</div>
<!--<img class="w-32 h-48 object-cover object-center rounded-lg
bg-gray-200 dark:bg-gray-900 backdrop-blur-3xl
transition motion-reduce:transition-none duration-250"
data-src="../images/fv-320.jpg" srcset="../images/fv-320.jpg 320w,
../images/fv-375.jpg 375w,
../images/fv-375-2x.jpg 750w,
../images/fv-480.jpg 480w,
../images/fv-480-2x.jpg 960w,
../images/fv-768.jpg 768w,
../images/fv-768-2x.jpg 1536w,
../images/fv-1024.jpg 1024w,
../images/fv-1024-2x.jpgskew-y-12 2048w,
../images/fv-1400.jpg 1400w,
../images/fv-1400-2x.jpg 2800w,
../images/fv-2000.jpg 2000w,
../images/fv-2000-2x.jpg 4000w" sizes="50vmin, 100vmax" width="1" height="1" loading="eager" alt="Descriptive alt text here!">-->

<div class="prose lg:prose-xl">
<div class="font-extrabold">
  <span class="bg-clip-text text-transparent bg-gradient-to-r from-gray-500 to-slate-400">
    Hello world
  </span>
</div>

<div class="">
<h2><span class="box-decoration-clone bg-gradient-to-r from-slate-500 to-gray-400 text-white dark:text-gray-900 px-2">
  Hello<br>
  World
</span></h2>
</div>

<div class="h-20 bg-gradient-to-r from-slate-500 via-gray-500 to-slate-600"></div>

</div>

<div class="prose lg:prose-xl">
<div class="font-extrabold">
  <span class="bg-clip-text text-transparent bg-gradient-to-r from-gray-500 to-slate-400">
    Hello world
  </span>
</div>

<div class="">
<h2><span class="box-decoration-clone bg-gradient-to-r from-slate-500 to-gray-400 text-white dark:text-gray-900 px-2">
  Hello<br>
  World
</span></h2>
</div>

<div class="h-20 bg-gradient-to-r from-slate-500 via-gray-500 to-slate-600"></div>

</div>

</div>

</main>
<? require $docRoot."/functions/footer.php"; ?>