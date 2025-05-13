<?php
include("conn.php");
$vehicleid = $_GET['vehicleid'];
$select = mysqli_query($conn, "SELECT * FROM trip WHERE vehicleid='$vehicleid'");
$row = mysqli_fetch_array($select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Trip Details</title>
</head>
<body>
    <h2>Update Trip Details</h2>
    <form action="" method="post">
        Vehicle ID <input type="text" name="vehicleid" value="<?php echo $row['vehicleid']; ?>"> <br>
        Trip Date <input type="text" name="tripdate" value="<?php echo $row['tripdate']; ?>"> <br>
        Distance <input type="text" name="distance" value="<?php echo $row['distance']; ?>"> <br>
        Fuel Consumed <input type="text" name="fuelconsumed" value="<?php echo $row['fuelconsumed']; ?>"> <br>
        Revenue <input type="text" name="revenue" value="<?php echo $row['revenue']; ?>"> <br>
        <button type="submit" name="add">Update</button>
    </form>  
</body>
</html>

<?php
include("conn.php");
if (isset($_POST['add'])) {
    $vehicleid = $_POST['vehicleid'];   
    $tripdate = $_POST['tripdate'];   
    $distance = $_POST['distance'];   
    $fuelconsumed = $_POST['fuelconsumed']; 
    $revenue = $_POST['revenue']; 

    $update = mysqli_query($conn, "UPDATE trip SET vehicleid='$vehicleid', tripdate='$tripdate', distance='$distance', fuelconsumed='$fuelconsumed', revenue='$revenue' WHERE vehicleid='$vehicleid'");
    
    if ($update) {
        header('location:select.php');
    } else {
        echo "Failed to be updated";
    }
}
?>
