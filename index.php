<?php

use classes\StringHelper;

require 'vendor/autoload.php';

echo "Введите строку: \n";
$line = trim(fgets(STDIN));
echo (new StringHelper())->deleteSpaces($line) . "\n";

