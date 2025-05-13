<?php
include('conn.php');

if (isset($_POST['add'])) {
    $vehicleid = $_POST['vehicleid'];
    $tripdate = $_POST['tripdate'];
    $distance = $_POST['distance'];
    $fuelconsumed = $_POST['fuelconsumed'];
    $revenue = $_POST['revenue'];

    $insert = mysqli_query($conn, "INSERT INTO trip(vehicleid, tripdate, distance, fuelconsumed,revenue) VALUES('$vehicleid', '$tripdate', '$distance', '$fuelconsumed','$revenue')");

    if ($insert) {
        echo "Trip record added successfully";
    } else {
        echo "Failed";
    }
}
?>

<h2>Trip Register</h2>
<form action="" method="post">
    Vehicle Id: <input type="text" name="vehicleid"><br>
     Trip Date: <input type="date" name="tripdate"><br>
    Distance: <input type="text" name="distance"><br>
    Fuel Consumed: <input type="text" name="fuelconsumed"><br>
    Revenue: <input type="text" name="revenue"><br>
    <button type="submit" name="add">Add New</button>
</form>
