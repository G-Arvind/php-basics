<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Calculator {
      // private $num1;
    //   private $num2;
       public $res;


   
       function addit ($num1 ,$num2){
           $this->res=$num1+$num2;
           return $this->res;
       }
       function subit ($num1 ,$num2){
        $this->res=$num1-$num2;
        return $this->res;
       }
       function mul ($num1 ,$num2){
        $this->res=$num1*$num2;
        return $this->res;
       }
       function div ($num1 ,$num2){
           if($num2!=0){          
        $this->res=$num1/$num2;
        return $this->res;
           }
           else{
               return "Divide by zero error";
           }
       }
   }
   $obj1=new Calculator();
   $fnum=$_GET['fnum']+0;
   $snum=$_GET['snum']+0;
   if($_GET['g1']=='add'){
   echo "Sum is ".$obj1->addit($fnum,$snum);
   }
   if($_GET['g1']=='sub'){
    echo "Difference is ".$obj1->subit($fnum,$snum);
    }
    if($_GET['g1']=='mul'){
        echo "Product is ".$obj1->mul($fnum,$snum);
        }
        if($_GET['g1']=='div'){
            echo "Quotient is ".$obj1->div($fnum,$snum);
            }
?>