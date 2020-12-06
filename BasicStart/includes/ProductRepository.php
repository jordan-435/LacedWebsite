<?php


include_once 'handler.php';

$Pname = $_POST['Pname'];
$Ssize = $_POST['Ssize'];
$Price = $_POST['Price'];
$ShortDisc = $_POST['ShortDisc'];

if (isset($_POST['Upload'])){

    $file = $_FILES['file'];
    $fileCount = count($_FILES['file']['name']);

    // $fileName = $file['name'][0];
    // $fileExt = explode('.',$fileName);5fbeb229a03b54.21252857
    // $fileActualExt = strtolower(end($fileExt));
    // $fileNameNew = uniqid('',true).".".$fileActualExt;





    $fileName = $file['name'][0];
    $fileTmp = $file['tmp_name'][0];
    $fileSize = $file['size'][0];
    $fileError = $file['error'][0];
    $fileType = $file['type'][0];
    
    
    $fileName = $file['name'][0];
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;  
               if (!file_exists("uploads/".$Pname)){
                    mkdir("uploads/".$Pname);
                }
                
                $fileDestination = 'uploads/'.$Pname.'/'.$fileNameNew;
                
                move_uploaded_file($fileTmp,$fileDestination);
                

                print_r($fileNameNew);

                mysqli_query($conn,"INSERT INTO `product` (`ProductName`, `Size`, `Price`, `ShortDiscription`,`ImageName`) 
                                        VALUES ('$Pname', '$Ssize', '$Price', '$ShortDisc','$fileNameNew');");
            
                $uniqey = mysqli_query($conn,"SELECT `ProductNumber` FROM product WHERE 
                                        `ProductNumber`=(SELECT max(`ProductNumber`) FROM product);");
            
                 $row = mysqli_fetch_assoc($uniqey);
            
                 $your_var = $row['ProductNumber'];
            
            echo "Test!!!!!!!!!!!!!!!!!!!".$your_var;


                echo nl2br(
                    "
                    Upload succedd!!                
                    Name: ". $Pname . "
                    Size:". $Ssize ."
                    Price:". $Price."
                    Short Discription:".$ShortDisc."
                    File Name:".$fileDestination."
    
                    ");
    
    
                    $sqll = "INSERT INTO `myimages` (`id`,`ImageName`) VALUES ('$your_var','$fileDestination');";
    
                    mysqli_query($conn, $sqll);
    
            }else{echo "File is too Large!!"; return;}
        }else{echo "an error has occured"; return;}
    }else{echo "You cannot Upload this type of File"; return;}
    












    for ($i = 1; $i < $fileCount; $i++) {
        
    $fileName = $file['name'][$i];
    $fileTmp = $file['tmp_name'][$i];
    $fileSize = $file['size'][$i];
    $fileError = $file['error'][$i];
    $fileType = $file['type'][$i];


    $fileName = $file['name'][$i];
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;  
               if (!file_exists("uploads/".$Pname)){
                    mkdir("uploads/".$Pname);
                }
                
                $fileDestination = 'uploads/'.$Pname.'/'.$fileNameNew;
                
                move_uploaded_file($fileTmp,$fileDestination);

                echo nl2br(
                    "
                    Upload succedd!!                
                    Name: ". $Pname . "
                    Size:". $Ssize ."
                    Price:". $Price."
                    Short Discription:".$ShortDisc."
                    File Name:".$fileDestination."

                    ");


                    $sqll = "INSERT INTO `myimages` (`id`,`ImageName`) VALUES ('$your_var','$fileDestination');";

                    mysqli_query($conn, $sqll);

                    }else{
                        echo "File is too Large!!";
                        return;
                    }
                }else{
                    echo "an error has occured";
                    return;
                }
            }else{
                echo "You cannot Upload this type of File";
                return;
            }
        }
    }








