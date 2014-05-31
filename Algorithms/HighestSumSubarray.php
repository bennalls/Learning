<?php

/*
 * Find subarray with highest sum of values - Order of n.
 */

$UnsortedArray = array();
$ArrayLength = 200000;


// Create Random Unsorted Array and echo
for ($i = 0; $i < $ArrayLength; $i++) {
    $UnsortedArray[] = rand(-100, 100);
}
echoArray($UnsortedArray);

// echo array then echo highest sum subarray
$StartTime = microtime(true);
$SubArray = HighestSumSubarray($UnsortedArray);
$EndTime = microtime(TRUE);
$runTime = $EndTime - $StartTime;
echo "time to run... " . $runTime . "<br /><br />";
echoArray($SubArray);
echo "Sum of Subarray is: " . array_sum($SubArray);

// Highest Subarray
function HighestSumSubarray($Array) {
    $MaxSubArraySum = 0;
    $MaxSubArrayStart = 0;
    $MaxSubArrayEndPos = 0;
    $CurrentArrayStartPos = NULL;
    $CurrentArraySum = 0;

    foreach ($Array as $key => $value) {
        if($CurrentArrayStartPos == NULL) {
            $CurrentArrayStartPos = $key;
        }
        $CurrentArraySum = $CurrentArraySum + $value;
        
        // New subarray if previous value is a new lowest sum in entire array
        if ($CurrentArraySum <= 0) {
            $CurrentArrayStartPos = NULL;
            $CurrentArraySum = 0;
        }


        // Check Subarray sum against Max Subarray sum
        if ($CurrentArraySum > 0) {
            if ($CurrentArraySum > $MaxSubArraySum) {
                $MaxSubArraySum = $CurrentArraySum;
                $MaxSubArrayStart = $CurrentArrayStartPos;
                $MaxSubArrayEndPos = $key;
            }
        }
    }
    $SubArray = array_slice($Array, $MaxSubArrayStart, ($MaxSubArrayEndPos - $MaxSubArrayStart + 1));
    if(array_sum($SubArray) <=0) {
        $SubArray = array();
    }
    return $SubArray;
}

//Echo Array Function
function echoArray($Array) {
    foreach ($Array as $value) {
        echo $value . ", ";
    }
    echo "<br /><br />";
}
