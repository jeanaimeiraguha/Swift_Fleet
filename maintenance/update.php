<?php
include("conn.php");
$vehicleid=$_GET['vehicleid'];
$select=mysqli_query($conn,"SELECT * FROM maintenance where vehicleid='$vehicleid'");

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
     <h2>update Maintenance</h2>
    <form action="" method="post">
        Vehicle Id <input type="text" name="vehicleid" value="<?php echo $row['vehicleid']?>"> <br>
   Date:<input type="date" name="date" value="<?php echo $row['date']?>"> <br>
       
      Description <input type="text" name="description" value="<?php echo $row['description']?>"> <br>
        
   Cost <input type="text" name="cost" value="<?php echo $row['cost']?>"> <br>
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
