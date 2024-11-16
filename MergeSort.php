<?php

function generateArray($length){
    for($i = 0; $i<$length;$i++){
        $unsortedArray[] = rand(1,$length);
    }
    return $unsortedArray;
}

$unsortedArray = generateArray(15);

echo json_encode(["unsorted array: "=>$unsortedArray]);

