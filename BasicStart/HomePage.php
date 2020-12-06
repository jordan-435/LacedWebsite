<?php
    include_once 'includes/handler.php';
    include_once 'includes/getDatafile.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleSheet.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
    <title>Laced Shoe sell and repair</title> <!-- Consider for SEO -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
</head>
<body>

  <!-- Website Introduction -->
<section class="IntroToWebsite">
    <h1>Hello World</h1><!-- Consider for SEO -->
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Aut deserunt, eaque sequi, temporibus odit sed ut minima alias 
        quibusdam, omnis delectus. Aperiam, ipsum accusamus nulla sed quia 
        iure molestias ducimus.
    </p><!-- Consider for SEO -->
</section>

<!-- Product for mobile users -->
<div class="carousel">
    <div class="carousel_track-container">
      <ul class="carousel_track">
        <li class="carousel_slide current-slide">
        <img class="carousel_images " src="imageCarousel/beautiful-sunset-images-196063.jpg" alt="Get Laced Logo" >
        </li>
        <li class="carousel_slide">
        <img class="carousel_images" src="imageCarousel/zombie.png" alt="Get Laced Logo" >
        </li>
        <li class="carousel_slide">
        <img class="carousel_images" src="imageCarousel/Git-Cheat-Sheet-pdf-v2.png" alt="Get Laced Logo" >
        </li>
      </ul>
    </div>

    <button class="carousel_button carousel_button--left is-hidden is-hidden"><i class="fas fa-angle-left"></i></button>
    <button class="carousel_button carousel_button--right"><i class="fas fa-angle-right"></i></button>

    <div class="carousel_nav">
      <button class="carousel_indicator current-slide"></button>
      <button class="carousel_indicator"></button>
      <button class="carousel_indicator"></button>
    </div>
  </div>
  <div style="height:30px;"></div>

<script src="javascript/Carousel.js"></script>

<div style="height:100px;"></div>

<!-- Shoe Collection Slide -->
<h2 style="text-align:center">Shoe Collection</h2>
<div class="regular slider">
  <?php $product_shuffle = getProduct(); $i = 1; $currectSlide;  foreach($product_shuffle as $item) {?>
    <div class="hover-shadow cursor" style="padding:10px">
      <img src="includes/uploads/<?php echo $item['ProductName']?>/<?php echo $item['ImageName']??"LacedLogo.png" ?>" alt="Get Laced Shoe 1" onclick="openModal(<?php echo $item['ProductNumber'] ?>);currentSlide(1);" >
      <div class="Title"><?php echo $item['ProductName']??"Product Unknown" ?></div>
      <div class="shortDisctiption"><?php echo $item['ShortDiscription']??"Product Unknown" ?></div>
      <div class="priceTag"><div>ID Number:</div><div class="price"><?php echo $item['ProductNumber']??"Product Unknown" ?></div></div>
      <div class="priceTag"><div>Price:</div><div class="price"> <?php echo $item['Price']??"Product Unknown" ?></div></div>
      <div class="priceTag"><div>Size:</div><div class="price"> <?php echo $item['Size']??"Product Unknown" ?></div></div>
      <div class="viewButton" ><button class="button1" onclick='openCustomerForm(<?php echo $item["ProductNumber"]?>)'>Contact</button></div> 
    </div>
  <?php $i++;}?>
</div>
<!-- On Shoe Collection Image Click -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
  <div id= "slides" >
    <div class="mySlides">
          <div class="numbertext"> </div>
          <img >
    </div>
  </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div id="myModalslide" style="padding-left: 16%;">
      <div class="column">
        <img class="demo cursor" >
      </div>
    </div>
  </div>
</div>
<!-- Display Model Functions -->
<script>

    function openCustomerForm(productN){
      console.log(productN);
      document.getElementById("CustomerForm").style.display = "block";
      document.forms["CustomerFill"]["ProductNumber"].value = productN;
    }
    // Open the Modal
    function openModal(idNumber) {
      document.getElementById("myModal").style.display = "block";
      // Function for Displaying Current slide
        $(document).ready(function(){
          $("#slides").load("includes/imagesPHP.php",{
            identificationNumber : idNumber
          });
        });
      // Function for Displaying slide options
        $(document).ready(function(){
          $("#myModalslide").load("includes/imagesPHPslides.php",{
            identificationNumber : idNumber
          });
        });
      
    }
    
    // Close the Modal
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }
    
    var slideIndex = 1;
    showSlides(slideIndex);
    
    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }

    </script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">

//   @media screen and (max-width: 600px){}
    function checkScreenSize(size){
      console.log("Changed Here!!!");
      var numOfSlides;
      if (size.matches){
        
        numOfSlides = 2;
        console.log(numOfSlides);
        $(document).on('ready', function() {
        $(".regular").slick({
          dots: true,
          infinite: true,
          slidesToShow: numOfSlides,
          slidesToScroll: numOfSlides
        });
      });
        
      }else{
        
        numOfSlides = 4;
        console.log(numOfSlides);
        $(document).on('ready', function() {
        $(".regular").slick({
          dots: true,
          infinite: true,
          slidesToShow: numOfSlides,
          slidesToScroll: numOfSlides
        });
      });
      }
    }
    var screenSize = window.matchMedia("(max-width: 600px)");
    checkScreenSize(screenSize)
    screenSize.addListener(checkScreenSize)
</script>

<div style="height: 300px;"></div>


<div style="height: 100px;"></div>

<section>
  <img src="Webp.net-resizeimage.png" alt="Get Laced Logo" style=" width:100%; height:auto;">
</section>

<div style="height: 100px;"></div>

<!-- Giant Logo -->
<section>
  <!-- <img src="websiteImages/BigLacedLogo.png" alt="Get Laced Logo" style=" position:absolute; top:935px; left:-58px; width:111%; height:auto;"> -->
  <img src="Webp.net-resizeimage.png" alt="Get Laced Logo" style=" width:100%; height:auto;">
  
</section>




<div style="height: 400px;"></div>


<!-- Customer Form  -->
<div id="CustomerForm" >
  <h3>Customer's Form</h3>
  <form name="CustomerFill" action="includes/CustomerService.php" method="POST" onsubmit="return CustomerValidate()">
      <label for="Name">Name:</label><input type="text" id="Name" name="name"><br>
      <label for="Email">E-Mail:</label><input type="text" id="Email" name="Email"><br>

      <label for="PMC">Preferred method of Contact:</label>
      <select name="PMC" id="PMC">
          <option value="Phone">Phone</option>
          <option value="Instagram">Instagram</option>
          <option value="Twitter">Twitter</option>
          <option value="Facebook">Facebook</option>
      </select>
      <div class="phone"><label for="Phone">Phone Number:</label><input type="text" id="Phone" name="Phone"></div>
      <div class="instagram"><label for="Instagram">Instagram:</label><input type="text" id="Instagram" name="Instagram"></div>
      <div class="twitter"><label for="Twitter">Twitter:</label><input type="text" id="Twitter" name="Twitter"></div>
      <div class="facebook"><label for="Facebook">Facebook:</label><input type="text" id="Facebook" name="Facebook"></div>
      <input type="submit" value="Submit">
      <label for="ProductNumber"></label><input type="hidden" id="ProductNumber" name="ProductNumber"><br>
  </form>
</div>
  <div style="height: 100px;"></div>
  <!-- Customer Form Stuff -->
  <script>
      window.onload=function(){
          document.getElementById("PMC").addEventListener("click", MakeSelection);
          document.getElementById("getCustomers").addEventListener("click", getUsers);
          document.getElementById("hideCustomers").addEventListener("click", hideUsers);

    }
    function MakeSelection(){
      console.log("inside Make Selection Function")
      if (PMC.value == 'Phone'){
          document.getElementsByClassName("phone")[0].style.display = "block";
          document.getElementsByClassName("instagram")[0].style.display = "none";
          document.getElementsByClassName("twitter")[0].style.display = "none";
          document.getElementsByClassName("facebook")[0].style.display = "none";
          }else if (PMC.value == 'Instagram'){
              document.getElementsByClassName("instagram")[0].style.display = "block";
              document.getElementsByClassName("phone")[0].style.display = "none";
              document.getElementsByClassName("twitter")[0].style.display = "none";
              document.getElementsByClassName("facebook")[0].style.display = "none";
          }else if (PMC.value == 'Twitter'){
              document.getElementsByClassName("twitter")[0].style.display = "block";
              document.getElementsByClassName("phone")[0].style.display = "none";
              document.getElementsByClassName("instagram")[0].style.display = "none";
              document.getElementsByClassName("facebook")[0].style.display = "none";
          }else if (PMC.value == 'Facebook'){
              document.getElementsByClassName("facebook")[0].style.display = "block";
              document.getElementsByClassName("phone")[0].style.display = "none";
              document.getElementsByClassName("instagram")[0].style.display = "none";
              document.getElementsByClassName("twitter")[0].style.display = "none";
        }
      }
    
    function getUsers(){
      fetch('includes/retriveCustomers.php',{method:'get'}).then(function(response){
        if(response.status >= 200 && response.status < 300){
          
          return response.text();
          
        // return response.text();
        }
        throw new Error(response.statusText);
      })
      .then(function(response){
        document.getElementById("users").innerHTML = response;
        
      })
      document.getElementById("users").style.display = "block";
    }

    function hideUsers(){
      document.getElementById("users").style.display = "none";
    }
          

    


      function CustomerValidate(){
          
          if (name.value == ''){
              alert('please enter name!!');
              return false;
          }
          if (Email.value == ''){
              alert('please enter your E-mail Address!!');
              return false;
          }
          if (ProductNumber.value == ''){
              alert('please enter your ProductNumber Address!!');
              return false;
          }
          if (PMC.value == ''){
              alert('please choose a Contact method!!');
              return false;
          }
          if (Phone.value == '' && Instagram.value == '' && Twitter.value == '' && Facebook.value == '' ){
              alert('Fill out contact method');
              return false;
          }
      }


      function ProductValidate(){

          if (Pname.value == ''){
              alert('Product must have name!');
              return false;
          }
          if (Ssize.value == ''  ){
              alert('Product must have Size type!');
              return false;
          }
          console.log(typeof Ssize.value);
          if (Price.value == ''){
              alert('Product must a Price!');
              return false;
          }
          if (ShortDisc.value == ''){
              alert('Create a discription!');
              return false;
          }
          if (file.value == ''){
              alert('Must place at least 3 images');
              return false;
          }
      }

  </script>


  <!-- Notify Customeran Email has been sent -->
  <?php 
    $sql = "SELECT * FROM `customers` ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);

    //      Way to get data from database
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
          // echo "Hello ". $row['Name'].". An Email was sent to ". $row['Email'] ;
          }
      }
  ?>


  <!-- Owners Product Form -->
  <h3>Owner's Product Form</h3>
  <form action="includes/ProductRepository.php" method="POST" enctype="multipart/form-data" onsubmit="return ProductValidate()">
      <label for="ProductName">Shoe Name:</label><input type="text" id="Pname" name="Pname"><br>
      <label for="ShoeSize">Shoe Size:</label><input type="text" id = "Ssize" name="Ssize"><br>
      <label for="Price">Price:</label><input type="text" id="Price" name="Price"><br>
      <label for="ShortDiscription">Short Discription:</label><input type="text" id="ShortDisc" name="ShortDisc"><br>
      <input type="file" id="file" name="file[]" multiple />
      <input type="submit" name = "Upload" value="Upload">
  </form>



  <!-- Show Customers -->
  <button id="getCustomers">Show Customers</button>
  <button id="hideCustomers">Hide Customers</button>
  <div id='users'>
  </div>
  <div style="height:100px;"></div>
</body>


<!-- Nav menu -->
<nav>
    <div> </div>
    <button type="button" style="flex:1;">Buy</button>
    <button type="button" style="flex:1;">Sell</button>
    <button type="button" style="flex:1;">Fix</button>
    <div> </div>
    <div> </div>
    <button type="button" style="flex:1;">Men</button>
    <button type="button" style="flex:1;">Women</button>
    <div> </div>
    <button type="button" style="flex:1;">Cart</button>
</nav>

<footer>
    Contact Information: <br>
    Instagram:<br>
    Twitter:<br>
    E-Mail:<br>
</footer>
</html>