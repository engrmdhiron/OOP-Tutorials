<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>Polymorphism</u>
   <br>
   <a href="index.php"><button>Back to Index</button></a></h1>
</body>
</html>

<?php

class UserData {

    public $name;
    public $email;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }

    public function displayData(){
        echo 'My name is: '.$this->name.' , and email is: '.$this->email;
    }
}

class Admin extends UserData {
    public $mobile;

    public function __construct($name, $email, $mobile){
        $this->name = $name;
        $this->email = $email;
        $this->mobile = $mobile;
    }

    //function overriding is called polymorphism
    public function displayData(){
        echo 'My name is: '.$this->name.' , and email is: '.$this->email.' and my mobile number is: '.$this->mobile;
    }
}

$name = 'Md.Hiron Mollik';
$email = 'engr.mdhiron@gmail.com';
$userData = new UserData($name, $email);
$userData->displayData();
echo '<br>';
$mobile = '01671909000';
$adminData = new Admin($name, $email, $mobile);
$adminData->displayData();

?>