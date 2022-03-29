<?php	require './components/header_admin.php'; ?>

<?php
  if(isset($_POST["filter_button"])){
    if($_POST["filter_type"] == "subject") {
      $filter_data = mysqli_query($conn, 'SELECT COUNT(Subject) as Subject FROM complain WHERE Subject = "'. $_POST["filter_value"] .'";');

      $filter_count_type = "subject";
      $filter_count = mysqli_fetch_array($filter_data)["Subject"];
    } elseif($_POST["filter_type"] == "year") {
      $filter_data = mysqli_query($conn, 'SELECT COUNT(Date) as Date FROM complain WHERE YEAR(Date) = "'. $_POST["filter_value"] .'";');

      $filter_count_type = "year";
      $filter_count = mysqli_fetch_array($filter_data)["Date"];
     }
  }
?>
<main class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-4">
      <div class="card m-3">
        <div class="card-body">
          <h3 class="card-title ml-5 mb-5">Statistics</h3>
          <div class="container">
            <form action="complainstats.php" method="POST">
              <div class="input-group mb-3">
                <select name="filter_type" class="form-control">
                  <option value="year">Year</option>
                  <option value="subject">Subject</option>
                </select>

                <input type="text" name="filter_value" class="form-control" />
              </div>
              <div class="form-group mb-4">
                <input type="submit" name="filter_button" class="form-control btn-primary" value="Search" />
              </div>
            </form>
            <?php
              if(isset($filter_count_type)) {
                if($filter_count_type = "year") {
                  echo '
                  <div class="alert alert-success" role="alert">
                    Number of Complains in "'. $_POST["filter_value"] .'": '. $filter_count .'
                  </div>
                  ';
                } else {
                  echo '
                  <div class="alert alert-success" role="alert">
                  Number of Complains for "'. $_POST["filter_value"] .'": '. $filter_count .'
                  </div>
                  ';
                }
              }
            ?>
          </div>
        </div>
      </div>
    </div>
</main>



<?php require './components/footer.php'; ?>

