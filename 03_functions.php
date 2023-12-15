<?php
function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $key => $value) {
        $sum += $value;
    }
    return  $sum;

}

$rohanDas = [98,23,45,67,89,86];
$sumMarks = processMarks($rohanDas);

echo "total marks scored by rohan out of 600 is $sumMarks";

?>
