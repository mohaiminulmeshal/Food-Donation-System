<?php	require './components/header_admin.php'; ?>

<?php
  $id = $_SESSION['id'];
  $q="SELECT * FROM admin WHERE id = '$id'";
  $query = mysqli_query($conn,$q);
  $row = mysqli_fetch_assoc($query);
  $name = $row['name'];
  $email = $row['email'];
  $phone = $row['phone no.'];
?>

<div  style="text-align:left; padding-top: 150px; margin-bottom: 55px; padding-left: 1150px; padding-right: 200px">
<div class="thumb-content">
  <div class="card shadow-sm mb-2">
    <div class="card-body d-flex justify-content-start align-items-center mx-4">
      <div class="d-flex justify-content-between align-items-center">
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>ADMIN ID: </b><?php echo $id ?></div>
      </div>
    </div>
  </div>

  <div class="card shadow-sm mb-2">
    <div class="card-body d-flex justify-content-start align-items-center mx-4">
      <div class="d-flex justify-content-between align-items-center">
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>ADMIN NAME: </b><?php echo $name ?></div>
      </div>
    </div>
  </div>

  <div class="card shadow-sm mb-2">
    <div class="card-body d-flex justify-content-start align-items-center mx-4">
      <div class="d-flex justify-content-between align-items-center">
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>EMAIL: </b><?php echo $email ?></div>
      </div>
    </div>
  </div>

  <div class="card shadow-sm mb-2">
    <div class="card-body d-flex justify-content-start align-items-center mx-4">
      <div class="d-flex justify-content-between align-items-center">
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>PHONE NO: </b><?php echo $phone ?></div>
      </div>
    </div>
  </div>
</div>

<?php	require './components/footer.php'; ?>
