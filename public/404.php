<?php
$docRoot = getenv("DOCUMENT_ROOT");
require $docRoot . "/script-header.php";
?> <title>Privacy Policy | <?php echo $name; ?></title>
</head>
<?php require $docRoot . "/header.php"; ?>

<main id="main" role="main" class="flex flex-auto flex-col w-full justify-center">
  <div
    class="flex-col w-full h-full max-w-screen-sm md:max-w-5xl mx-auto px-3 py-16 prose lg:prose-xl dark:prose-invert">
    <h1 class="text-4xl font-extrabold text-yellow-600 sm:text-5xl">Error 404</h1>
    <div class="sm:ml-6">
      <div class="sm:border-l sm:border-gray-200 sm:pl-6">
        <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl mb-4">Page not found</h1>
        <p class="mt-1 text-base text-gray-500">Please check the URL in the address bar and try again.</p>
      </div>
      <div class="mt-10 flex space-x-3 sm:border-l sm:border-transparent sm:pl-6">
        <a href="/"
          class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
          Go back home
        </a>
        <a href="/contact/"
          class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-yellow-700 bg-yellow-100 hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
          Contact support
        </a>
      </div>
</main>

<?php require $docRoot . "/footer.php"; ?>