<?php

class ListNode {
    public $data = NULL;
    public $next = NULL;
    public function __construct($data =NULL){
        $this->data = $data;
    }
}

class LinkedList{
    private $firstNode = NULL;

    public function insert($data){
        $newNode = new ListNode($data);
        if ($this->firstNode === NULL){
            $this->firstNode = $newNode;
        }
        else{
            $currentNode = $this->firstNode;
            while($currentNode->next !== NULL)
                $currentNode = $currentNode->next;
            $currentNode->next = $newNode;
        }
        
    }

    public function traverse(){
        $result=[];
        $vowels = ["a","e","i","o","u"];
        $currentNode = $this->firstNode;
        while($currentNode !== NULL){
            $vowelsCount = 0;
            $value=$currentNode->data;
            foreach(str_split($value) as $letter){

                if (in_array($letter, $vowels)){
                    $vowelsCount+=1;
                }        
            }
            if($vowelsCount===2){
                $result[] = $currentNode->data;
                
            }
            $currentNode=$currentNode->next;
        }
        echo json_encode(["Result"=>$result]);

    }
}

$list = new LinkedList();
$list->insert("testing");
$list->insert("debugging");
$list->insert("project");
$list->insert("bugg");
$list->insert("idea");
$list->insert("postman");

echo $list->traverse();
