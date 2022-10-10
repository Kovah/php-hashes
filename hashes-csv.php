<?php

/**
 * PHP Hashes
 * This script runs an example string trough all available algorithms for the
 * PHP hash() function and outputs a results.csv file.
 * The resulting csv file is delimited by semicolons and all numeric values
 * use the point as a decimal separator.
 *
 * Based on work by <jrz.agarcia@gmail.com> via the PHP.net documentation.
 *
 * @author Kevin Woblick <mail@kovah.de>
 */

echo 'PHP Hash Overview' . PHP_EOL;
echo '=================' . PHP_EOL;
echo 'Available algorithms: ' . count(hash_algos()) . PHP_EOL;

// Prepare the CSV writer and result data
$file = fopen('results.csv', 'wb+');
$csvSeparator = ';';

$algorithms = hash_algos();
sort($algorithms);

$algorithmResults = [];

// Store all available algorithms in the headers
$header = ['String Length'];
foreach ($algorithms as $algorithm) {
    $header[] = $algorithm . ' (hex)';
    $header[] = $algorithm . ' (raw)';
}

$header[] = 'Minimum';
$header[] = 'Minimum algorithm';
$header[] = 'Maximum';
$header[] = 'Maximum algorithm';

fwrite($file, implode($csvSeparator, $header) . PHP_EOL);

// Generate and output the test string
echo PHP_EOL;
echo 'Starting calculation of all hashes...' . PHP_EOL;

$start = microtime(1);

// Calculate the hash duration for strings starting at a length of 512 characters, up to a length of 33554432.
$maxLength = 2 ** 25;
for ($stringLength = 512; $stringLength <= $maxLength; $stringLength *= 2) {

    $results = [];

    $testString = base64_encode(random_bytes($stringLength / 2));
    echo 'String length: ' . strlen($testString) . PHP_EOL;

    foreach ($algorithms as $algorithm) {

        // First, test the hash generation with the result being a regular string
        $time = microtime(1);
        hash($algorithm, $testString);
        $time = (microtime(1) - $time) * 1000;

        $results[] = $time;
        $algorithmResults[$algorithm . ' hex'][(string)$stringLength] = $time;

        // Second, test the hash generation with the resulting string being raw binary data
        $time = microtime(1);
        hash($algorithm, $testString, 1);
        $time = (microtime(1) - $time) * 1000;

        $results[] = $time;
        $algorithmResults[$algorithm . ' raw'][(string)$stringLength] = $time;
    }

    // Search for the minimum and maximum values for this string length
    $min = min($results);
    $max = max($results);

    // Prepend the string length before the results
    array_unshift($results, $stringLength);

    // Append the minimum and maximum algorithm names by using the header
    $minAlgorithm = $header[array_search($min, $results)];
    $maxAlgorithm = $header[array_search($max, $results)];

    array_push($results, $min, $minAlgorithm, $max, $maxAlgorithm);

    fwrite($file, implode($csvSeparator, $results) . PHP_EOL);
}

// Calculate the results for each single algorithm here
fwrite($file, 'Average per algorithm');

foreach ($algorithmResults as $algorithm => $data) {
    $average = array_sum($data) / count($data);
    fwrite($file, $csvSeparator . $average);
}

fclose($file);

echo PHP_EOL;
echo sprintf('Finished calculation. Took %.5f s in total', (microtime(1) - $start));
