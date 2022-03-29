<?php	require './components/header_login.php'; ?>

<div id="main-wrapper">
<center><h2><p style="font-family:'Courier New'">REGISTER HERE</p></h2></center>
	<div class="imgcontainer">
		<img src="image/user.png" alt="Avatar" class="avatar">
	</div>

<form action="register.php" method="post">
	<div class="inner_container">
		<label><b><p style="font-family:'Courier New'">ID</p></b></label>
		<input type="text" placeholder="Type your ID" name="id" required>
		<label><b><p style="font-family:'Courier New'">EMAIL</p></b></label>
		<input type="text" placeholder="Type your Email" name="email" required>
		<label><b><p style="font-family:'Courier New'">NAME</p></b></label>
		<input type="text" placeholder="Type your Name" name="name" required>
		<label><b><p style="font-family:'Courier New'">ADDRESS</p></b></label>
		<input type="text" placeholder="Type your Name" name="address" required>
		<label><b><p style="font-family:'Courier New'">PHONE NO.</p></b></label>
		<input type="text" placeholder="Type your Phone Number" name="Phone" required>
		<label><b><p style="font-family:'Courier New'">PASSWORD</p></b></label>
		<input type="password" placeholder="Type your Password" name="password" required>
		<label><b><p style="font-family:'Courier New'">CONFIRM PASSWORD</p></b></label>
		<input type="password" placeholder="Type your Password again" name="cpassword" required>
		<button class="sign_up_btn" name="register" type="submit">SIGN UP</button>
		<a href="userlogin.php"><button type="button" class="back_btn">BACK TO LOGIN</button></a>
	</div>
</form>

<?php
	if(isset($_POST['register']))
	{
		$id=$_POST['id'];
		$email=$_POST['email'];
		$username=$_POST['name'];
		$address=$_POST['address'];
		$phone=$_POST['Phone'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];



		if($password==$cpassword)
		{
			$q= "select * from user where id= '$id'";
						$query = mysqli_query($conn,$q);

				if(mysqli_num_rows($query) == false)
				{
					$register =  "INSERT INTO user (ID, Email, Name, Address, Password) VALUES ('$id', '$email', '$username','$address','$password')";
												mysqli_query($conn,$register);
												$register1 = "INSERT INTO phone (id, Phone) VALUES ('$id', '$phone')";
												mysqli_query($conn,$register1);
					echo '<script type="text/javascript">alert("User Registered.. go to login page to login")</script>';
				}
				else
				{
					echo '<script type="text/javascript">alert("This ID Already exists.. Please try another ID!")</script>';
				}

		}
		else
		{
			echo '<script type="text/javascript">alert("Password and Confirm Password does not match")</script>';
		}

	}
	else
	{
	}
?>
	</div>

<?php require './components/footer.php'; ?>
