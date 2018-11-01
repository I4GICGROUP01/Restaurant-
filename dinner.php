<!DOCTYPE html>
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

</head>
<body>
<!-- preloader section -->
<section class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->

<section class="navbar navbar-default navbar-fixed-top" role="navigation"  style="background-color:#17202A  ;">
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
                        <li class="active"><a href="dinner.php">Dinner</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="Drink.php">Drink</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="desesert.php">Dessert</a></li>
                    </ul>
                </li>
                <li><a href="promotion.php" class="smoothScroll"><b>PROMOTION</b></a></li>
                <li><a href="gallery.php" class="smoothScroll"><b>GALLERY</b></a></li>
                <li><a href="aboutus.php" class="smoothScroll"><b>ABOUT US</b></a></li>
                <li><a href="contactus.php" class="smoothScroll"><b>CONTACT US</b></a></li>
            </ul>
        </div>
    </div>
</section>


<section>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img style="width:100%;height:500px; margin:left:25%; " src="images/menu1.jpg" alt="...">
                <div class="carousel-caption">
                    <!-- Style for slide show-->
                    <p class="slideshowtext">Monalisa Dinner</p>
                    <h1>OUR MENU</h1>
                </div>
            </div>
            <div class="item">
                <img style="width:100%;height:500px; margin:left:25%; " src="images/footer7.jpg" alt="...">
                <div class="carousel-caption">
                    <p class="slideshowtext">Monalisa Dinner</p>
                    <h1>OUR MENU</h1>
                </div>
            </div>
            <div class="item">
                <img style="width:100%;height:500px; margin:left:25%; " src="images/menu3.jpg" alt="...">
                <div class="carousel-caption">
                    <p class="slideshowtext">Monalisa Dinner</p>
                    <h1>OUR MENU</h1>
                </div>
            </div>
            <div class="item">
                <img style="width:100%;height:500px; margin:left:25%; " src="images/menu5.jpg" alt="...">
                <div class="carousel-caption">
                    <p class="slideshowtext">Monalisa Dinner</p>
                    <h1>OUR MENU</h1>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<center>
    <p class="slideshowtext1"><marquee>the great place for dinner</marquee></p>
</center>
<!--Text Lunch time-->
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="dinner/place1.png" alt="royal-mak-mee">
        <div class="caption">
        </div>
    </div>
</div>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="dinner/place2.png" alt="royal-mak-mee">
        <div class="caption">
        </div>
    </div>
</div>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="dinner/place3.png" alt="royal-mak-mee">
        <div class="caption">
        </div>
    </div>
</div>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="dinner/place4.png" alt="royal-mak-mee">
        <div class="caption">
        </div>
    </div>
</div>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="dinner/place5.png" alt="royal-mak-mee">
        <div class="caption">
        </div>
    </div>
</div>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="dinner/place6.png" alt="royal-mak-mee">
        <div class="caption">
        </div>
    </div>
</div>
<footer class="parallax-section" id="footer2">
    <center>
        <p class="slideshowtext1"><marquee>Amazing place for dinner</marquee></p>
    </center>
</footer>
<br>
<center>
    <p class="topwriter">
        <u style="color: #e9620f;"><marquee>WELCOME TO DINNER MENU</marquee></u>
    </p>
</center>
<br>
<!-- Living Cambodia Cuisine-->
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="dinner/bbq.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">BBQ chiken: 5$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="dinner/1.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Chicken hold: 8$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="dinner/bbqplace.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">material BBQ: 8$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="dinner/Fork.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">special ko: 5$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="dinner/khmersoup.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Morouch khmer: 8$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="dinner/kiri.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">seafood & kari soup: 8$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="dinner/aa.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Ko & kari soup: 5$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="dinner/bb.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Soup: 8$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="dinner/cc.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Cheness food: 8$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="Lunch/ko.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Ko & kari soup: 5$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="Lunch/Chicken-1.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Chicken: 8$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="Lunch/agge.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Agge & kari soup: 8$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="Lunch/sachvich.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Breack with sachwich: 8$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="Lunch/master.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">master lunch: 8$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="Lunch/potato.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Fish Prahok: 8$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/royal-mak-mee.jpg" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Royal Mak Mee: 8$</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/amok-s.jpg" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Fish amok: 7$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/prawn-soup-h.jpg" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Praw Soup With: 15$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="Lunch/bro.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">brohok khmer: 10$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="Lunch/Untitled-1.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Fish khmer: 5$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="Lunch/mango.png" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">mango mix: 8$</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/crab-s.jpg" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Kampot Crab: 12$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/beef-soup-s.jpg" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">M’chou Prey: 10$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/leaf-h.jpg" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Chicken/Beef In Lotus Leaf: 8$</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/pork-h.jpg" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Khor Pork with bamboo: 15$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/beef-s.jpg" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Beef and Vegetable: 18$</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/fish-s.jpg" alt="royal-mak-mee">
                <div class="caption">
                    <p class="writer">Fish Prahok: 8$</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<!-- footer section -->
<!-- footer section -->

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
                    <li><a href="#" class="fa fa-linkedin  wow bounceIn" data-wow-delay="0.15s"></a></li>
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