<?php
function getDb(){
  $db = mysqli_connect("localhost","root","","bankAppDB") or die("Something is wrong with connection");
  return $db;
}

function startSession(){
  session_start();
  if (!$_SESSION) {
    header('Location: index.php');
  }
}
