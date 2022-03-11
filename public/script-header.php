<?php

// website config
$name = "Company Name";
$address = "";
$al2 = ""; // address line two
$city = "";
$state = "";
$zip = "";
$phone = "";
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
$domain = siteURL();
function siteURL()
{
    $protocol =
        (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != "off") ||
        $_SERVER["SERVER_PORT"] == 443
            ? "https://"
            : "http://";
    $domainName = $_SERVER["HTTP_HOST"];
    return $protocol . $domainName;
}

// canonical Links
$canonicalFilename =
    (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "off"
        ? "http"
        : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// globals image path
$GLOBALS['$imgLocation'] = "/images/";
?>

<!-- script header -->
<!DOCTYPE html>

<!-- empty html class for dark mode -->
<html lang="en" class="">

<head>
  <link rel="canonical" href="<?php echo filter_var(
      $canonicalFilename,
      FILTER_SANITIZE_URL
  ); ?>">
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
  <?php require $docRoot . "/css/styles.css";
  ?>
  </style>

  <!-- fav icon -->
  <?php require $docRoot . "/favicon/favicons-meta-tags.html"; ?>