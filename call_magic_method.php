<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>__call()</u>
   <br>
   <a href="magic_methods.php"><button>Back to Index</button></a></h1>
   <h3>__call($method, $arg_array)</h3>
   <p>The call() magic function is to class functions what __get() is to class variables - if you call meow() on an object of class dog, PHP will fail to find the function and check whether you have defined a __call() function. If so, your __call() is used, with the name of the function you tried to call and the parameters you passed being passed in as parameters one and two respectively. </p>
   <pre>
       <code>
           class Students {
                public function studentInfo(){
                    echo "I am a student";
                }

                public function __call($pm, $value){
                    echo "There is no ".$pm.' method and Arguments : '.implode(',', $value);
                }
            }

            $obj = new Students;
            $obj->studentInfo();
            $obj->noExistMethod('1','2','3');
       </code>
   </pre>
    
</body>
</html>

<?php
    class Students {
        public function studentInfo(){
            echo "I am a student <br>";
        }

        public function __call($pm, $value){
            echo "There is no ".$pm.' method and Arguments : '.implode(',', $value);
        }
    }

    $obj = new Students;
    $obj->studentInfo();
    $obj->noExistMethod('1','2','3');

?>