<?php
session_start();
if (empty($_SESSION['id'])) {
  header('Location: index.php');
}
include('header.php');
include('connection.php');
$sql = "SELECT * FROM users";
$query = mysqli_query($db,$sql);
 ?>

 <table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>deposit</th>
      <th>card</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>

      <?php
      while($row = mysqli_fetch_assoc($query)) {
        $id = $row['id'];
        $name = $row['name'];
        $deposit = $row['deposit'];
        $card = $row['card'];

       ?>
     <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $name; ?></td>
      <td><?php echo $deposit; ?></td>
      <td><?php echo $card; ?></td>
      <td><a href="deleteUser.php?id=<?php echo $id ?>" type="button" class="btn btn-danger">DELETE</a></td>
      <td><a href="alterUser.php?id=<?php echo $id ?>&name=<?php echo $name ?>&deposit=<?php echo $deposit ?>&card=<?php echo $card ?>" type="button" class="btn btn-warning">EDIT</a></td>
      </tr>
      <?php
     }
       ?>

  </tbody>
 </table>
 <?php
 mysqli_close($db);
 include('footer.php');
  ?>
