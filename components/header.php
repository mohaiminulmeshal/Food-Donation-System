<?php
		require 'dbconfig/config.php';
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Khabar Khuji</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="css/style.css">
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  </script>
</head>
<body style="background-color:#FFA500">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="userdash.php">
          <img src="image/kk.png" width="35" height="45" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
              <a class="nav-link active" href="category.php"> CATEGORY </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="usercomplaints.php"> MY DONATION </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="updateprofile.php"> UPDATE PROFILE </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="userprofile.php"> SHOW PROFILE </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="index.php"> LOGOUT </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>