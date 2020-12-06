<?php
    include_once 'includes/handler.php';
    include_once 'includes/getDatafile.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="StyleSheet.css">
    <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
    <title>Laced Shoe sell and repair</title> <!-- Consider for SEO -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
</head>
<style>
    body{
        height: 1000px;
        position: relative;
        border: 15px solid black;
        margin:0px;

    }
    body:before{
        content: " ";
        position: absolute;
        z-index: -1;
        top: 5px;
        left: 5px;
        right: 5px;
        bottom: 5px;
        border: 5px solid black;
    }

    nav{
        display: flex;
        padding-top:10px;
        color: burlywood;
        position: absolute;
        top:10px;
        right:20px;
        width: 100%;
    }
    nav > div{
        width: 13%;
        margin: 20px;
    }
    nav > button{
        background-color: transparent;
        border: none;
    }
    nav > button:hover{
        background-color: rgb(35,87,137,0.53);
        border: none;
        border-radius: 42px;
    }
</style>
<body>
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
  
</body>

</html>