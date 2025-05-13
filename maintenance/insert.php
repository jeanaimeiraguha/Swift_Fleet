<?php
include('conn.php');

if (isset($_POST['add'])) {
    $vehicleid = $_POST['vehicleid'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $cost = $_POST['cost'];

    $insert = mysqli_query($conn, "INSERT INTO maintenance(vehicleid, `date`, `description`, cost) VALUES('$vehicleid', '$date', '$description', '$cost')");

    if ($insert) {
        echo "Maintenance record added successfully";
    } else {
        echo "Failed";
    }
}
?>

<h2>Maintenance Register</h2>
<form action="" method="post">
    Vehicle Id: <input type="text" name="vehicleid"><br>
    Date: <input type="date" name="date"><br>
    Description: <input type="text" name="description"><br>
    Cost: <input type="text" name="cost"><br>
    <button type="submit" name="add">Add New</button>
</form>
