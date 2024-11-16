<?php

function isPalindrome($word){

    return False;
}

$result = isPalindrome("hello");

echo $result ? json_encode(["Result: "=>"Palindrome"]) : json_encode(["Result: "=>"Not Palindrome"]) ;
