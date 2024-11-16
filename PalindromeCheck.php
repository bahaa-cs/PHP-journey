<?php

function isPalindrome($word){
    $wordArr = str_split($word);
    $reversedWord = "";
    for($i = strlen($word)-1 ; $i>=0;$i--)
        $reversedWord .= $wordArr[$i];
    
    
    return $reversedWord == $word;
}
$word=$_POST['word'] ?? null;

if($word){

    $result = isPalindrome($word);
    
    echo $result ? json_encode(["Result: "=>"$word is Palindrome"]) : json_encode(["Result: "=>"$word is not Palindrome"]) ;
}
else{
    echo json_encode([
        "message"=>"Mising <word> input"
    ]);
}

