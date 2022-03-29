<?php
   session_start(); //starts the session
   require 'dbconfig/config.php';
?>
<?php
    $details = $_POST['value'];
    $id = $_SESSION['id'];
    $column = $_POST['drop'];

    mysqli_query($conn, "UPDATE user SET $column='$details' WHERE id='$id'");
    mysqli_query($conn, "UPDATE phone SET $column='$details' WHERE id='$id'");

    Print '<script>window.location.assign("userprofile.php");</script>';
?>
