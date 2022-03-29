<?php
$conn=mysqli_connect ("localhost", "root", "") or die ("Unable to connect");
mysqli_select_db($conn,"complain_management") or die("Cannot connect to database"); //Connect to database
?>
