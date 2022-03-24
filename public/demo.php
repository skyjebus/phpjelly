<?php
$docRoot = getenv("DOCUMENT_ROOT");
require $docRoot . "/script-header.php";
?>
<title>Demo - <?php echo $name; ?></title>
</head>
<?php require $docRoot . "/header.php"; ?>

<main id="main" role="main" class="flex flex-auto flex-col w-full justify-center">
  <!--- demo content -->
  <div class="flex-col w-full h-full max-w-screen-sm md:max-w-5xl mx-auto px-3 py-16 prose lg:prose-xl dark:prose-invert">
    <h1>Prose Demo</h1>
    <h2>H2 Item</h2>
    <h3>H3 Item</h3>
    <h4>H4 Item</h4>
    <h5>H5 Item</h5>
    <h6>H6 Item</h6>
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
    <hr>
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
  </div>
</main>

<?php require $docRoot . "/footer.php"; ?>
