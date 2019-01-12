<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>__get()</u>
   <br>
   <a href="magic_methods.php"><button>Back to Index</button></a></h1>
   <h3>__get($property)</h3>
   <p>__get($property), This is the first of three slightly unusual magic functions, and allows you to specify what to do if an unknown class variable is read from within your script. </p>
   <pre>
       <code>
           class Students {
                public $name;
                
                public function studentInfo(){
                    echo "I am a student ";
                }

                public function __get($pm){
                    echo "$pm does not exist!";
                }
            }

            $obj = new Students;
            $obj->studentInfo();
            //Defined property is :
            // $obj->name = "Hasan";

            $obj->Hasan; (Undefined property)
       </code>
   </pre>
    
</body>
</html>

<?php
    class Students {
        public $name;
        
        public function studentInfo(){
            echo "I am a student <br>";
        }

        public function __get($pm){
            echo "$pm does not exist!";
        }
    }

    $obj = new Students;
    $obj->studentInfo();
    $obj->Hasan;

?>