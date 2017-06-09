<?php
session_start();
if (empty($_SESSION['id'])) {
  header('Location: index.php');
}
include('connection.php');
$id = $_GET['id'];
$name = $_POST['name'];
$deposit = $_POST['deposit'];
$card = $_POST['card'];
$sql = "UPDATE users SET name = '$name',deposit = '$deposit',card = '$card'  WHERE id = '$id'";
$query = mysqli_query($db,$sql);
header('Location: main.php');
?>
