<?php
session_start();
if (empty($_SESSION['id'])) {
  header('Location: index.php');
}
include('header.php');
$id = $_GET['id'];
$name = $_GET['name'];
$deposit = $_GET['deposit'];
$card = $_GET['card'];
 ?>
 <form class="" action="changeData.php?id=<?php echo $id ?>" method="post">

   <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="name"><br>
   <input type="text" name="deposit" value="<?php echo $deposit; ?>" class="form-control" placeholder="deposit"><br>
   <input type="text" name="card" value="<?php echo $card; ?>" class="form-control" placeholder="card"><br>
   <input type="submit" value="save account" class="btn btn-primary form-control">
 </form>

<?php
include('footer.php');
?>
