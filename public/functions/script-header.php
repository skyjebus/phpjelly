<?php
// set security headers
#header('X-Content-Type-Options: nosniff');
#header("X-Frame-Options: SAMEORIGIN");
#header("strict-transport-security: max-age=600");
#header("X-XSS-Protection: 1; mode=block");

// document root
$docRoot = getenv("DOCUMENT_ROOT");

// canonical Links
$canonicalFilename = 'https://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], ""));

// get host variables
function siteURL() {
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || 
$_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'];
return $protocol.$domainName;
}

// global images locations
$GLOBALS['$imgLocation'] = '../images/';
$GLOBALS['$imgLocation2'] = '../images/';

$domain = siteURL();
$name = 'Tailwind';
$address = '285 Hancock St';
// address line two:
$al2 = '#1430';
$city = 'Boston';
$state = 'MA';
$zip = '02171';
$phone = '916-934-0452';
$hours = 'M-F 9:00am - 5:00pm';
$gmb = 'test1';
// socail media:
$fb = 'test2';
$ig = 'test3';
$twt = 'test4';
$yelp = 'test5';

?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
<script>
if (localStorage.theme === 'system' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  html.classList.add("dark")
}
</script>
<script src="/javascript/main.js" defer></script>
<script src="/javascript/cookieconsent.js" defer></script>
<link rel="preconnect" href="www.googletagmanagers.com">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style><?php require dirname(__FILE__).'/../css/styles.css'; ?></style>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $keycdn_url . '/images'; ?>/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $keycdn_url . '/images'; ?>/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $keycdn_url . '/images'; ?>/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $keycdn_url . '/images'; ?>/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="256x256" href="<?php echo $keycdn_url . '/images'; ?>/apple-touch-icon-256x256.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $keycdn_url . '/images'; ?>/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $keycdn_url . '/images'; ?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="64x64" href="<?php echo $keycdn_url . '/images'; ?>/favicon-64x64.png">
<link rel="icon" type="image/png" sizes="128x128" href="<?php echo $keycdn_url . '/images'; ?>/favicon-128x128.png">
<link rel="icon" type="image/png" sizes="256x256" href="<?php echo $keycdn_url . '/images'; ?>/favicon-256x256.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">