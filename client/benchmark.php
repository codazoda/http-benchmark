<?php

/**
 * This is a simple benchmarking app that makes a bunch of requests to a URL and
 * calculates how many requests per second it averages.
 */

$passes = 100;

// The URL to benchmark
//$url = 'http://www.example.com/benchmark';

echo "Making $passes requests to $url.\n";

// Record the current time
$startTime = time();

// Make a bunch requests
for($i=1; $i<=$passes; $i++) {
    $oneResult = file_get_contents($url);
    echo '.';
}

$endTime = time();

$runTime = $endTime - $startTime;
$perSecond = round($passes / $runTime, 2);

echo "\nCompleted $passes passes to $url in $runTime seconds ($perSecond per second).\n";