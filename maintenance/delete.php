<?php
include("conn.php");
$vehicleid=$_GET['vehicleid'];
$delete=mysqli_query($conn,"DELETE FROM maintenance where vehicleid='$vehicleid'");
if ($delete) {
     # code...
     echo "deleted";
     header('location:select.php');
}
else{
     echo "Failed: " . mysqli_error($conn);
}


?>