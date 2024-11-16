<?php

class User{
    public $name;
    public $password;

    public function __construct($name, $password){
        $this->name = $name;
        $this->password = $password;
    }
    public static function check_password($password){
        if(
            strlen($password) >= 12 &&
            preg_match('/[A-Z]/', $password) &&
            preg_match('/[a-z]/', $password) &&
            preg_match('/[\W_]/', $password)
        )
        return True;
        else
        return False;
    }
}
$name=$_POST["name"] ?? null;
$password = $_POST["password"] ?? null;
if(is_null($name) || is_null($password)){
    echo json_encode([
        "Strong Password: "=>check_password($password)
    ]);
}
else{
    echo json_encode([
        "Strong Password: "=>User::check_password($password)
    ]);
    $user1 = new User($name, $password);
    
    echo json_encode([
        "name: "=>$user1->name,
        "password: "=>$user1->password
    ]);
}