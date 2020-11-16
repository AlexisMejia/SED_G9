<?php
include("../php/lock.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/indexStyle.css" rel="stylesheet" type="text/css">
    <title>Principal View</title>
</head>
<?php 
include("../php/db_cnt.php"); 
?>

<body>
    <a href="createForm.php">
        <input type="button" name="save" value="Create" />
    </a>
    <a href="../php/bye.php">
        <input type="button" name="save" value="Salir" />
    </a>
    <table id="airportID" width="100%">
        <thead>
            <tr>
                <th id="title">Passport</th>
                <th id="title">Name</th>
                <th id="title">Age</th>
                <th id="title">Citizen</th>
                <th id="title">Phone number</th>
                <th id="title">Country from</th>
                <th id="title">Country to</th>
                <th id="title">Date</th>
                <th id="title">Flight time</th>
                <th id="title">Seat</th>
                <th id="title">Price</th>
                <th id="title">Class</th>
                <th id="title">Action</th>
            </tr>
        </thead>
        <thbody>
            <?php
        $query = "SELECT * FROM form2";
        $result_tasks = mysqli_query($conex, $query);    
        while($row = mysqli_fetch_assoc($result_tasks)) { ?>
            <tr align="center">
                <td class="info"><?php echo $row['passp_user']; ?></td>
                <td class="info"><?php echo $row['name_user']; ?></td>
                <td class="info"><?php echo $row['age_user']; ?></td>
                <td class="info"><?php echo $row['citi_user']; ?></td>
                <td class="info"><?php echo $row['phone_user']; ?></td>
                <td class="info"><?php echo $row['pais_origen']; ?></td>
                <td class="info"><?php echo $row['pais_llegada']; ?></td>
                <td class="info"><?php echo $row['fecha_reg']; ?></td>
                <td class="info"><?php echo $row['hora_vuelo']; ?></td>
                <td class="info"><?php echo $row['asiento']; ?></td>
                <td class="info"><?php echo $row['precio']; ?></td>
                <td class="info"><?php echo $row['clase']; ?></td>
                <td class="info">
                    <a href="../php/edit.php?id=<?php echo $row['id']?>">
                        <input type="submit" name="edit" value="Edit" />
                    </a>
                    <a href="../php/delete.php?id=<?php echo $row['id']?>">
                        <input type="submit" name="delete" value="Delete" />
                    </a>
                </td>
            </tr>
            <?php } ?>
        </thbody>
    </table>
</body>

</html>