<?php	require './components/header.php'; ?>

<?php
  $id=$_SESSION['id'];

  //Workaround for submitting through form issue
  echo '';

  if(isset($_POST["Delete"])){
    mysqli_query($conn,'DELETE from complain WHERE complain.Complain_ID = ' . $_POST["complain_delete"] . ';');
  }

  if(isset($_POST["Edit_Subject"])){
    mysqli_query($conn,'UPDATE complain SET Subject = "' . $_POST["complain_edit_subject"] . '"  WHERE Complain_ID = "' . $_POST["Complain_ID"] . '";');
  }
  if(isset($_POST["Edit_Text"])){
    mysqli_query($conn,'UPDATE complain SET Text = "' . $_POST["complain_edit_text"] . '" WHERE Complain_ID = ' . $_POST["Complain_ID"] . ';');
  }
?>

<?php
$result = mysqli_query($conn,"select * from complain  where  User_ID like '%$id%' ");

echo'
  <table id="search-table" class="table table-dark table-bordered table-striped">
    <tr>
      <th scope="col">Donation_ID</th>
      <th scope="col">User_ID</th>
      <th scope="col">Item</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
    </tr>';


  while($row = mysqli_fetch_array($result)) {
    if ($row["Status"] != "Pending") {
      echo '<tr style="border-width: 2px">';
      echo '<td scope="row" style="border-width: 2px">' . $row["Complain_ID"] . '</td>';
      echo '<td style="border-width: 2px">' . $row["User_ID"] . '</td>';
      echo '<td style="border-width: 2px">' . $row["Subject"] . '</td>';
      //echo '<td style="border-width: 2px">' . $row["Name"] . '</td>';
      echo '<td style="border-width: 2px">' . $row["Date"] . '</td>';
      echo '<td style="border-width: 2px">' . $row["Text"] . '</td>';
      echo '<td style="border-width: 2px">' . $row["Comment"] . '</td>';
      echo '<td style="border-width: 2px">' . $row["Status"] . '</td>';
      echo '<td style="border-width: 2px">
        <form action="usercomplaints.php" class="d-flex" method="POST">
          <input type="hidden" name="complain_delete" value="'.$row["Complain_ID"].'">
          <button name="Delete" class="btn btn-primary m-1" type="submit">Delete</button>
        </form>
      </td>';
    } else {
      echo '<tr style="border-width: 2px">';
      echo '<td scope="row" style="border-width: 2px">' . $row["Complain_ID"] . '</td>';
      echo '<td style="border-width: 2px">' . $row["User_ID"] . '</td>';
      echo '<td class="m-0" style="border-width: 2px">
        <form action="usercomplaints.php" class="d-flex" method="POST">
          <input type="textc" style="width: 100%; height: 100%; border-width: 0; color: white; 	background-color: transparent;" name="complain_edit_subject" value="'.$row["Subject"].'" />
          <input type="hidden" name="Complain_ID" value="'.$row["Complain_ID"].'">
          <input name="Edit_Subject" class="d-none" type="submit" />
        </form>
      </td>';
      //echo '<td style="border-width: 2px">' . $row["Name"] . '</td>';
      echo '<td style="border-width: 2px">' . $row["Date"] . '</td>';
      echo '<td style="border-width: 2px">
          <form action="usercomplaints.php" class="d-flex" method="POST">
            <input type="text" style="width: 100%; height: 100%; border-width: 0; color: white; 	background-color: transparent;" name="complain_edit_text" value="'.$row["Text"].'" />
          <input type="hidden" name="Complain_ID" value="'.$row["Complain_ID"].'">
          <input name="Edit_Text" class="d-none" type="submit" />
          </form>
        </td>';
      echo '<td style="border-width: 2px">' . $row["Comment"] . '</td>';
      echo '<td style="border-width: 2px">' . $row["Status"] . '</td>';
      echo '<td style="border-width: 2px">
        <form action="usercomplaints.php" class="d-flex" method="POST">
          <input type="hidden" name="complain_delete" value="'.$row["Complain_ID"].'">
          <button name="Delete" class="btn btn-primary m-1" type="submit">Delete</button>
        </form>
      </td>';
    }

    echo '</tr>';
  }
?>

<?php require './components/footer.php'; ?>
