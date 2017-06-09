<?php
session_start();
include('header.php');
include('connection.php');
if (!empty($_POST['name']) && !empty($_POST['deposit']) && !empty($_POST['card']))
{
  $name = $_POST['name'];
  $deposit = $_POST['deposit'];
  $card = $_POST['card'];
  $sql = "INSERT INTO users VALUES(NULL,'$name','$deposit','$card')";
  $query = mysqli_query($db,$sql);
  header('Location: main.php');
}
else
{
  echo '<h2 class="jumbotron"> NISTE DOBRO UNELI PODATKE!!!</h3>';
}

include('footer.php');


mysqli_close($db);
