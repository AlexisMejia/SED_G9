<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal View</title>
</head>
<?php include("../php/db_cnt.php"); ?>
<body>
    <table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Passport</th>
            <th>Name</th>
            <th>Age</th>
            <th>Citizen</th>
            <th>Phone number</th>
            <th>Country from</th>
            <th>Country to</th>
            <th>Date</th>
            <th>Flight time</th>
            <th>Seat</th>
            <th>Price</th>
            <th>Class</th>
        </tr>
    </thead>
    <thbody>
    <?php
        $query = "SELECT * FROM form2";
        $result_tasks = mysqli_query($conex, $query);    
        while($row = mysqli_fetch_assoc($result_tasks)) { ?>
        <tr>
        <td><?php echo $row['idVuelo']; ?></td>
        <td><?php echo $row['passp_user']; ?></td>
        <td><?php echo $row['name_user']; ?></td>
        <td><?php echo $row['age_user']; ?><td>
        <td><?php echo $row['citi_user']; ?></td>
        <td><?php echo $row['phone_user']; ?></td>
        <td><?php echo $row['pais_origen']; ?></td>
        <td><?php echo $row['pais_llegada']; ?></td>
        <td><?php echo $row['fecha_reg']; ?></td>
        <td><?php echo $row['hora_vuelo']; ?></tdtype=>
        <td><?php echo $row['asiento']; ?></td>
        <td><?php echo $row['precio']; ?></td>
        <td><?php echo $row['clase']; ?></td>
        </tr>
        <?php } ?>
    </thbody>
    </table>
</body>
</html>