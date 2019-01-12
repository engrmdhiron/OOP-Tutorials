<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>Class & Method Existence</u>
   <br>
   <a href="index.php"><button>Back to Index</button></a></h1>
   <p>class_exists — Checks if the class has been defined and method_exists — Checks if the class method exists</p>
   <pre>
       <code>
            class Students {
                public function describe(){
                    echo "Students class exist!";
                }

                public function info(){
                    echo "Info method exist!";
                }
            }

            //Check class exist
            if(class_exists('Students')) {
                $obj = new Students;        
                $obj->describe();
            } else {
                echo "Students class not exist!";
            }

            //Check method exist
            if(method_exists($obj, 'info')){
                $obj->info();
            } else {
                echo "info method not exist!";
            }
       </code>
   </pre>
    
</body>
</html>

<?php
    class Students {
        public function describe(){
            echo "Students class exist!";
        }

        public function info(){
            echo "Info method exist!";
        }
    }

    //Check class exist
    if(class_exists('Students')) {
        $obj = new Students;        
        $obj->describe();
        echo "<br>";
    } else {
        echo "Students class not exist!";
    }

    //Check method exist
    if(method_exists($obj, 'info')){
        $obj->info();
    } else {
        echo "info method not exist!";
    }

?>