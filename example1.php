<?php

include __DIR__ . '/includes/autoload.php';

use Framework\Example1;

$start = microtime(true);
Example1::runSubClass100000();
printf("Example 1 executed in %0.6f\n", microtime(true) - $start);
