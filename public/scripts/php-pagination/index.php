<?php require_once dirname(__FILE__).'/../../functions/script-header.php'; ?>
<title>Php Pagination / Breadcrumbs | <?php echo $name ?></title>
<link rel="canonical" href="<?php echo $canonicalFilename; ?>">
</head>
<?php require_once dirname(__FILE__).'/../../functions/navigation.php'; ?>
<main id="main" role="main" class="flex flex-auto flex-wrap w-full justify-center">
<div class="max-w-screen-sm md:max-w-5xl mx-auto">

<?php
function breadcrumbs2($home = 'Home') {
global $page_title; //global varable that takes it's value from the page that breadcrubs will appear on. Can be deleted if you wish, but if you delete it, delete also the title tage inside the <li> tag inside the foreach loop.
$breadcrumb  = '<div class="breadcrumb"><div class="flex w-full justify-center text-gray-800 dark:text-gray-200 text-sm md:text-md lg:text-lg px-4"><ol class="flex flex-wrap md:inline-flex list-none">';
$root_domain = 'https://' . $_SERVER['HTTP_HOST'].'/';
$breadcrumbs2 = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
$breadcrumb .= '<li class="mx-3 underline"><a href="' . $root_domain . '" title="Home Page">' . $home . '</a></li>';
foreach ($breadcrumbs2 as $crumb) {
$link = ucwords(str_replace(array(".php","-","_"), array(""," "," "), $crumb));
$root_domain .=  $crumb . '/';
$breadcrumb .= '<li class="mx-3 underline"><a href="'. $root_domain .'" title="'.$page_title.'">' . $link . '</a></li>';
}
$breadcrumb .= '</ol>';
$breadcrumb .= '</div>';
$breadcrumb .= '</div>';

return $breadcrumb;
}
echo breadcrumbs2();

?>

<pre class="px-4 lg:px-6 overflow-y-hidden">
<code>
&#x3C;?php

function breadcrumbs($home = &#x27;Home&#x27;) {
global $page_title; //global varable that takes it&#x27;s value from the page that breadcrubs will appear on. Can be deleted if you wish, but if you delete it, delete also the title tage inside the &#x3C;li&#x3E; tag inside the foreach loop.
$breadcrumb  = &#x27;&#x3C;div class=&#x22;breadcrumb&#x22;&#x3E;&#x3C;div  class=&#x22;flex w-full justify-center text-gray-800 dark:text-gray-200 text-sm md:text-md lg:text-lg px-4&#x22;&#x3E;&#x3C;ol class=&#x22;flex flex-wrap md:inline-flex list-none&#x22;&#x3E;&#x27;;
$root_domain = &#x27;https://&#x27; . $_SERVER[&#x27;HTTP_HOST&#x27;].&#x27;/&#x27;;
$breadcrumbs = array_filter(explode(&#x27;/&#x27;, parse_url($_SERVER[&#x27;REQUEST_URI&#x27;], PHP_URL_PATH)));
$breadcrumb .= &#x27;&#x3C;li class=&#x22;mx-3 underline&#x22;&#x3E;&#x3C;a href=&#x22;&#x27; . $root_domain . &#x27;&#x22; title=&#x22;Home Page&#x22;&#x3E;&#x27; . $home . &#x27;&#x3C;/a&#x3E;&#x3C;/li&#x3E;&#x27;;
foreach ($breadcrumbs as $crumb) {
$link = ucwords(str_replace(array(&#x22;.php&#x22;,&#x22;-&#x22;,&#x22;_&#x22;), array(&#x22;&#x22;,&#x22; &#x22;,&#x22; &#x22;), $crumb));
$root_domain .=  $crumb . &#x27;/&#x27;;
$breadcrumb .= &#x27;&#x3C;li class=&#x22;mx-3 underline&#x22;&#x3E;&#x3C;a href=&#x22;&#x27;. $root_domain .&#x27;&#x22; title=&#x22;&#x27;.$page_title.&#x27;&#x22;&#x3E;&#x27; . $link . &#x27;&#x3C;/a&#x3E;&#x3C;/li&#x3E;&#x27;;
}
$breadcrumb .= &#x27;&#x3C;/ol&#x3E;&#x27;;
$breadcrumb .= &#x27;&#x3C;/div&#x3E;&#x27;;
$breadcrumb .= &#x27;&#x3C;/div&#x3E;&#x27;;


return $breadcrumb;
}
echo breadcrumbs();

?&#x3E;

</code>
</pre>
</div>
</main>
<?php require_once dirname(__FILE__).'/../../functions/footer.php'; ?>