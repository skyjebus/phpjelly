<?php
$docRoot = getenv("DOCUMENT_ROOT");
require $docRoot . "/script-header.php";
?> <title>404 Error - <?php echo $name; ?></title>
</head>
<?php require $docRoot . "/header.php"; ?>

<main id="main" role="main" class="flex flex-auto flex-col w-full justify-center items-center">
  <div class="flex-col w-full mx-auto px-3 py-16 prose lg:prose-xl dark:prose-invert text-center">
    <h1 class="font-extrabold text-green-600">Error 404</h1>
    <h2 class="font-extrabold tracking-tight">Page not found</h2>
    <p class="text-base">Please check the URL in the address bar and try again.</p>
    <a href="/" class="inline-flex items-center mt-6 px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-ghreen-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
      Go back home
    </a>
  </div>
</main>

<?php require $docRoot . "/footer.php"; ?>
