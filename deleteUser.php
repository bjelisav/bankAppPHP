<?php
session_start();
if (empty($_SESSION['id'])) {
  header('Location: index.php');
}
include('connection.php');
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = $id LIMIT 1";
$query = mysqli_query($db,$sql);
header('Location: main.php');
mysqli_close($db);
 ?>
