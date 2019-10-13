<?php
require __DIR__ . '/vendor/autoload.php';

use Codedungeon\PHPCliColors\Color;

use function \calculateHomeWorkSum as calculateHomeWorkSum;
use function Nfq\Akademija\NotTyped\calculateHomeWorkSum as notTypedCalculateHomeWorkSum;
use function Nfq\Akademija\Soft\calculateHomeWorkSum as softCalculateHomeWorkSum;
use function Nfq\Akademija\Strict\calculateHomeWorkSum as strictCalculateHomeWorkSum;

echo Color::LIGHT_BLUE . 'calculateHomeWorkSum:' . calculateHomeWorkSum(3, 2.2, '1') . PHP_EOL;
echo Color::BLUE . 'Nfq\Akademija\NotTyped\calculateHomeWorkSum:' . notTypedCalculateHomeWorkSum(3, 2.2, '1') . PHP_EOL;
echo Color::BG_BLUE . 'Nfq\Akademija\Soft\calculateHomeWorkSum:' . softCalculateHomeWorkSum(3, 2.2, '1') . PHP_EOL;
echo Color::BG_CYAN . 'Nfq\Akademija\Strict\calculateHomeWorkSum:' . strictCalculateHomeWorkSum(3, 2.2, '1') . PHP_EOL;
