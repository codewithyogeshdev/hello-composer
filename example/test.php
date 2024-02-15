<?php

require_once __DIR__ . '/vendor/autoload.php';

use Thebytelab\HelloComposer\Index;

$greeting = new Index();

echo $greeting->greet("Hello Composer");
