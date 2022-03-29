<?php	require './components/header.php'; ?>


<?php
  $id = $_SESSION['id'];
  $q="SELECT * FROM user WHERE id = '$id'";
  $q2="SELECT * FROM phone WHERE id = '$id'";
  $query = mysqli_query($conn,$q);
  $query2 = mysqli_query($conn,$q2);
  $row = mysqli_fetch_assoc($query);
  $row2 = mysqli_fetch_assoc($query2);
  $name = $row['name'];
  $email = $row['email'];
  $address = $row['address'];
  $phone = $row2['Phone'];
?>

<div  style="text-align:left; padding-top: 150px; margin-bottom: 55px; padding-left: 1150px; padding-right: 200px">
  <div class="thumb-content">
    <div class="card shadow-sm mb-2">
      <div class="card-body d-flex justify-content-start align-items-center mx-4">
        <div class="d-flex justify-content-between align-items-center"></div>
        <div class="d-flex flex-column justify-content-center align-items-center">
          <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>DONOR ID: </b><?php echo $id ?></div>
        </div>
    </div>
  </div>

  <div class="card shadow-sm mb-2">
    <div class="card-body d-flex justify-content-start align-items-center mx-4">
      <div class="d-flex justify-content-between align-items-center"></div>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>DONOR NAME: </b><?php echo $name ?></div>
      </div>
    </div>
  </div>

  <div class="card shadow-sm mb-2">
    <div class="card-body d-flex justify-content-start align-items-center mx-4">
      <div class="d-flex justify-content-between align-items-center"></div>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>EMAIL: </b><?php echo $email ?></div>
      </div>
    </div>
  </div>

<div class="card shadow-sm mb-2">
    <div class="card-body d-flex justify-content-start align-items-center mx-4">
      <div class="d-flex justify-content-between align-items-center"></div>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>ADDRESS: </b><?php echo $address ?></div>
      </div>
    </div>
  </div>

  <div class="card shadow-sm mb-2">
    <div class="card-body d-flex justify-content-start align-items-center mx-4">
      <div class="d-flex justify-content-between align-items-center"></div>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="mb-2" style="width:120%; font-size: 170%; text-align: center; padding-left: 90px"><b>PHONE NO: </b><?php echo $phone ?></div>
      </div>
    </div>
  </div>
</div>

<?php require './components/footer.php'; ?>