<?php

require_once __DIR__ . '/vendor/autoload.php';

use vitalis\HelloComposer\Index;

$greeting = new Index();

echo $greeting->greet("Hello Composer");
