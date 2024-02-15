<?php

require_once __DIR__ . '/vendor/autoload.php';

use BytelabDemo\HelloComposer\Index;

$greeting = new Index();

echo $greeting->greet("Hello Composer");
