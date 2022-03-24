<?php

// website config
$name = "Company Name";
$address = "";
$al2 = ""; // address line two
$city = "";
$state = "";
$zip = "";
$phone = "888-888-8888";
$hours = "M-F 9:00am - 5:00pm";

// socail media links config
$gmb = "";
$fb = "";
$ig = "";
$twt = "";
$yelp = "";

############################################################################################
############## DO NOT EDIT BELOW THIS LINE UNLESS YOU KNOW WHAT YOU'RE DOING ###############
############################################################################################

// hostname
$domain = "phpjelly.com";

// canonical Links
$canonicalFilename =
    (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "off"
        ? "https"
        : "https") . "://$domain$_SERVER[REQUEST_URI]";

// remove double trailing slashes
if (
    $_SERVER["REQUEST_URI"] != "//" and
    preg_match('{//$}', $_SERVER["REQUEST_URI"])
) {
    http_response_code(301);
    header("Location: " . preg_replace('{//$}', "", $_SERVER["REQUEST_URI"]));
    exit();
}
?>

<!-- script header -->
<!DOCTYPE html>

<!-- empty html class for dark mode -->
<html lang="en-US" class="">

<head>
  <link rel="canonical" href="<?php echo filter_var($canonicalFilename); ?>">
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
