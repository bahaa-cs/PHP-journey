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
        $vowels = ["a","e","i","o","u"];
        $currentNode = $this->firstNode;
        while($currentNode !== NULL){
            
            $value=$currentNode->data;
            foreach(str_split($value) as $letter){

                if (in_array($letter, $vowels)){

                    echo $currentNode->data . " ";
                    
                }
            }
            $currentNode=$currentNode->next;
        }

    }
}

$list = new LinkedList();
$list->insert("testing");
$list->insert("debugging");
$list->insert("project");

echo $list->traverse();
