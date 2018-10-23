<?php
function __autoload($class){
    include "classes/".$class.".php";
}

$site = new site;
$site->addHeader("header.php");
$site->addFooter("footer.php");
$page = new page;
$title = "My Awesome OOP Site";
$content = <<<EOT

<div>
    <h1>Example Domain</h1>
    <p>This domain is established to be used for illustrative examples in documents. You may use this
    domain in examples without prior coordination or asking for permission.</p>
    <p><a href="http://www.iana.org/domains/example">More information...</a></p>
</div>



EOT;

$page->display($title, $content);


?>