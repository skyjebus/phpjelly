<?php
$docRoot = getenv("DOCUMENT_ROOT");
require $docRoot . "/script-header.php";
?>
<title>Thank you - <?php echo $name; ?></title>
</head>
<?php require $docRoot . "/header.php"; ?>

<main id="main" role="main" class="flex flex-auto w-full justify-center">
  <div
    class="flex-col w-full h-full max-w-screen-sm md:max-w-5xl mx-auto px-3 py-16 prose lg:prose-xl dark:prose-invert text-center">
    <h1>Terms of Service</h1>
    <h2>We will be in touch within 2 business days to schedule your free estimate. Talk to you soon.</h2>
  </div>
</main>

<?php require $docRoot . "/footer.php"; ?>