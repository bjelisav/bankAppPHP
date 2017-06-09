<?php
session_start();
include('logHeader.php');
include('connection.php');
$sql = "SELECT * FROM users";
$query = mysqli_query($db,$sql);
 ?>
 <div class="row col-lg-4 col-lg-offset-4">
   <div class="well">


      <form action="checkCred.php" method="post">
        <input type="text" name="username" value="" placeholder="username" class="form-control"><br>
        <input type="password" name="password" value="" placeholder="password" class="form-control"><br>
        <input type="submit" name="login" value="Log In" class="btn btn-primary form-control">
      </form>
    </div>

  </div>
<?php
mysqli_close($db);
include('footer.php');
 ?>
