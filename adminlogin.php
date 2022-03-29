<?php	require './components/header_login.php'; ?>

<div id="main-wrapper">
	<center><h2><p style="font-family:'Courier New'"><b>ADMIN LOGIN</b></p></h2></center>
	<div class="imgcontainer">
		<img src="image/admin.png" alt="Avatar" class="avatar">
	</div>
	<form action="adminlogin.php" method="post">
		<div class="inner_container">
			<label><b><p style="font-family:'Courier New'">ADMIN ID</p></b></label>
			<input type="text" placeholder="Enter User ID" name="id" required>
			<label><b><p style="font-family:'Courier New'">PASSWORD</p></b></label>
			<input type="password" placeholder="Enter Password" name="password" required>
			<button class="login_button" name="login" type="submit"><b>LOGIN</b></button>
		</div>
	</form>
</div>
		
<?php
	if(isset($_POST['login'])) {
		$id=$_POST['id'];
		$password=$_POST['password'];
		$q = "select * from admin where id='$id' and password='$password' ";
		//echo $query;
		$query = mysqli_query($conn,$q);

		if(mysqli_num_rows($query))
		{
			$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
			
			$_SESSION['id'] = $id;
			$_SESSION['password'] = $password;

			echo("<script>window.location.href = 'admindash.php';</script>");
		}
		else
		{
			echo '<script type="text/javascript">alert("No such Admin exists. Invalid Credentials")</script>';
		}
	}
?>

<?php require './components/footer.php'; ?>
