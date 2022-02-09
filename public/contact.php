<?php
$docRoot = getenv("DOCUMENT_ROOT");
require $docRoot . "/script-header.php";
?>
<title>Contaact | <?php echo $name; ?></title>
</head>
<?php require $docRoot . "/header.php"; ?>
<main id="main" role="main" class="flex flex-col w-full justify-center">
  <div class="flex-col w-full max-w-screen-sm md:max-w-3xl mx-auto px-3 py-16 prose lg:prose-xl dark:prose-invert">
    <div class="flex-col w-full max-w-screen-sm md:max-w-5xl mx-auto px-3 py-16 prose lg:prose-xl dark:prose-invert">
      <div>
        <form action="https://formspree.io/f/xvolkjak" method="POST">
          <div class="mb-6">
            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Full
              Name</label>
            <input type="text" name="name" placeholder="John Doe" required
              class="w-full px-3 py-2 placeholder-gray-300 dark:bg-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-300" />
          </div>
          <div class="mb-6">
            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email
              Address</label>
            <input type="email" name="email" placeholder="your@email.com" required
              class="w-full px-3 py-2 placeholder-gray-300 dark:bg-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-300" />
          </div>
          <div class="mb-6">
            <label for="phone" class="text-sm text-gray-600 dark:text-gray-400">Phone
              Number</label>
            <input type="text" name="phone" placeholder="617-1234-567" required
              class="w-full px-3 py-2 placeholder-gray-300 dark:bg-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-300" />
          </div>
          <div class="mb-6">
            <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Your
              Message</label>
            <textarea rows="5" name="message" placeholder="Your Message"
              class="w-full px-3 py-2 placeholder-gray-300 dark:bg-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-300"
              required>
            </textarea>
          </div>
          <div class="mb-6">
            <button type="submit"
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