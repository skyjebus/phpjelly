<?php
$docRoot = getenv("DOCUMENT_ROOT");
require $docRoot . "/script-header.php";
?>
<title>Contact | <?php echo $name; ?></title>
</head>
<?php require $docRoot . "/header.php"; ?>

<main id="main" role="main" class="flex flex-auto flex-col w-full justify-center">
  <div
    class="flex-col w-full h-full max-w-screen-sm md:max-w-3xl mx-auto px-3 py-16 prose lg:prose-xl dark:prose-invert">
    <div class="flex-col w-full max-w-screen-sm md:max-w-5xl mx-auto px-3 py-16 prose lg:prose-xl dark:prose-invert">
      <div role=”form” aria-label="Contact form">
        <form action="https://formspree.io/f/xvolkjak" method="POST">
          <div class="mb-6">
            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Full
              Name</label>
            <input type="text" name="name" placeholder="John Doe" required aria-required="true"
              aria-placeholder="John Doe" aria-label="Name" class="w-full px-3 py-2 placeholder-gray-300 dark:bg-gray-400 border border-gray-300 rounded-md
              focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-300" />
          </div>
          <div class="mb-6">
            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email
              Address</label>
            <input type="email" name="email" placeholder="your@email.com" required aria-required="true"
              aria-placeholder="your@email.com" aria-label="Email"
              class="w-full px-3 py-2 placeholder-gray-300 dark:bg-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-300" />
          </div>
          <div class="mb-6">
            <label for="phone" class="text-sm text-gray-600 dark:text-gray-400">Phone
              Number</label>
            <input type="text" name="phone" placeholder="617-1234-567" required aria-required="true"
              aria-placeholder="phone" aria-label="Phone number"
              class="w-full px-3 py-2 placeholder-gray-300 dark:bg-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-300" />
          </div>
          <div class="mb-6">
            <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Your
              message</label>
            <textarea role="textbox" rows=" 5" name="message" placeholder="Your Message"
              class="w-full px-3 py-2 placeholder-gray-300 dark:bg-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-300"
              aria-required="false" aria-placeholder="Your message" aria-label="Your message">
            </textarea>
          </div>
          <div class="mb-6">
            <button type="submit" role="button"
              class="w-full px-2 py-4 text-white bg-gray-500 rounded-md focus:bg-gray-600 focus:outline-none">Send
              Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</main>
<?php require $docRoot . "/footer.php"; ?>
