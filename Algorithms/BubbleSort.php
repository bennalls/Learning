<?php

/*
 * Bubble Sort- Complexity between n-1 for already sorted array and
 * n^2 for reverse order array
 */

$UnsortedArray = array();
$ArrayLength = 8000;


// Create Random Unsorted Array and echo
for ($i = 0; $i < $ArrayLength; $i++) {
    $UnsortedArray[] = rand(1, 10000);
}
echoArray($UnsortedArray);

// Sort and echo array
$SortedArray = BubbleSort($UnsortedArray, $ArrayLength);
echoArray($SortedArray);

// Bubble Sort and echo array
function BubbleSort($UnsortedArray, $ArrayLength) {
    $Array = $UnsortedArray;
    $StartTime = microtime(true);
    $swapped = TRUE;
    while ($swapped == TRUE) {
        $swapped = FALSE;

        for ($i = 1; $i < $ArrayLength; $i++) {
            if ($Array[$i - 1] > $Array[$i]) {
                $swap = $Array[$i - 1];
                $Array[$i - 1] = $Array[$i];
                $Array[$i] = $swap;
                $swapped = TRUE;
            }
        }
    }
    $EndTime = microtime(TRUE);
    $runTime = $EndTime - $StartTime;
    echo "time to run... " . $runTime . "<br /><br />";
    return $Array;
}

//Echo Array Function
function echoArray($Array) {
    foreach ($Array as $value) {
        echo $value . ", ";
    }
    echo "<br /><br />";
}
