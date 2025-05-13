<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Management</title>
</head>
<body>

<div class="container my-4">
    <a href="insert.php" class="btn btn-success mb-4">Add New Vehicle</a>

    <table class="table table-striped table-bordered table-sm">
        <thead class="table-dark">
            <tr>
                <th>Vehicle Id</th>
                <th>Vehicle Name</th>
                <th>Type</th>
                <th>Registration Number</th>
                <th>Capacity</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("conn.php");
            $select = mysqli_query($conn, "SELECT * FROM vehicle");
            while ($row = mysqli_fetch_array($select)) {
            ?>
                <tr>
                    <td><?php echo $row['vehicleid']; ?></td>
                    <td><?php echo $row['vehiclename']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                    <td><?php echo $row['registrationnumber']; ?></td>
                    <td><?php echo $row['capacity']; ?></td>
                    <td><a href="update.php?vehicleid=<?php echo $row['vehicleid']; ?>" class="btn btn-warning me-2">Edit</a></td>
                    <td><a href="delete.php?vehicleid=<?php echo $row['vehicleid']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
