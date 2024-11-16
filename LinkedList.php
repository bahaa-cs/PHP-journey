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
        if ($this->fisrtNode === NULL){
            $this->firsNode = $newNode;
        }
        else{
            $currentNode = $this->firstNode;
            while($currentNode->next !== NULL)
                $currentNode = $currentNode->next;
            $currentNode->next = $newNode;
        }
        
    }
}

$list = new LinkedList();
$list->insert("testing");
$list->insert("debugging");
$list->insert("project");

echo $list->traverse();
