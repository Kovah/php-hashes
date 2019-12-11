<?php

/**
 * PHP Hashes
 * This script runs an example string trough all available PHP
 * hashes and outputs metrics about those hashes.
 *
 * Based on work by <jrz.agarcia.gmail.com>.
 *
 * @author Kevin Woblick <mail@kovah.de>
 */

echo 'PHP Hash Overview' . PHP_EOL;
echo '=================' . PHP_EOL;
echo 'Available algorithms: ' . count(hash_algos()) . PHP_EOL;

// Generate and output the test string
echo PHP_EOL;
$testString = bin2hex(random_bytes(512));
echo 'Using the following string: ' . $testString . PHP_EOL;
echo 'with a length of ' . strlen($testString) . ' characters.' . PHP_EOL;

$results = [];
$start = microtime(1);

foreach (hash_algos() as $algo) {
    // First, test the hash generation with the result being a regular string
    $time = microtime(1);
    $hash = hash($algo, $testString);
    $time = (microtime(1) - $time) * 1000;

    $results[] = [
        'algo' => $algo,
        'method' => 'hex',
        'hash' => $hash,
        'length' => strlen($hash),
        'time' => $time,
    ];

    // Second, test the hash generation with the resulting string being raw binary data
    $time = microtime(1);
    $hash = hash($algo, $testString);
    $time = (microtime(1) - $time) * 1000;

    $results[] = [
        'algo' => $algo,
        'method' => 'raw',
        'hash' => $hash,
        'length' => strlen($hash),
        'time' => $time,
    ];
}

// Sort results alphabetical by algorithm name
$resultsAlphabetical = $results;
$columns = array_column($resultsAlphabetical, 'algo');
array_multisort($columns, SORT_ASC, $resultsAlphabetical);

// Sort results by time
uasort($results, function ($a, $b) {
    return $a['time'] <=> $b['time'];
});

// Output the results
function outputResults($results)
{
    echo sprintf(
            '%-12s %-12s %-7s %9s  %s',
            'Time',
            'Algorithm',
            'Method',
            'Length',
            'Hash'
        ) . PHP_EOL;

    foreach ($results as $result) {
        $time = sprintf('%.6f ms', $result['time']);
        echo sprintf(
                '%-12s %-12s %-7s %9s  %s',
                $time,
                $result['algo'],
                $result['method'],
                $result['length'] . ' bytes',
                $result['hash']
            ) . PHP_EOL;
    }
}

echo PHP_EOL;
echo 'Results, sorted alphabetically' . PHP_EOL;
outputResults($resultsAlphabetical);

echo PHP_EOL;
echo 'Results, sorted by execution time' . PHP_EOL;
outputResults($results);

echo PHP_EOL;
echo sprintf('Took %.5f ms in total', (microtime(1) - $start) * 1000);
