<?php

include __DIR__ . '/includes/autoload.php';

use Framework\Example2;

$start = microtime(true);
Example2::runSubClass100000();
printf("Example 2 executed in %0.6f\n", microtime(true) - $start);
