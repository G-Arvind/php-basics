<?php
oddoreven();
stringop();
loop();
converstr();
ad();
arrayop();

function oddoreven(){
$a=3;
if($a%2==1){
    echo "number is odd  <br>";
}
else
echo "number is even <br>";
}

function stringop(){

    $strval="im learning php";
    echo"Number of words :". str_word_count($strval) . "<br>";
    echo"before replace :". $strval ."<br>";
    echo"Replaced string :".str_replace("php","java",$strval). "<br>";
}

function loop(){

    echo  "While loop <br>";
    $a=1;
    while($a<5)
    {
        $a++;
        print $a."<br>";
    }
    echo "do while <br>";
    do{
        $a++;
        print $a."<br>";
    }while($a<5);
}

function converstr(){

    $a=7.9;
    $strr= "$a";
}

function ad(){
    $a=5;
    $b=2;
    $c=$a+$b;
    print "Addition is :". $c ." <br> ";
}

function arrayop(){

    $cars=array("BMW","AUDI","HONDA","MARUTI","FIAT");
$i=0;
$len=count($cars);
foreach($cars as $car){
  echo $car."<br>";
}
$carsrev=array_reverse($cars);
echo "reversed array <br>";
for($i=0;$i<$len;$i++){
    echo $carsrev[$i]."<br>"; 
  }
$pos=array_search("MARUTI",$cars);
if($pos!=FALSE){
$cars[$pos]="fiat";
}
echo "replaced array <br>";
foreach($cars as $car){
    echo $car."<br>";
  }
  echo "Specific element: ";
  echo $cars[1];

}

?>