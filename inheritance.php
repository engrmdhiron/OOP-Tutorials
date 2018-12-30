<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>Inheritance</u>
   <br>
   <a href="index.php"><button>Back to Index</button></a></h1>
    
</body>
</html>

<?php
class UserData {

    public $name;
    public $email;

    public function display($name, $email){
        echo "User name is ".$this->name=$name.' <br/> User email is '.$this->email=$email;
    }
}


class Admin extends UserData{
    public $age;

    public function display($name, $email){
        echo "Name is ".$this->name=$name.'<br/> Email is '.$this->email=$email.'<br/> Age is '.$this->age.' Years';
    }

}



$name = "Md.Hiron Mollik";
$email = "prog.mdhiron@gmail.com";
$age = 27;
// $userData = new UserData;
// $userData->display($name, $email);

$adminData = new Admin;
$adminData->display($name, $email);



?>