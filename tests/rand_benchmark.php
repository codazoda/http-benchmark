<?php

/**
 * This script benchmarks the rand function in PHP directly on the server.
 *
 * My MacBook Pro does 1.28m rand calls per second.
 * The KSL Stage server does 1.1m per second.
 * My $5 Digital Ocean VPS does 4.1m per second.
 */

$numberOfPasses = 50000000;

$startTime = time();

for($i=1; $i<=$numberOfPasses; $i++) {
    rand(100000, 999999);
}

$endTime = time();

$runTime = $endTime - $startTime;
$perSecond = $numberOfPasses / $runTime;

echo "Ran rand $numberOfPasses times in $runTime seconds ($perSecond per second).\n";