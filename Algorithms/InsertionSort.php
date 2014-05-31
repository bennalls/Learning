<?php

/*
 * Insertion Sort- Complexity between n-1 for already sorted array and
 * n^2 for reverse order array
 */

$UnsortedArray = array();
$ArrayLength = 2500;


// Create Random Unsorted Array and echo
for ($i = 0; $i < $ArrayLength; $i++) {
    $UnsortedArray[] = rand(1, 10000);
}
echoArray($UnsortedArray);

// Sort and echo array
$SortedArray = InsertionSort($UnsortedArray, $ArrayLength);
echoArray($SortedArray);




// Insertion Sort and echo array
function InsertionSort($UnsortedArray, $ArrayLength) {
    $Array = $UnsortedArray;
    $StartTime = microtime(true);
    $key;
    for ($i = 1; $i < $ArrayLength; $i++) {
        $key = $i;
        $swap;
        while (($key > 0) && ($Array[$key] < $Array[$key - 1])) {
            $swap = $Array[$key - 1];
            $Array[$key - 1] = $Array[$key];
            $Array[$key] = $swap;
            $key--;
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
