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

<section class="navbar navbar-default navbar-fixed-top" role="navigation"  style="background-color:#17202A;">
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
                <li class="active"><a href="promotion.php" class="smoothScroll"><b>PROMOTION</b></a></li>
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
                    <p class="slideshowtext">Monalisa</p>
                    <h1>Promotion</h1>
                </div>
            </div>

            <div class="item">
                <img style="width:100%;height:500px; margin:left:25%; " src="images/footer7.jpg" alt="...">
                <div class="carousel-caption">
                    <p class="slideshowtext">Monalisa</p>
                    <h1>Promotion</h1>
                </div>
            </div>

            <div class="item">
                <img style="width:100%;height:500px; margin:left:25%; " src="images/menu3.jpg" alt="...">
                <div class="carousel-caption">
                    <p class="slideshowtext">Monalisa</p>
                    <h1>Promotion</h1>
                </div>
            </div>

            <div class="item">
                <img style="width:100%;height:500px; margin:left:25%; " src="images/menu5.jpg" alt="...">
                <div class="carousel-caption">
                    <p class="slideshowtext">Monalisa</p>
                    <h1> Promotion </h1>
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
<br>
<br>
<center>
    <div class=" wow bounceInDown" data-wow-delay="0.8s">
        <p class="topwriter">
            HAVE FUN TIME WITH BIG PROMOTION
        </p>
    </div>
</center>

<br>
<br>

<!-- CAMBODIAN LIVING CUISINE-->

<div class="container wow bounceInUp" data-wow-delay="0.8s">
    <div class="row">
        <div class="col-sm-6">
            <img src="images/p1.jpg" style="width:550px;height:300px%" alt="...">
        </div>
        <div class="col-sm-6">
            <center id="page1">
                <p class="headertext">MONTHLY PTOMOTION</p>
            </center>
            <br>
            <p class="writer">It is the best monthly promotion in our place. You can get the best price with the big among of foods. You will be enjoy in our place and have a big fun with this promotion. We will post our promotion in our website or our facebook page, so you will know about our  promotion and come in the right time.The tables surround a beautiful tropical garden with flowering frangipanis and a trickling water feature beside a giant statue of Buddha, abiding by the principles of Feng Shui.
                Monalisa Restaurant is open for breakfast, lunch and dinner, and offers private dining rooms for business lunches or special events. We also offer exclusive use of the restaurant for wedding.
            </p>

        </div>
        <a href="reservation.php">
            <div class="container">
                <button type="button" class="btn btn-primary">BOOKING</button>
            </div>
        </a>
    </div>
</div>

<br>
<br>
<br>

<!--FRESH INGREDIENTS -->

<div class="container wow bounceInDown" data-wow-delay="0.8s">
    <div class="row">
        <div class="col-sm-6">
            <center id="page1">
                <p class="headertext">SPECAIL DAY</p>
            </center>
            <p class="writer"> We will provide the specail promotion in the specail occastion as such Mother Day, X-mas Day or Valentine Day. You will get this promotion and other gift. Moreover, we will prepare the game for each day to have fun together.Monalisa Restaurant Catering is available to orchestrate events in your home or a venue of your choice. Members of our kitchen and dining room staff will bring the very same elements that we use in the restaurant to create a memorable experience for you and your guests. </p>
            <!-- button view our menu -->
        </div>
        <div class="col-sm-6">
            <img src="images/p2.png" style="width:640px;height:640px%" alt="...">
        </div>
    </div>
    <a href="gallery.php">
        <div class="container">
            <button type="button" class="btn btn-primary">VIEW OUR GALLERY</button>
        </div>
    </a>
</div>
<br>
<br>
<br>



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