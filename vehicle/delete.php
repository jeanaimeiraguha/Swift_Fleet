<?php
include("conn.php");
$vehicleid=$_GET['vehicleid'];
$delete=mysqli_query($conn,"DELETE FROM vehicle where vehicleid='$vehicleid'");
if ($delete) {
     # code...
     echo "deleted";
     header('location:select.php');
}
else{
     echo "Failed";
}


?>