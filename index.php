<?php 
require_once('config/initialize.php');

if(!isset($_SESSION['login'])){
    header("Location: login.php");
}

?>
<a href="logout.php">logout</a>