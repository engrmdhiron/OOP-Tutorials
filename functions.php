<?php
class Calculation{

    public function add($a,$b){
        $value1 = $a;
        $value2 = $b;
        echo "Summation: ".($value1+$value2)."<br/>";
    }


    public function sub($a,$b){
        $value1 = $a;
        $value2 = $b;
        echo "Subtraction: ".($value1-$value2)."<br/>";
    }


    public function mul($a,$b){
        $value1 = $a;
        $value2 = $b;
        echo "Multiplication: ".($value1*$value2)."<br/>";
    }

    public function div($a,$b){
        $value1 = $a;
        $value2 = $b;
        echo "Division: ".($value1/$value2);
    }

}
?>