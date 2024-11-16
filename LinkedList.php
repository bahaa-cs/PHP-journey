<?php

class ListNode {
    public $data = NULL;
    public $node = NULL;
    public function __construct($data =NULL){
        $this->data = $data;
    }
}

$list = new LinkedList();
$list->insert("testing");
$list->insert("debugging");
$list->insert("project");


