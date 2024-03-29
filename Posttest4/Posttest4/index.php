<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="logo.png">
    <title>Posttest 4 Pemrograman WEB</title>
    <link rel="stylesheet" href="style.css?v2" />
</head>
<body>
    <div class="container"></div>

    <header id = "">
        <img src = "lightmode.png" id = "icon" align = "right">
        <img src = "logo.png" width  = 140px height = 100px align = "left"> 
        <h1 align = "center"><strong>T H E  C'M Zy   R E S T A U R A N T</strong></h1>
    </header>

    <nav>
        <div class = "box-nav" align = "center"> 
        <ul class = "button-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="#">MENUS</a></li>
            <li><a href="our-service.php">OUR SERVICES</a></li>
            <li><a href="#">PROMO</a></li>
            <li><a href="aboutme.php">ABOUT ME</a></li>
            <li><a href="#">CONTACT US</a></li>
        </ul>
        </div>
    </nav>

    <div  align = "center">
        <h2>WELCOME TO THE C'MZy RESTAURANT!</h2>
        <mark class = "hightlight">~~😋😋😋~~</mark><br>
        <mark class = "hightlight">DELICIOUS FOOD COLLECTION</mark><br>
        <mark class = "hightlight">Our delicacies will keep you craving more</mark> <br>
        <mark class = "hightlight">We bring you all that you can dream of</mark><br>
        <mark class = "hightlight">Come in with expectations. Leave a lot more</mark><br>
    </div>

    <div>
        <h3 align = "center"><strong>TODAY'S SPECIAL</strong></h2>
    </div>

    <div class = "parent-konten-1"  align ="center">
        <div>
            <img id = "konten1-1" src = "dessert1.jpg" onclick="bannerHotel()">
            <a><br>
                <mark class = "hightlight"><i> Rp. 125.000,- </i></mark>
            </a>
        </div>
        
        <div>
            <img id = "konten1-2" src = "main-course6.jpg">
            <a><br>
                <mark class = "hightlight"><i> Rp. 170.000,- </i></mark>
            </a>
        </div>

        <div>
            <br><br>
            <mark class = "hightlight-1">WAKE UP EARLY,</mark> <br>
            <mark class = "hightlight-1">EAT FRESH &  HEALTHY</mark><br><br><br>
            <mark class = "hightlight-1">food is really and truly</mark><br>
            <mark class = "hightlight-1">the most effective medicine</mark><br><br><br>
        </div>

        <div>
            <img id = "konten1-3" src = "beverage2.jpg">
            <a><br>
                <mark class = "hightlight"><i> Rp. 200.000,- </i></mark>
        </div>
    </div>

    <div>
        <h3 align = "center"><strong>GALLERY C'MZy RESTAURANT</strong></h2>
    </div>

    <div class = "parent-konten-2"  align ="center" id = "box-konten1">
        <div id = "konten-none"></div>
        <div class = "button"><a href="#">ORDERS</a></div>
        <div class = "button"><a href="#">VIEW OUR MENU</a></div>
        <div id = "konten-none"></div>

        <div>
            <img id = "konten2-1" src = "">
            <a><br>
                <mark class = "hightlight">Blueberry Thyme Gin Fizz</mark><br>
            </a>
        </div>

        <div>
            <img id = "konten2-2" src = "">
            <a><br>
                <mark class = "hightlight">Whole Lemon Roasted Chicken</mark><br>
            </a>
        </div>

        <div>
            <img id = "konten2-3" src = "">
            <a><br>
                <mark class = "hightlight">Sushi</mark><br>
            </a>
        </div>
    </div>

    <div>
        <h3 align = "center"><strong>OUR CHEF C'MZy RESTAURANT</strong></h2>
    </div>

    <div class = "parent-konten-3"  align ="center" id = "box-konten2">
        <div>
            <img id = "konten3-1" src = "chef1.jpg">
        </div>

        <div>
            <img id = "konten3" src = "chef2.jpg">
        </div>

        <div>
            <img id = "konten3-2" src = "chef3.jpg">
        </div>

        <div>
            <img id = "konten3-3" src = "chef4.jpg">
        </div>

        <div id = "konten-none"></div>
    </div>

    <div class = "border-reserv" align = "right">
        <div>
            <br><br><br><br>
          RESERVE YOUR TABLE NOW!!!
            <div class = "button-reserv" ><a href="#" id = "myBtn">BOOKING NOW</a></div>
        </div>

        <div class = logo>
            <a href = "https://instagram.com/chmrsss_?igshid=YmMyMTA2M2Y="><img id = "icon1" src = "logo-ig.png" width = 40px height = 40px></a><br>
            <a href = "mailto:chimaa1204@gmail.com"><img id = "icon2" src = "email.png" width = 40px height = 40px></a><br>
            <a href = "http://wa.me//6285281877461"><img id = "icon3" src = "logo-wa.png" width = 40px height = 40px></a><br>
        </div>
    </div>

    <footer align="center">
        <p>Chimaa Owner The C'MZy RESTAURANT<br>
            Copyright &copy; 2022
        </p>
    </footer>
    <script src = "js-home.js"></script>
</body>
</html>