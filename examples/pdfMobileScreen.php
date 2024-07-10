<?php

include '../vendor/autoload.php';

use yasinstc\phpChrome\Chrome;

$chrome=new Chrome('https://facebook.com', '/usr/bin/google-chrome');
$chrome->setOutputDirectory(__DIR__);
$chrome->useMobileScreen();
//not necessary to set window size
$chrome->setWindowSize($width=768, $height=768);
print "Pdf successfully generated :".$chrome->getPdf().PHP_EOL;
