<?php


$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

asort($ceu);

foreach($ceu as $country=>$city){
       echo "The Capital of ".$country."is ".$city."<br>";
}
count_str();

function count_str(){
    $str="abcd";
    $len=strlen($str)-1;
    $i=0;
    $rev="";
    while($len>=0){
        $rev=$str[$i].$rev;
        $i++;
        $len--;
    }
    echo "<br>reverse is :".$rev."<br>";
}

$orgarr=array('a','b','c','d');
$narr=array('f');
array_splice($orgarr,2,0,$narr);
for($i=0;$i<count($orgarr);$i++){
    echo $orgarr[$i];
}


$arr1=array("zilker","tech","de","pvt","g","wer");
$short=100;
$long=0;
foreach($arr1 as $val){
    if(strlen($val)<$short){
          $short=strlen($val);
    }
    if(strlen($val)>$long){
        $long=strlen($val);
   }
}

echo "<br>Largest length is $long and smallest  $short<br><br>";

$strcom="This is my company";
echo strpos($strcom,"company")."<br>";

$strlower="i love my country";
echo "<br>".ucfirst($strlower)."<br>";
echo "<br>".ucwords($strlower)."<br>";

$strboy="I am boy, and 29 year old";
if(strpos($strboy,"boy")==false)
{
echo "<br>not found<br>";
}
else{
    echo "<br>found<br>";
}
?>