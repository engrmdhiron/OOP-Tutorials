<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>set</u>
   <br>
   <a href="index.php"><button>Back to Index</button></a></h1>
   <h3>__set</h3>
   <p>__set($property, $value), The __set() magic function complements __get(), in that it is called whenever an undefined class variable is set in your scripts. </p>
   <pre>
       <code>
           class Students {
                public function studentInfo(){
                    echo "I am a student ";
                }

                public function __set($pm, $value){
                    echo "We set $pm=>$value";
                }
            }

            $obj = new Students;
            $obj->studentInfo();
            // name= undifined property and 'Md.Hiron Mollik' is undefiend property value
            $obj->name = "Md.Hiron Mollik";
       </code>
   </pre>
    
</body>
</html>

<?php
    class Students {
        public function studentInfo(){
            echo "I am a student <br>";
        }

        public function __set($pm, $value){
            echo "We set $pm=>$value";
        }
    }

    $obj = new Students;
    $obj->studentInfo();
    $obj->name = "Md.Hiron Mollik";

?>