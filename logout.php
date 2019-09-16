<?php
require_once('config/initialize.php');
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

header("Location: index.php");