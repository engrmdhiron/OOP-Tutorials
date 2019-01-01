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
   <p>3) Protected: Protected access modifier can work in your class and sub class, but bind your limit, protected property adn method will be use only inside your class and inside your sub-class, but can't use your outside class and outside sub-class, althogh, you can't use that's class's objects.</p>

    
</body>
</html>

<?php
class UserData {

    public $name;
    private $email;
    private $address='Mirpur,Dhaka-1216';
    protected $mobile='01671565656';


    public function display($name, $email){
        echo "User name is ".$this->name=$name.' <br/> User email is '.$this->email=$email.'<br/>';
        // echo $this->address.' Inside the claass';
        echo $this->mobile.' protected inside the class';
    }

    private function info(){
        echo 'This is private function';
    }
}


class Admin extends UserData{
    public $age;

    public function display($name, $email){
        echo "Name is ".$this->name=$name.'<br/> Email is '.$this->email=$email.'<br/> Age is '.$this->age.' Years';
        // echo $this->address.' Inside the suub-claass';
        echo '<br/>';
        echo $this->mobile.' protected inside the sub-class';
    }

    public function userInfo(){
        echo "Email address is ".$this->email;
        
    }

    //Private method
    public function info(){
        echo 'Private method inside of sub-class';
    }

}



$name = "Md.Hiron Mollik";
$email = "prog.mdhiron@gmail.com";
$age = 27;
echo "<br>";
$userData = new UserData;
$userData->display($name, $email);

$adminData = new Admin;
$adminData->age=$age;
echo "<br>";
$adminData->display($name, $email);
echo "<br>";
// echo $userData->address.' outside the class';
// echo 'Private access modifier : '.$userData->email;
// echo 'Protected access modifier : '.$userData->address;
// echo $userData->mobile.' protected outside the class'

// $userData->info();
$adminData->info(); 



?>