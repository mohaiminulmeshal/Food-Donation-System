<?php
   session_start(); //starts the session
   require 'dbconfig/config.php';
?>
<?php
    $details = $_POST['value'];
    mysqli_error($conn);
    $id = $_SESSION['id'];
    $column = $_POST['drop'];
    mysqli_query($conn,"SELECT COUNT(SELECT Complain_ID from complain where Year(Date)=$id)");
?>
