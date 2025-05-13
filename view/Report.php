<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance and Revenue Report</title>
</head>
<body>
    <div class="container my-4">
        <h2 class="text-center card card-header text-primary">Maintenance Cost & Revenue Report</h2>
        
        <table class="table table-sm table-bordered table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th>Vehicle ID</th>
                    <th>Maintenance Cost</th>
                    <th>Trip Revenue</th>
                    <th>Total Maintenance Cost</th>
                    <th>Total Trip Revenue</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conn.php");

                $totalcost_query = mysqli_query($conn, "SELECT SUM(cost) AS total_cost FROM maintenance");
                $totalcost_row = mysqli_fetch_assoc($totalcost_query);

                $totalrevenue_query = mysqli_query($conn, "SELECT SUM(revenue) AS total_revenue FROM trip");
                $totalrevenue_row = mysqli_fetch_assoc($totalrevenue_query);

                $select = mysqli_query($conn, "SELECT maintenance.vehicleid, maintenance.cost, trip.revenue 
                                               FROM maintenance JOIN trip ON trip.vehicleid = maintenance.vehicleid");

                while ($row = mysqli_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $row['vehicleid']; ?></td>
                    <td><?php echo number_format($row['cost'], 2); ?></td>
                    <td><?php echo number_format($row['revenue'], 2); ?></td>
                    <td><?php echo number_format($totalcost_row['total_cost'], 2); ?></td>
                    <td><?php echo number_format($totalrevenue_row['total_revenue'], 2); ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
