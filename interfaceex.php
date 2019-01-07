

<html>
<head>
<form action="interfaceex.php" method="POST">
E-MAIL:<br>
<input type="text" id="email" name="email"><br><br>
PASSWORD:<br>
<input type="password" id="pass" name="pass"><br><br>
<input type="hidden" name="type" value="<?php echo $_POST['g1']; ?>">
<button type="submit" value="Submit">login</button>
</form>
</head>
</html>


<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




interface login{

    function validate($id ,$pass);
    function display($id);
}

class google implements login{

    function validate($id,$pass){

        $users = array("abc"=>"a", "def"=>"b", "ghi"=>"c");

        $check=-999;

        foreach($users as $uid=>$pid){
            if($uid==$id && $pid==$pass){
                $check=1;
            }
     }

     return $check;
    
    }
    function display($id){

        echo "Welcome ".$id."u have logged in using google";
    }
}

class twitter implements login{
    
    function validate($id,$pass){

        $users = array("abc"=>"a", "def"=>"b", "ghi"=>"c");

        $check=-999;

        foreach($users as $uid=>$pid){
            if($uid==$id && $pid==$pass){
                $check=1;
            }
     }

     return $check;
    
    }
    function display($id){

        echo "Welcome ".$id."u have logged in using google";
    }
    

}
class fb implements login{

    function validate($id,$pass){

        $users = array("abc"=>"a", "def"=>"b", "ghi"=>"c");

        $check=-999;

        foreach($users as $uid=>$pid){
            if($uid==$id && $pid==$pass){
                $check=1;
            }
     }

     return $check;
    
    }
    function display($id){

        echo "Welcome ".$id."u have logged in using google";
    }
 } 



if(isset($_POST['email'])&&isset($_POST['pass'])){


    if($_POST['type']=='google'){
    $logtype='google';
    }

    if($_POST['type']=='twitter'){
        $logtype='twitter';
        }

        if($_POST['type']=='fb'){
            $logtype='fb';
            }



$id=$_POST['email'];
$pass=$_POST['pass'];


if($logtype=='google'){

    $googleobj=new google();
  //  $googleobj->validate();
    if($googleobj->validate($id,$pass)==1){
        $googleobj->display($id);
    }
    else{
        echo"<br>Login Error<br>";
    }

}

elseif($logtype=='fb'){

    $twitterobj=new twitter();
//    $twitterobj->validate();
    if($twitterobj->validate($id,$pass)==1){
        $twitterobj->display($id);
    }
    else{
        echo"<br>Login Error<br>";
    }

}
elseif($logtype=='twitter'){

    $fbobj=new google();
 //   $fbobj->validate();
    if($fbobj->validate($id,$pass)==1){
        $fbobj->display($id);
    }
    else{
        echo"<br>Login Error<br>";
    }

}
}


?>
