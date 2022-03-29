<?php	require './components/header_admin.php'; ?>

<?php
	$search = $_POST['search'];

	$result = mysqli_query($conn,"select * from complain  where Complain_ID like '%$search%' or User_ID like '%$search%' or Status like '%$search%' or Subject like '%$search%' or Year(Date) like '%$search%' ");

	echo'<link rel="stylesheet" href="./css2/style.css">
	<link rel="stylesheet" href="./css2/bootstrap.min.css">';

	echo'<table id="search-table" class="table table-dark table-bordered table-striped">
	<tr>
		<th scope="col">Complain_ID</th>
		<th scope="col">Subject</th>
		<th scope="col">Date</th>
		<th scope="col">Text</th>
		<th scope="col">Comment</th>
		<th scope="col">Status</th>
		<th scope="col">User_ID</th>
		<th scope="col">Feedback</th>
	</tr>';


	while($row = mysqli_fetch_array($result))
	{
	echo '<tr style="border-width: 2px">';
	echo '<td scope="row" style="border-width: 2px">' . $row["Complain_ID"] . '</td>';
	echo '<td style="border-width: 2px">' . $row["Subject"] . '</td>';
	//echo '<td style="border-width: 2px">' . $row["Name"] . '</td>';
	echo '<td style="border-width: 2px">' . $row["Date"] . '</td>';
	echo '<td style="border-width: 2px">' . $row["Text"] . '</td>';
	echo '<td style="border-width: 2px">' . $row["Comment"] . '</td>';
	echo '<td style="border-width: 2px">' . $row["Status"] . '</td>';
	echo '<td style="border-width: 2px">' . $row["User_ID"] . '</td>';
	echo '<td style="border-width: 2px">' . $row["Feedback"] . '</td>';
	echo '</tr>';
	}
?>

<?php require './components/footer.php'; ?>
