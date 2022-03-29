<?php	require './components/header_login.php'; ?>

	<div id="main-wrapper">
	<center><h2><p style="font-family:'Courier New'"><b>USER LOGIN</b></p></h2></center>
			<div class="imgcontainer">
				<img src="image/user.png" alt="Avatar" class="avatar">
			</div>
		<form action="userlogin.php" method="post">
			<div class="inner_container">
				<label><b><p style="font-family:'Courier New'">USER ID</p></b></label>
				<input type="text" placeholder="Enter User ID" name="id" required>
				<label><b><p style="font-family:'Courier New'">PASSWORD</p></b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button class="login_button" name="login" type="submit">LOGIN</button>
				<a href="register.php"><button type="button" class="register_btn">CLICK HERE TO REGISTER</button></a>
			</div>
		</form>

		<?php
			if(isset($_POST['login']))
			{
				$id=$_POST['id'];
				$password=$_POST['password'];
				$q = "select * from user where id='$id' and password='$password' ";
				$query = mysqli_query($conn,$q);

				if(mysqli_num_rows($query))
					{
					$row = mysqli_fetch_array($query,MYSQLI_ASSOC);

					$_SESSION['id'] = $id;
					$_SESSION['password'] = $password;

					echo("<script>window.location.href = 'userdash.php';</script>");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
			} 
		?>

	</div>

<?php require './components/footer.php'; ?>
