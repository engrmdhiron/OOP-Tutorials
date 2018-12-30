<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>Static Properties and Methods</u>
   <br>
   <a href="index.php"><button>Back to Index</button></a></h1>
    
</body>
</html>

<?php
class Person{
    public static $name = "Md.Hiron Mollik";
    static $email = "engr.mdhiron@gmail.com";
    static $address = "House#10, Road#2, Dhanmondi, Dhaka";

    public static function display(){
        echo 'Person name is '.self::$name."<br/>";
        echo  'Person emal is '.self::$email;
    }




}

Person::display();


?>