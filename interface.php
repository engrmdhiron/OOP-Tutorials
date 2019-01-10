<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>Interface</u>
   <br>
   <a href="index.php"><button>Back to Index</button></a></h1>
    
</body>
</html>

<?php
    interface school{
        public function mySchool();
    }

    class Teacher implements school{

        // public function __construct(){
        //     $this->mySchool();
        // }
        
        public function mySchool(){
            echo "sagor";
        }
    }

    $teacher = new Teacher;
    $teacher->mySchool();



    

    



?>