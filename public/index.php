<?php
$docRoot = getenv("DOCUMENT_ROOT");
require $docRoot . "/script-header.php";
?>
<title>Home | <?php echo $name; ?></title>
</head>
<?php require $docRoot . "/header.php"; ?>
<main id="main" role="main" class="flex flex-col w-full justify-center">
  <div class="flex-col w-full h-fit items-center bg-img-1 bg-fixed bg-cover bg-center">
    <div class="backdrop-brightness-75 dark:backdrop-brightness-50 backdrop-blur-sm h-full">
      <div class="flex mx-auto max-w-5xl px-3 h-full items-center">
        <div class="flex-col py-12 md:py-32">
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
        </div>
      </div>
    </div>
  </div>

  <div class="flex-col w-full max-w-screen-sm md:max-w-5xl mx-auto px-3 py-16 prose lg:prose-xl dark:prose-invert">
    <h1>H1 Item</h1>
    <h2>H2 Item</h2>
    <h3>H3 Item</h3>
    <h4>H4 Item</h4>
    <h5>H5 Item</h5>
    <h6>H6 Item</h6>
  </div>
  <div class="text-neutral-300 dark:text-neutral-800 flex-col bg-temple w-full py-16">
    <div class="flex max-w-5xl mx-auto px-4">
      <p class="pb-4"><span class="font-extrabold text-white text-3xl md:text-4xl lg:text-5xl text-shadow-lg">
          Whiteboard collaborative bandwidth
        </span></p>
    </div>
  </div>
  <div class="flex-col w-full max-w-screen-sm md:max-w-5xl mx-auto px-3 py-16 prose lg:prose-xl dark:prose-invert">
    <blockquote>
      There is <del>nothing</del> <ins>no code</ins> either good or bad, but
      <del>thinking</del> <ins>running
        it</ins> makes it so.
    </blockquote>
    <figure>
      <blockquote cite="https://www.huxley.net/bnw/four.html">
        <p>Words can be like X-rays, if you use them properly—they’ll go through anything.
          You read and you’re
          pierced.</p>
      </blockquote>
      <figcaption>—Aldous Huxley, <cite>Brave New World</cite></figcaption>
    </figure>
    <del>
      <p>“I apologize for the delay.”</p>
    </del>
    <ins cite="../howtobeawizard.html" datetime="2018-05">
      <p>“A wizard is never late …”</p>
    </ins>
    <code>Code Item</code>
    <p><cite>Cite Item</cite></p>
    <p><mark>Mark Item</mark></p>
    <p><q>Q Item</q></p>
    <p><samp>Samp Item</samp></p>
    <p><sub>Sub Item</sub></p>
    <details>
      <summary>Details</summary>
      Something small enough to escape casual notice.
    </details>
    <wbr>
    <details>
      <summary>I have keys but no doors. I have space but no room. You can enter but can’t
        leave. What am I?
      </summary>
      A keyboard.
    </details>
    <wbr>
    <address>
      <a href="mailto:jim@rock.com">jim@rock.com</a><br>
      <a href="tel:+13115552368">(311) 555-2368</a>
    </address>
    <hr>
    <?php image1(); ?>

    <hr>

    <div class="max-w-xl p-5 my-10 bg-white dark:bg-gray-800 rounded-md shadow-sm">
      <div>
        <form action="" method="POST">
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
</main>
<?php require $docRoot . "/footer.php"; ?>
