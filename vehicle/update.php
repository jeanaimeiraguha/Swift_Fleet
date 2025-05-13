<?php
include("conn.php");
$vehicleid=$_GET['vehicleid'];
$select=mysqli_query($conn,"SELECT * FROM vehicle where vehicleid='$vehicleid'");

$row=mysqli_fetch_array($select);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h2>update Vehicle details</h2>
    <form action="" method="post">
        Vehicle Name <input type="text" name="vehiclename" value="<?php echo $row['vehiclename']?>"> <br>
        Type <input type="text" name="type" value="<?php echo $row['type']?>"> <br>
        Registration Number <input type="text" name="registrationnumber" value="<?php echo $row['registrationnumber']?>"> <br>
        Capacity <input type="text" name="capacity" value="<?php echo $row['capacity']?>"> <br>
        <button type="submit" name="add">update</button>
    </form>  
</body>
</html>
<?php

include('conn.php');
if (isset($_POST['add'])) {
    $vehiclename = $_POST['vehiclename'];   
    $type = $_POST['type'];   
    $registrationnumber = $_POST['registrationnumber'];   
    $capacity = $_POST['capacity']; 
    $update=mysqli_query($conn,"UPDATE vehicle set vehiclename='$vehiclename',type='$type',registrationnumber='$registrationnumber',capacity='$capacity' where vehicleid='$vehicleid'");
    if($update){
     // echo "updated successfully";
     header('location:select.php');
    }
    else{
     echo "failed to be updated";
    }
}

?>
