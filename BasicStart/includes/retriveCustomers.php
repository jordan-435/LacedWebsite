<?php 

$sql = "SELECT * FROM `customers`";
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "LacedDB";

$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

$result = mysqli_query($conn, $sql);



echo '<h3>All customers</h3>';
echo '<table>';
echo '<tr>';
echo '  <th>Name </th>';
echo '  <th>Product ID </th>';
echo '  <th>Email </th>';
echo '  <th>Prefered Method of Contact </th>';
echo '  <th>PMC Value</th>';
echo '</tr>';  
while ($Row = mysqli_fetch_assoc($result)) {
    echo '<tr><td>' . $Row['Name'] . '</td><td>' . $Row['ProductNumber'] . '</td><td>' . $Row['Email']  . '</td><td>' .$Row['PMC']  . '</td><td>' . $Row['Phone'] . '</td></tr>';
}
echo '</table>';

?>



