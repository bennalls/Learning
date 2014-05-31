<?php

/*
 * Quick Sort- 
 */

$UnsortedArray = array();
$ArrayLength = 200000;


// Create Random Unsorted Array and echo
for ($i = 0; $i < $ArrayLength; $i++) {
    $UnsortedArray[] = rand(1, 10000);
}
echoArray($UnsortedArray);

// Sort and echo array
$StartTime = microtime(true);
$SortedArray = QuickSort($UnsortedArray);
$EndTime = microtime(TRUE);
$runTime = $EndTime - $StartTime;
echo "time to run... " . $runTime . "<br /><br />";
echoArray($SortedArray);



// Quick Sort and echo array
function QuickSort($UnsortedArray) {
    $Array = $UnsortedArray;
    $ArrayLength = sizeof($Array);
    if ($ArrayLength > 1) {
        $Pivot = rand(0, ($ArrayLength - 1));
        $PivotArray = array($Array[$Pivot]);
        $LowerArray = array();
        $UpperArray = array();
        foreach ($Array as $key => $Value) {
            if ($key != $Pivot) {
                //Add value to upper array if higher than pivot otherwise add to lower
                if ($Value > $Array[$Pivot]) { //Add to Upper Array
                    $UpperArray[] = $Value;
                } else {
                    $LowerArray[] = $Value;
                }
            }
        }
        $SortedArray = array_merge(QuickSort($LowerArray), $PivotArray, QuickSort($UpperArray));
    } else {
        $SortedArray = $UnsortedArray;
    }
    return $SortedArray;
  
}

//Echo Array Function
function echoArray($Array) {
    foreach ($Array as $value) {
        echo $value . ", ";
    }
    echo "<br /><br />";
}
