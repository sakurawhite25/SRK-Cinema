<!DOCTYPE html>
<html>
<head>
    <title>About us</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <link rel="stylesheet" href="header/header.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <header>
        <a href="#" class="logo">SRK</a>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Movie</a></li>
            <li><a href="#">Food & Baverage</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </header>
     <div class="heading">
     <h1>About Us</h1>
     <p>Pop corn is a beloved beverage enjoyed by millions worldside for flavor</p>
     </div>
     <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="images/1.jpg">
            </div>
            <div class="about-content">
                <h2>Cinema Onilne is the brainchild of two enterprising individuls  who have a dream of revolutionizing the Malaysian movie scene.</h2>
                <p>In this website you will find all the latest happenings of movies, be they local or international. News, previews, and contests are amongst its highlights. All this from the humble beginnings of Cinema Showtimes</p>
                <a href=""class="read-more">Read More</a>
            </div>
    <section class="banner"></section>
    <script type="text/javascript">
        window.addEventListener("scroll",function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky",window.scrollY >0)
        })
    </script>
    </body>
    </html>