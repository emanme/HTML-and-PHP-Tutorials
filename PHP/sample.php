<?php
$usernames = array("pikoy", "kia23", "kulot");
$passwords = array("gamay3", "77652", "invalid");
$arrlength = count($usernames);
for($x = 0; $x < $arrlength; $x++) {
    echo $usernames[$x]." - ".$passwords[$x];
    echo "<br>";
}