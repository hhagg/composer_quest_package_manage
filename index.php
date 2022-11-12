<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// make the cow stick out its tongue
$bessie->setTongue('U');

// echo the object for direct output

echo $bessie->say();
