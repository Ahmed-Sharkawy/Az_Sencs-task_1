<?php 
session_start();
include "templates/header.php";

// التاكد من تسجيل السيشن

if (isset($_SESSION['username'])) {


$stmt = " SELECT * FROM orders ";
$result = $mysqli->query($stmt);

?>

<table class="table table-bordered table-dark">
    <thead>
        <tr>
            <th>#</th>
            <th>order_name</th>
            <th>phone</th>
            <th>number_orders</th>
            <th>city</th>
        </tr>
    </thead>
    <tbody>
        
        <!-- الجزء الخاص ب عرض البيانات -->

        <?php if ($result->num_rows > 0) { ?>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <th><?php echo $row['order_id']; ?></th>
                    <td><?php echo $row['order_name']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['number_orders']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                </tr>
            <?php } ?>
        <?php } ?>

    </tbody>
</table>
<?php

    } else {
        header('location:Account.php');
        exit();
    }
include "templates/footr.php";

?>