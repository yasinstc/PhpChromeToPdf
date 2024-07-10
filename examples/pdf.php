<?php

include '../vendor/autoload.php';

use yasinstc\phpChrome\Chrome;

$chrome=new Chrome('https://youtube.com', '/usr/bin/google-chrome');
$chrome->setOutputDirectory(__DIR__);

//not necessary to set window size
//$chrome->setWindowSize($width=1477,$height=768);
print "Pdf successfully generated :".$chrome->getPdf().PHP_EOL;
