<?php

include_once 'handler.php';

$name = $_POST['name'];
$Email = $_POST['Email'];
$ProductNumber = $_POST['ProductNumber'];
$Instagram = $_POST['Instagram'];
$Facebook = $_POST['Facebook'];
$Phone = $_POST['Phone'];
$PMC = $_POST['PMC'];

$sql = "INSERT INTO `customers` (`Name`, `Email`, `ProductNumber`, `Instagram`, `Fackbook`, `Phone`, `PMC`) 
    VALUES ('$name', '$Email', '$ProductNumber', '$Instagram', '$Facebook', '$Phone', '$PMC');";

// "INSERT INTO `customers` (`name`, `Email`, `ProductNumber`, `Instagram`, `Fackbook`, `Phone`, `PMC`) 
//     VALUES ('PlayerAllDay', 'PlayerAllDay@gmail.com', '12345', 'fjfgh', 'gffg', 'gfn', 'gfnhnvb')"

mysqli_query($conn, $sql);

header("Location: ../HomePage.php?Form=submitted");

?>
