<?php	require './components/header.php'; ?>

<form action="update.php" method="POST" style="text-align:center; padding-top: 200px; padding-left: 300px; font-size: 240%">
  <select name="drop" class="btn btn-secondary">
    <option value="name">NAME</option>
    <option value="password">PASSWORD</option>
    <option value="email">EMAIL</option>
    <option value="Phone">PHONE NO.</option>
  </select>
  <input type ="text" style="font-size: 55%" name="value"/>
  <input type="submit" class="btn btn-primary" value="Update"/>
</form>

<?php require './components/footer.php'; ?>