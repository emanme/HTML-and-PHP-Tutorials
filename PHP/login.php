<?php 
require_once('config/initialize.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Using bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
<form action="validate.php" method="post">
 <div class="form-group">
 <label for="username">username:</label>
  <input type="text" class="form-control" name="username" >
  </div>
  <div class="form-group">
 <label for="password">pasword:</label>
  <input type="password" class="form-control" name="password" >
  </div>
  
  <input type="submit" value="Submit"  class="btn btn-primary">
</form> 
 
</div>

</body>
</html>