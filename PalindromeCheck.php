<?php

function isPalindrome($word){
    $wordArr = str_split($word);
    $reversedWord = "";
    for($i = strlen($word)-1 ; $i>=0;$i--)
        $reversedWord .= $wordArr[$i];
    
    
    return $reversedWord == $word;
}
$word="madam";

$result = isPalindrome($word);

echo $result ? json_encode(["Result: "=>"$word is Palindrome"]) : json_encode(["Result: "=>"$word is not Palindrome"]) ;
