<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>Construct</u>
   <br>
   <a href="index.php"><button>Back to Index</button></a></h1>
    
</body>
</html>

<?php
//Constructor is a magic method
class Person {

    public $name;
    public $age;

    public function __construct($name, $age){
        echo "Construct is the magic function!<br/>";
        $this->name = $name;
        $this->age  = $age;
    }


    public function personDetails(){
        echo "Person name is {$this->name} and perosn age is {$this->age}";
    }
}


$info = new Person('Md.Hiron', 27);
$info->personDetails();

?>