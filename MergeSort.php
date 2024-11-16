<?php

function generateArray($length){
    for($i = 0; $i<$length;$i++){
        $unsortedArray[] = rand(1,$length);
    }
    return $unsortedArray;
}

$unsortedArray = generateArray(15);


function split($arr,$startIndex,$endIndex,$result){
    if ($indexEnd - $indexStart <=1)
    return

    $middleIndex = intval(($startIndex - $endIndex)/2)

    split($result,$startIndex,$middleIndex,$arr)
    split($result,$middleIndex,$endIndex,$arr)

    merge($arr, $startIndex, $middleIndex, $endIndex,$result)
}




echo json_encode(["unsorted array: "=>$unsortedArray]);

