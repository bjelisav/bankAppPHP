<?php
session_start();
if (empty($_SESSION['id'])) {
  header('Location: index.php');
  session_unset();
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
