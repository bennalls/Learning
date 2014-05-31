<?php

/*
 * Counting sort - Sort an array of positive integars in O(n).
 * Uses 2 additional Arrays - a count array and a Sorted Array.
 * Sorted array maintains order for 2 idential values
 */

$UnsortedArray = array();
$ArrayLength = 3000;


// Create Random Unsorted Array and echo
for ($i = 0; $i < $ArrayLength; $i++) {
    $UnsortedArray[] = rand(0, 10000);
}
echoArray($UnsortedArray);

// Sort and echo array
$SortedArray = CountingSort($UnsortedArray);
echoArray($SortedArray);

// Counting Sort
function CountingSort($UnsortedArray) {


    $StartTime = microtime(true);

    $StartArray = $UnsortedArray;
    $CountArray = array_fill(0, (max($StartArray) + 1), 0);
    $SortedArray = array_fill(0, sizeof($StartArray), "");

    // Count the number of occurrances of each value and add to the count array 
    // at index value same as value
    foreach ($StartArray as $value) {
        $CountArray[$value] = $CountArray[$value] + 1;
    }

    // Adjust count array to show number of values equal to or 
    // less than each position index value
    foreach ($CountArray as $key => $value) {
        if ($key == 0) {
            $CountArray[$key] = $value;
        } else {
            $CountArray[$key] = $CountArray[$key - 1] + $value;
        }
    }

    //Fill final array from unsorted array in reverse and using count array as 
    //an index as it shows number of values below each value being sorted
    //therefore knows where to position in new array
    foreach (array_reverse($StartArray) as $value) {
        $SortedArray[$CountArray[$value] - 1] = $value;
        $CountArray[$value] --;
    }



    $EndTime = microtime(TRUE);
    $runTime = $EndTime - $StartTime;
    echo "time to run... " . $runTime . "<br /><br />";
    return $SortedArray;
}

//Echo Array Function
function echoArray($Array) {
    foreach ($Array as $value) {
        echo $value . ", ";
    }
    echo "<br /><br />";
}
