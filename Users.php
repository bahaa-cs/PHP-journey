<?php

class User{
    public $name;
    public $password;
    public $email;

    public function __construct($name, $password, $email){
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
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
    public static function validate_email($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            return False;
        else
            return True;
    }
    public function copy_with($name = NULL, $email =  NuLL, $password=NULL) {
        $userCopy = new User(
            $name ?? $this->name,
            $email ?? $this->email,
            $password ?? $this->password
        );
        return $userCopy;
    }

}
$name=$_POST["name"] ?? null;
$password = $_POST["password"] ?? null;
$email = $_POST["email"] ?? null;
if(is_null($name) || is_null($password) || is_null($email) ){
    echo json_encode([
        "Message: "=>"Null values for <name>, <password>, or <email> "
    ]);
}
else{
    $user1 = new User($name, $password, $email);
    $newEmail= "bahabaha@gmail.com";
    $user2 = $user1->copy_with($newEmail);

    $data = [
        "name" => $user1->name,
        "password" => $user1->password,
        "email" => $user1->email,
        "Strong Password" => User::check_password($password),
        "Email Validation" => User::validate_email($email)
    ];
    
    echo json_encode($data);
}