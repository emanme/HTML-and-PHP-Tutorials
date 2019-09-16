<?php 
require_once('config/initialize.php');

$user1 = new User;
$user2 = new User;
$user3 = new User;

$user1->id="1";
$user1->first_name="SAVORY ";
$user1->last_name="ILONGGO";
$user1->username="sav1";
$user1->password="1254";

$user2->id="2";
$user2->first_name="ANYTIME ";
$user2->last_name="FITNESS";
$user2->username="any143";
$user2->password="ilove2";

$user3->id="3";
$user3->first_name="PEPPER ";
$user3->last_name="LUNCH";
$user3->username="pepp";
$user3->password="p4321";

$userlist= array($user1,$user2,$user3);
 
 
foreach($userlist as $user) {
    if($_POST['username']==$user->username && 
    $_POST['password']==$user->password){
     
     $isvalid=true;
     break;
  }
}
 
/* $usernames = array("pikoy", "kia23", "kulot");
$passwords = array("gamay3", "77652", "invalid");
$arrlength = count($usernames);
echo "post:".$_POST['username']." ".$_POST['password']."</br>";
 $isvalid=false;
for($x = 0; $x < $arrlength; $x++) {
    echo "foreach:".$usernames[$x]." ".$passwords[$x]."</br>";
    if($_POST['username']==$usernames[$x] && 
      $_POST['password']==$passwords[$x]){
       
       $isvalid=true;
       break;
    }
} */
if($isvalid){
    $_SESSION['login']=true;
    header("Location: index.php");
}
else{
    header("Location: login.php?ms=invalid_credentials");

}
 

?>
 