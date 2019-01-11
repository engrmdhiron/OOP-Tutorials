<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="color:blue; text-align:center;"><u>Abstract</u>
    <br>
    <a href="index.php"><button>Back to Index</button></a></h1>
    <p>Classes defined as abstract may not be instantiated, and any class that contains at least one abstract method must also be abstract. Methods defined
    When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child; additionally, these methods must be defined with the same (or a less restricted) visibility. For example, if the abstract method is defined as protected, the function implementation must be defined as either protected or public, but not private. Furthermore the signatures of the methods must match, i.e. the type hints and the number of required arguments must be the same. For example, if the child class defines an optional argument, where the abstract method's signature does not, there is no conflict in the signature. This also applies to constructors as of PHP 5.4. Before 5.4 constructor signatures could differ. </p>
    <blockquote>
        <pre>
            <code>
                
            </code>
        </pre>
    </blockquote>
    <?php 
        
    ?>
</body>
</html>
