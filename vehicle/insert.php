<?php
include("conn.php");

if (isset($_POST['add'])) {
    $vehiclename = $_POST['vehiclename'];   
    $type = $_POST['type'];   
    $registrationnumber = $_POST['registrationnumber'];   
    $capacity = $_POST['capacity'];

   
    $insert = mysqli_query($conn, "INSERT INTO vehicle (vehiclename, type, registrationnumber, capacity) 
    VALUES ('$vehiclename', '$type', '$registrationnumber', '$capacity')");

    if ($insert) {
        echo "<script>alert('Vehicle added successfully!');</script>";
        header('location:select.php');
    } else {
        echo "Failed to add vehicle: ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Add</title>
</head>
<body>
    <form action="" method="post">
        Vehicle Name <input type="text" name="vehiclename"> <br>
        Type <input type="text" name="type"> <br>
        Registration Number <input type="text" name="registrationnumber"> <br>
        Capacity <input type="text" name="capacity"> <br>
        <button type="submit" name="add">Add New</button>
    </form>  
</body>
</html>
