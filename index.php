<?php
require 'vendor/autoload.php';

use App\Beaker;

$beaker = new Beaker(100,2);

echo $beaker->experiment($beaker::ADD_SALT);
