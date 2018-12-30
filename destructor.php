<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>Destructor</u>
   <br>
   <a href="index.php"><button>Back to Index</button></a></h1>
    
</body>
</html>

<?php
//Constructor is a magic method
class Person {

    public $name;
    public $age;
    public $id;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age  = $age;
    }

    public function setId($id){
        $this->id = $id;
    }


    public function __destruct(){
        echo "This is destruct function<br/>";
        if(!empty($this->id)){
            echo "Saving person";
        }
    }
}


$info = new Person('Md.Hiron', 27);
$info->setId(12);

?>