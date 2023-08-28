<?php
$filename = 'ANTHEM.txt';
$file = fopen($filename, 'r');

if ($file) {
    $lineCount = 0;

    while (($line = fgets($file)) !== false) {
        $lineCount++;
    }

    fclose($file);

    echo "Number of lines in $filename: <b> $lineCount </b>";
} else {
    echo "Failed to open $filename.";
}
