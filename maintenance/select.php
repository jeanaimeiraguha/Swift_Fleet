<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Management</title>
</head>
<body>

<div class="container my-4">
    <a href="insert.php" class="btn btn-success mb-4">Add New Maintenance</a>

    <table class="table table-striped table-bordered table-sm">
        <thead class="table-dark">
            <tr>
                <th>Vehicle Id</th>
                <th>Date</th>
                <th>Description</th>
                <th>Cost</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("conn.php");
            $select = mysqli_query($conn, "SELECT * FROM maintenance");
            while ($row = mysqli_fetch_array($select)) {
            ?>
                <tr>
                    <td><?php echo $row['vehicleid']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['cost']; ?></td>
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
