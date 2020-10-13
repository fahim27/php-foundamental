<?php

    class Calculation{
        function sum($num1,$num2){
            $total=$num1+$num2;
            echo "<b> summation  is "  .$total ."</b>";
        }
        function sub($num1,$num2){
            $total=$num1-$num2;
            echo "<b> Division   is "  .$total ."</b>";
        }
        function multi($num1,$num2){
            $total=$num1*$num2;
            echo "<b> MUltiplication   is "  .$total ."</b>";
        }
        function divi($num1,$num2){
            $total=$num1/$num2;
            echo "<b> Division   is "  .$total ."</b>";
        }
    };
?>