<?php

function generateArray($length) {
    $unsortedArray = [];
    for ($i = 0; $i < $length; $i++) {
        $unsortedArray[] = rand(1, $length);
    }
    return $unsortedArray;
}

function split(&$arr, $startIndex, $endIndex, &$result) {
    if ($endIndex - $startIndex <= 1) {
        return;
    }

    $middleIndex = intval(($startIndex + $endIndex) / 2);

    split($result, $startIndex, $middleIndex, $arr);
    split($result, $middleIndex, $endIndex, $arr);

    merge($arr, $startIndex, $middleIndex, $endIndex, $result);
}

function merge(&$arr, $startIndex, $middleIndex, $endIndex, &$result) {
    $start = $startIndex;
    $middle = $middleIndex;
    for ($i = $startIndex; $i < $endIndex; $i++) {
        if ($start < $middleIndex && ($middle >= $endIndex || $arr[$start] <= $arr[$middle])) {
            $result[$i] = $arr[$start];
            $start++;
        } else {
            $result[$i] = $arr[$middle];
            $middle++;
        }
    }
}

$unsortedArray = generateArray(15);

$result = $unsortedArray;

split($unsortedArray, 0, count($unsortedArray), $result);

echo json_encode([
    "unsorted array" => $unsortedArray,
    "sorted array" => $result
]);

?>
