<?php
/**
 * @format
 */

// website config
$name = "Company Name";
$address = "1313 Mockingbird Ln.";
$al2 = "#1"; // address line two
$city = "Boston";
$state = "MA";
$zip = "12345";
$phone = "555-867-5309";
$hours = "M-F 9:00am - 5:00pm";

// socail media links config
$gmb = "test1";
$fb = "test2";
$ig = "test3";
$twt = "test4";
$yelp = "test5";

// responsive image via php function
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
    'loading="eager" alt="Descriptive alt text here!">';
}

############################################################################################
############## DO NOT EDIT BELOW THIS LINE UNLESS YOU KNOW WHAT YOU'RE DOING ###############
############################################################################################

// hostname
$domain = siteURL();
function siteURL()
{
  $protocol = (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != "off") || $_SERVER["SERVER_PORT"] == 443 ? "https://" : "http://";
  $domainName = $_SERVER["HTTP_HOST"];
  return $protocol . $domainName;
}

// canonical Links
$canonicalFilename = "https://" . $_SERVER["HTTP_HOST"] . substr($_SERVER["REQUEST_URI"], 0, strrpos($_SERVER["REQUEST_URI"], ""));

// globals image path
$GLOBALS['$imgLocation'] = "../images/";
?>

<!-- script header -->
<!DOCTYPE html>

<!-- empty html class for dark mode -->
<html lang="en" class="">

<head>
  <link rel="canonical" href="<?php echo $canonicalFilename; ?>">
  <script>
  if (localStorage.theme === 'system' || (!('theme' in localStorage) && window.matchMedia(
        '(prefers-color-scheme: dark)')
      .matches)) {
    html.classList.add("dark") // inline to prevent FOUC
  }
  </script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- load javascript first -->
  <script src="/javascript/main.js" defer></script>
  <script src="/javascript/cookieconsent.js" defer></script>

  <!-- inline css for second -->
  <style>
  <?php require $docRoot . "/css/styles.css"; ?>
  </style>

  <!-- fav icon -->
  <?php require $docRoot . "/favicon/favicons-meta-tags.html"; ?>
