<<!DOCTYPE html>
<html>
<head>
    <title>Monalisa Restuarant</title>
    <link rel="icon" type="image/jpg" href="images/a.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./public/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./public/vendors/bootstrap/css/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="./public/vendors/bootstrap/css/default.css">
    <link rel="stylesheet" type="text/css" href="./public/vendors/bootstrap/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="./public/vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
    <style>
        body {

            box-sizing: border-box;
        }

        .row > .column {
            padding: 0 8px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .column {
            float: left;
            width: 25%;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: black;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 50%;
            max-width: 1200px;
        }

        /* The Close Button */
        .close {
            color: white;
            position: absolute;
            top: 80px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        .mySlides {
            display: none;
        }

        .cursor {
            cursor: pointer
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        img {
            margin-bottom: -4px;
        }

        .caption-container {
            text-align: center;
            background-color: black;
            padding: 2px 16px;
            color: white;
        }

        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

        img.hover-shadow {
            transition: 0.3s
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
        }
    </style>
</head>
<body>

<!-- preloader section -->
<section class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->

<section class="navbar navbar-default navbar-fixed-top" role="navigation"   style="background-color:#17202A  ;">
    <div class="container" >
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <b style="color:#FF9F39">®</b>
            <a href="index.php" class="navbar-brand" class="navbar"><span class="glyphicon glyphicon-cutlery" style="color:#FF9F39"></span>
                <b style="color:#FF9F39" >MONALISA RESTAURANT</b></a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav  navbar-right nav nav-pills">
                <li><a href="index.php" class="smoothScroll"><b>HOME</b></a></li>
                <li><a href="ourservice.php" class="smoothScroll"><b>OUR SERVICE</b></a></li>
                <!--  <li><a href="menu.html" class="smoothScroll"><b>MENU</b></a></li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>MENU</b><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="breakfast.php">Breakfast</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="lunch.php">Lunch</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="dinner.php">Dinner</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="Drink.php">Drink</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="desesert.php">Dessert</a></li>
                    </ul>
                </li>
                <li><a href="promotion.php" class="smoothScroll"><b>PROMOTION</b></a></li>
                <li class="active"><a href="gallery.php" class="smoothScroll"><b>GALLERY</b></a></li>
                <li><a href="aboutus.php" class="smoothScroll"><b>ABOUT US</b></a></li>
                <li><a href="contactus.php" class="smoothScroll"><b>CONTACT US</b></a></li>
            </ul>
        </div>
    </div>
</section>

</br>
</br>
</br>


<div class="container">
    <br>
    <center>
        <h1><span class="topwriter">GALLERY</span></h1>
    </center>
</div>
<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/menu1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/menu2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom:10px ">
        <img src="images/menu3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/5.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/24.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/25.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/26.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/27.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/2.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/6.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/7.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/9.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/28.jpg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/11.jpg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/12.jpg" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/28.jpg" style="width:100%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/footer10.jpg" style="width:100%" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/footer9.jpg" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/footer6.jpg" style="width:100%" onclick="openModal();currentSlide(19)" class="hover-shadow cursor">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img src="images/18.jpg" style="width:100%" onclick="openModal();currentSlide(20)" class="hover-shadow cursor">
    </div>
</div>

<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <div class="mySlides">
            <div class="numbertext">1 / 20</div>
            <img src="images/menu1.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 20</div>
            <img src="images/menu2.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 20</div>
            <img src="images/menu3.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">4 / 20</div>
            <img src="images/5.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 20</div>
            <img src="images/24.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">6 / 20</div>
            <img src="images/25.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">7 / 20</div>
            <img src="images/26.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">8 / 20</div>
            <img src="images/27.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">9 / 20</div>
            <img src="images/2.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">10 /20</div>
            <img src="images/6.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">11 / 20</div>
            <img src="images/7.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">12 /20</div>
            <img src="images/9.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">13 /20</div>
            <img src="images/28.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">14 / 20</div>
            <img src="images/11.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">15 / 20</div>
            <img src="images/12.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">16 / 20</div>
            <img src="images/28.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">17 / 20</div>
            <img src="images/footer10.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">18 / 20</div>
            <img src="images/footer9.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">19 / 20</div>
            <img src="images/footer6.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext"> 20/ 20</div>
            <img src="images/18.jpg" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <div class="caption-container">
        <p id="caption"></p>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/menu1.jpg" style="width:50%" onclick="currentSlide(1)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/menu2.jpg" style="width:50%" onclick="currentSlide(2)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/menu3.jpg" style="width:50%" onclick="currentSlide(3)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/5.jpg" style="width:50% " onclick="currentSlide(4)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/24.jpg" style="width:50%" onclick="currentSlide(5)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 5px">
        <img class="demo cursor" src="images/25.jpg" style="width:50%" onclick="currentSlide(6)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/26.jpg" style="width:50%" onclick="currentSlide(7)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/27.jpg" style="width:50%" onclick="currentSlide(8)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/2.jpg" style="width:50%" onclick="currentSlide(9)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/6.jpg" style="width:50% " onclick="currentSlide(10)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/7.jpg" style="width:50%" onclick="currentSlide(11)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/9.jpg" style="width:50%" onclick="currentSlide(12)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/28.jpg" style="width:50%" onclick="currentSlide(13)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/11.jpg" style="width:50%" onclick="currentSlide(14)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/12.jpg" style="width:50%" onclick="currentSlide(15)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/28.jpg" style="width:50%" onclick="currentSlide(16)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/footer10.jpg" style="width:50% " onclick="currentSlide(17)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/footer9.jpg" style="width:50%" onclick="currentSlide(18)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/footer6.jpg" style="width:50%" onclick="currentSlide(19)">
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-bottom: 10px">
        <img class="demo cursor" src="images/18.jpg" style="width:50%" onclick="currentSlide(20)">
    </div>
</div>
</div>

<script>
    function openModal() {
        document.getElementById('myModal').style.display = "block";
    }

    function closeModal() {
        document.getElementById('myModal').style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

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
<footer class="parallax-section" id="footer4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                <h2 class="heading">Contact Info.</h2>
                <div class="ph">
                    <p><i class="fa fa-phone"></i> Phone</p>
                    <h4>+855 (0)15 814 888</h4>
                </div>

                <div class="em">
                    <p><i class="fa fa-envelope"></i>Email</p>
                    <h4>monalisa-restuarant@gmail.com</h4>
                </div>

                <div class="address">
                    <p><i class="fa fa-map-marker"></i> Our Location</p>
                    <h5>No.136 Preah Sisowath Blvd, Phnom Penh, Cambodia</h5>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                <h2 class="heading">Open Hours</h2>
                <p>Sunday <span>7:30 AM - 10:00 PM</span></p>
                <p>Mon-Fri <span>6:00 AM - 10:00 PM</span></p>
                <p>Saturday <span>6:30 AM - 10:00 PM</span></p>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                <h2 class="heading">Monalisa Restuarant</h2>
                <ul class="social-icon">
                    <li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
                    <li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
                    <li><a href="#" class="fa fa-instagram wow bounceIn" data-wow-delay="0.9s"></a></li>
                    <li><a href="#" class="fa fa-tripadvisor wow bounceIn" data-wow-delay="0.11s"></a></li>
                    <li><a href="#" class="fa fa-linkedin  wow bounceIn" data-wow-delay="0.11s"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- copyright section -->
<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3> MONALISA</h3>
                <p>Copyright © Monalisa Restaurant
                    | Powered by: <a rel="nofollow" href="http://www.itc.edu.kh" target="_parent">GICer</a></p>
                <!--Back to top -->
                <span id="top-link" data-spy="affix">
                     <a class="buttontop" href="#top" class="well well-sm">Back to Top</a>
               </span>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="public/vendors/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="public/vendors/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/vendors/bootstrap/js/wow.min.js"></script>
<script type="text/javascript" src="public/vendors/bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="public/vendors/bootstrap/js/jquery.parallax.js"></script>
<script type="text/javascript" src="public/vendors/bootstrap/js/smoothscroll.js"></script>
<script type="text/javascript" src="public/vendors/bootstrap/js/nivo-lightbox.min.js"></script>
<script type="text/javascript" src="public/vendors/bootstrap/js/custom.js"></script>

</body>
</html>
