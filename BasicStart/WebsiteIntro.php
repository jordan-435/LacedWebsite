<?php
    include_once 'includes/handler.php';
    include_once 'includes/getDatafile.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="IntroStyleSheet.css">
    <!--<link rel="stylesheet" href="styles.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
    <title>Laced Shoe sell and repair</title> <!-- Consider for SEO -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
</head>


    <body>
    <video autoplay muted loop id="myVideo">
        <source src="Waterfalls - 46620.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="content">
        <div class="inner">
            <section class="Box">
            <div class="Title"> 
                <div> Genuine Harmonious Excellence </div>
                <div class="xTraSpace" ></div>
                <div class="swo" >Services we Offer</div>
            </div>
            <div class="bsrBox">
                <div class="buy ">
                    <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                    <div class="option is-hidden"><h2>Buy</h2> </div>
                    <div class="disc is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ducimu</div>
                </div>
                <div class="sell">
                    <div class="icon"><i class="fas fa-dollar-sign"></i></div>
                    <div class="option is-hidden"><h2>Sell</h2> </div>
                    <div class="disc is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ducimu</div>
                </div>
                <div class="repair">
                    <div class="icon"><i class="fas fa-toolbox"></i></div>
                    <div class="option is-hidden"> <h2>Icon</h2> </div>
                    <div class="disc is-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ducimu</div>
                </div>
            </div>
        </section>
        </div>
    </div>

    
        
        

        <script>
            const buy = document.querySelector('.buy');
            const sell = document.querySelector('.sell');
            const repair = document.querySelector('.repair');


            const show = (slide)=>{
                slide.children[0].classList.add('icons');
                slide.children[1].classList.remove('is-hidden');
                slide.children[2].classList.remove('is-hidden');
            }
            const hide = (slide)=>{
                slide.children[0].classList.remove('icons');
                slide.children[1].classList.add('is-hidden');
                slide.children[2].classList.add('is-hidden');
            }

            const slideFunctionality = (slide)=>{
                slide.addEventListener('mouseover', e=>{show(slide)});
                slide.addEventListener('mouseout', e=>{hide(slide)});
            }

            slideFunctionality(buy);
            slideFunctionality(sell);
            slideFunctionality(repair);

        </script>
    </body>
</html>