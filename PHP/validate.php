<?php 
require_once('config/initialize.php');
$username='admin';
$password='123456';

echo $_POST['username']."<br/>". $_POST['password'];
if($_POST['username']==$username && 
$_POST['password']==$password){
    $_SESSION['login']=true;
    header("Location: index.php");
}

?>
 