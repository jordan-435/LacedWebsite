<?php 
    include "handler.php";
  //  $FolderName = $_POST['FolderName'];
    $identificationNumber = $_POST['identificationNumber'];


    $sql = "SELECT ImageName FROM myimages where id = $identificationNumber";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){ $j=1;
      while($row = mysqli_fetch_assoc($result)){
    ?>
        <div class="mySlides">
          <div class="numbertext"> <?php echo $j ?> / 4</div>
          <img src="includes/<?php echo $row['ImageName'] ?>" style="width:100%; object-fit: contain; width: 40%; height: 425px;">
        </div>
    <?php 
      $j++;}
      }
      
?> 