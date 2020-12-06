<?php 
    include "handler.php";
  //  $FolderName = $_POST['FolderName'];
    $identificationNumber = $_POST['identificationNumber'];


    $sql = "SELECT ImageName FROM myimages where id = $identificationNumber";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){ $j=1;
      while($row = mysqli_fetch_assoc($result)){
    ?>
        <div class="column">
            <img class="demo cursor" src="includes/<?php echo $row['ImageName'] ?>" style="width:100%; object-fit: contain; height: 280px;" onclick="currentSlide($j)" alt="Nature and sunrise">
        </div>
    <?php 
      $j++;}
      }
      
?> 