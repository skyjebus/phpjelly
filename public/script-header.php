<?php
// website config
$name = 'PHP Jelly';
$address = '1313 Mockingbird Ln.';
$al2 = '#1'; // address line two
$city = 'Boston';
$state = 'MA';
$zip = '12345';
$phone = '555-867-5309';
$hours = 'M-F 9:00am - 5:00pm';

// socail media links config
$gmb = 'test1';
$fb = 'test2';
$ig = 'test3';
$twt = 'test4';
$yelp = 'test5';

############################################################################################
############## DO NOT EDIT BELOW THIS LINE UNLESS YOU KNOW WHAT YOU'RE DOING ###############
############################################################################################

// hostname
$domain = siteURL();
function siteURL() {
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || 
$_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'];
return $protocol.$domainName;
}

// canonical Links
$canonicalFilename = 'https://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], ""));

// globals image path
$GLOBALS['$imgLocation'] = '../images/';
?>

<!-- script header -->
<!DOCTYPE html>

<!-- empty html class for dark mode -->
<html lang="en" class="">
<head>
<script>
if (localStorage.theme === 'system' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
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
<style><?php require $docRoot.'/css/styles.css'; ?></style>

<!-- fav icon -->
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $$docRoot; ?>/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $$docRoot; ?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="64x64" href="<?php echo $$docRoot; ?>/favicon-64x64.png">
<link rel="icon" type="image/png" sizes="128x128" href="<?php echo $$docRoot; ?>/favicon-128x128.png">
<link rel="icon" type="image/png" sizes="256x256" href="<?php echo $$docRoot; ?>/favicon-256x256.png">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $docRoot; ?>/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $$docRoot; ?>/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $$docRoot; ?>/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $$docRoot; ?>/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="256x256" href="<?php echo $$docRoot; ?>/apple-touch-icon-256x256.png">