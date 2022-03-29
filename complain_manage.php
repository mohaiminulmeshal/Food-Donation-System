<?php	require './components/header_admin.php'; ?>

<?php
	if(isset($_POST["status-pending"])){
		mysqli_query($conn,'UPDATE complain SET Status = "Pending" WHERE complain.Complain_ID = '.$_POST["complain_id"]);
	}
	if(isset($_POST["status-processed"])){
		mysqli_query($conn,'UPDATE complain SET Status = "Processed" WHERE complain.Complain_ID = '.$_POST["complain_id"]);
	}
	if(isset($_POST["status-resolved"])){
		mysqli_query($conn,'UPDATE complain SET Status = "Resolved" WHERE complain.Complain_ID = '.$_POST["complain_id"]);
	}
	if(isset($_POST["givefeedback"])){
		mysqli_query($conn,'UPDATE complain SET Comment = "'.$_POST["feedback"].'" WHERE complain.Complain_ID = '.$_POST["complain_id"]);
	}

	//  $complain_data = mysqli_query($conn,'SELECT * FROM complain INNER JOIN user ON complain.User_ID = user.id');
	$complain_data = mysqli_query($conn,'SELECT * FROM ((complain INNER JOIN user ON user.ID = complain.User_ID) INNER JOIN phone ON user.id = phone.id);');
?>

<?php
	echo'
	<table id="search-table" class="table table-dark table-bordered table-striped">
		<tr>
			<th scope="col">Complain_ID</th>
			<th scope="col">Subject</th>
			<th scope="col">Name</th>
			<th scope="col">Phone No.</th>
			<th scope="col">Date</th>
			<th scope="col">Text</th>
			<th scope="col">Comment</th>
			<th scope="col">Status</th>
			<th scope="col">User_ID</th>
			<th scope="col">Feedback</th>
			<th scope="col">Change Status</th>
			<th scope="col">Give Comment</th>
		</tr>
	';


	while($row = mysqli_fetch_array($complain_data))
	{
	echo '
		<tr style="border-width: 2px">
			<td scope="row" style="border-width: 2px">' . $row["Complain_ID"] . '</td>
			<td style="border-width: 2px">' . $row["Subject"] . '</td>
			<td style="border-width: 2px">' . $row["name"] . '</td>
			<td style="border-width: 2px">' . $row["Phone"] . '</td>
			<td style="border-width: 2px">' . $row["Date"] . '</td>
			<td style="border-width: 2px">' . $row["Text"] . '</td>
			<td style="border-width: 2px">' . $row["Comment"] . '</td>
			<td style="border-width: 2px">' . $row["Status"] . '</td>
			<td style="border-width: 2px">' . $row["User_ID"] . '</td>
			<td style="border-width: 2px">' . $row["Feedback"] . '</td>
			<td style="border-width: 2px">
				<form action="complain_manage.php" class="d-flex" method="POST">
					<input type="hidden" name="complain_id" value="'.$row["Complain_ID"].'">
					<button name="status-pending" class="btn btn-primary m-1" type="submit">Pending</button>
					<button name="status-processed" class="btn btn-primary m-1" type="submit">Processed</button>
					<button name="status-resolved" class="btn btn-primary m-1" type="submit">Resolved</button>
				</form>
			</td>
			<td style="border-width: 2px">
				<form action="complain_manage.php" class="d-flex" method="POST">
					<input type="hidden" name="complain_id" value="'.$row["Complain_ID"].'">
					<input type="type" name="feedback" style="background: transparent; border-width: 10; color: white"  placeholder="Give Comment">
					<input type="submit" name="givefeedback" style="display:none" value="givefeedback" />
					</form>

			</td>
		</tr>
	';
	}
?>

<?php	
	require'./search_html.php';
	require'./components/footer.php';
?>
