<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>Preventing from extending and overriding</u>
   <br>
   <a href="index.php"><button>Back to Index</button></a></h1>

   <h2>How to work final keyword: final keyword will be stop extends class and overrite function</h2>
    
</body>
</html>

<?php

class UserData {
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function userInfo() {
        echo 'My name is '.$this->name.' and age is '.$this->age.' Years';
    }
}

class Admin extends UserData {

    public final function userInfo() {
        echo 'My name is '.$this->name.' and age is '.$this->age.' Years';
    }
    
}

$name  = 'Md.Hiron Mollik (Sagor)';
$age = 27;
$info = new UserData($name, $age);
$info->userInfo();




?>