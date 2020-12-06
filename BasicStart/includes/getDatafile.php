<?php

function getProduct($table = 'product'){
    $sql = "SELECT * FROM {$table}";
    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "LacedDB";

    $conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

    $result = mysqli_query($conn, $sql);
    $resultArray = array();
     //   Way to get data from database
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            $resultArray[] = $row;
           // echo "Hello ". $row['Name'].". An Email was sent to ". $row['Email'] ;
        }
     }
     return $resultArray;
}

function getImages($val){
    $sql = "SELECT `ImageName` FROM `myimages` WHERE id= $val";
    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "LacedDB";

    $conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

    $result = mysqli_query($conn, $sql);
    $resultArray = array();
    if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result)){
            $resultArray[] = $row;
            print_r($resultArray);
        }
    }

    
        return $resultArray;
   
    
}
?>