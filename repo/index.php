<?php

require_once __DIR__ ."/vendor/autoload.php";

$generator = \Nubs\RandomNameGenerator\All::create();
$a=0;
while ($a < 10) {
    echo $generator->getName(). "<br>";
    $a++;

}

