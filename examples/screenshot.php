<?php

include '../vendor/autoload.php';

use yasinstc\phpChrome\Chrome;

$chrome=new Chrome('https://facebook.com', '/usr/bin/google-chrome');
$chrome->setOutputDirectory(__DIR__);
//not necessary to set window size
$chrome->setWindowSize($width=1366, $height=1024);
print "Image successfully generated :".$chrome->getScreenShot().PHP_EOL;
