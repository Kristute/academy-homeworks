<?php
declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';

use function Nfq\Akademija\Soft\calculateHomeWorkSum as softCalculateHomeWorkSum;

try {
    softCalculateHomeWorkSum('1', 2.2, 5666464);
} catch (Throwable $exception) {
    echo 'Exception: ' . $exception->getMessage();
}
