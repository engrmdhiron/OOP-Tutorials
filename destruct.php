<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>Destruct</u>
   <br>
   <a href="index.php"><button>Back to Index</button></a></h1>
   <h3>__destruct</h3>
   <p>The destructor method will be called as soon as there are no other references to a particular object, or in any order during the shutdown sequence. </p>
   <pre>
       <code>
           class Students {
                public function studentInfo(){
                    echo "My name is Md.Hiron Mollik";
                }

                public function __destruct(){
                    echo " Sagor";
                }
            }

            $obj = new Students;
            $obj->studentInfo();
       </code>
   </pre>
    
</body>
</html>

<?php
    class Students {
        
        public function studentInfo(){
            echo "My name is Md.Hiron Mollik";
        }

        public function __destruct(){
            echo " Sagor";
        }
    }

    $obj = new Students;
    $obj->studentInfo();

?>