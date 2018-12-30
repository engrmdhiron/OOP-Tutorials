<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Work of Class,Property,Object and Method</title>
</head>
<body>
   <h1 style="color:blue; text-align:center;"><u>Work of Class,Property,Object and Method Part-2</u>
   <br>
   <a href="index.php"><button>Back to Index</button></a></h1>
    <?php
         include'functions.php';
    ?>
   <form action="" method="POST">
   <table>
        <tr>
            <td>Enter the first Number: </td>
            <td><input type="number" name="num1"></td>
        </tr>
        <tr>
            <td>Enter the second Number: </td>
            <td><input type="number" name="num2"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="calculation" value="Calculate"></td>
        </tr>
        
        <tr>
            <td></td>
        </tr>
        
   </table>
   </form>

   <?php
        if(isset($_POST['calculation'])){
            $numOne = $_POST['num1'];
            $numTwo = $_POST['num2'];
            
            if(empty($numOne) or empty($numTwo)){
                echo "<span>Field must not be empty!</span><br/>";
            }else {
                $cal = new Calculation;
            echo 'First value is:'.$numOne.'<br/>';
            echo 'Second value is:'.$numTwo.'<br/>';
            $cal->add($numOne, $numTwo);
            $cal->sub($numOne, $numTwo);
            $cal->mul($numOne, $numTwo);
            $cal->div($numOne, $numTwo);
            }
        

        

        }
   ?>

    
</body>
</html>