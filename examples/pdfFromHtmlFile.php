<?php

include '../vendor/autoload.php';

use yasinstc\phpChrome\Chrome;

$chrome=new Chrome(null, '/usr/bin/google-chrome');
$chrome->useHtmlFile(__DIR__.'/index.html');
print "Pdf successfully generated :".$chrome->getPdf().PHP_EOL;
