 
<?php
include 'config.php';

$id = $_GET['id'];

$query = "SELECT image FROM doctor WHERE id= '".$id."'";

$result = mysqli_query($conn,$query);
$row = mysql_fetch_assoc($result);
header("Content-type: image/jpg");
  echo $row['image'];
    
?>