<?php
session_start();
if (empty($_SESSION['id'])) {
  header('Location: index.php');
}
include('header.php');
 ?>

<form class="" action="checkInput.php" method="POST">
  <input type="text" name="name" value="" class="form-control" placeholder="name"><br>
  <input type="text" name="deposit" value="" class="form-control" placeholder="deposit"><br>
  <input type="text" name="card" value="" class="form-control" placeholder="card"><br>
  <input type="submit" value="save account" class="btn btn-primary form-control">
</form>

<?php
include('footer.php');

 ?>
