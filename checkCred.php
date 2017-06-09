<?php

include('connection.php');
if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT id FROM login WHERE username = '$username' AND password = '$password'";
  $query = mysqli_query($db,$sql);
  if (mysqli_num_rows($query) == 1) {
    $result = mysqli_fetch_assoc($query);
    session_start();
    $_SESSION['id'] = $result['id'];
    header('Location: main.php');
  }else{
    header("Location: index.php");
  }
}else{
  header('Location: index.php');
  session_unset();
}

mysqli_close($db);
