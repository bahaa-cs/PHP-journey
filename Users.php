<?php

class User{
    public $name;
    public $password;

    public function __construct($name, $password){
        $this->name = $name;
        $this->password = $password;
    }
}
$name=$_POST["name"] ?? null;
$password = $_POST["password"] ?? null;
if(is_null($name) || is_null($password)){
    echo json_encode([
        "message"=>"missing name or password"
    ]);
}
else{

    $user1 = new User($name, $password);
    
    echo json_encode([
        "name: "=>$user1->name,
        "password: "=>$user1->password
    ]);
}