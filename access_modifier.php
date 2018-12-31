<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>Access Modifier</u>
   <br>
   <a href="index.php"><button>Back to Index</button></a></h1>

   <H4>Type of access modifier</H4>
   <p>1) Public: Public access modifier can work in global platform, not in your limit. public property and method will be use any place or location. </p>
   <p>2) Private: Private access modifier can work in your class, bind in your limit, private property and method will be use only inside your class, can't call outside your class, even can't make your class's objects. </p>
   <p>3) Protected</p>

    
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
$adminData->age=$age;
$adminData->display($name, $email);



?>