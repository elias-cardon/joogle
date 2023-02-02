<?php
include ("./classes/DomDocumentParser.php");
function followLinks($url) {
    $parser = new DomDocumentParser($url);

    $linkList = $parser->getlinks();

    foreach ($linkList as $link) {
        $href = $link->getAttribute("href");
        echo $href . "<br>";
    }
}

$startUrl = "http://www.apple.com";
followLinks($startUrl);