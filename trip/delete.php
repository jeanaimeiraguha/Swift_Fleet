<?php
include('conn.php');

$_vehicleid=$_GET['vehicleid'];

$sql= mysqli_query($conn, "DELETE FROM trip where vehicleid='$_vehicleid'");
if($sql){
     echo "<script>alert('Deleted')</script>";
     header('location:select.php');
}
else{
     echo "Failed";
}


?>