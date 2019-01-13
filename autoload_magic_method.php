<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="color:blue; text-align:center;"><u>__autoload()</u>
    <br>
    <a href="index.php"><button>Back to Index</button></a></h1>
    <p>This global function is called whenever you try to create an object of a class that hasn't been defined. It takes just one parameter, which is the name of the class you have not defined. If you define an object as being from a class that PHP does not recognise, PHP will run this function, then try to re-create the object - you have a second chance to have the right class. </p>
    <pre>
        <code>
            //Without autoload function 
            include "classes/Php.php";
            include "classes/Java.php";
            include "classes/Ruby.php";
            .......

            //Most common autoload function is __autoload()
            function __autoload($class_name){
                include "classes/".$class_name.'.php';
            }

            //Most popular autoload function is apl_autoload_register()
            spl_autoload_register(function($class_name){
                include "classes/".$class_name.'.php';
            });
            
            $php = new Php;
            $java = new Java;
            $rubt = new Ruby;
        </code>
    </pre>
    <?php 
        //autoload() function 
        function __autoload($class_name){
            include "classes/".$class_name.'.php';
        }

        //spl_autoload_register() function
        spl_autoload_register(function($class_name){
            include "classes/".$class_name.'.php';
        });

        $php = new Php;
        $java = new Java;
        $ruby = new Ruby;
    

    ?>
</body>
</html>
