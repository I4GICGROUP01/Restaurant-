<!DOCTYPE html>
<html>
<head>
    <title>Drinking-Monalisa</title>
    <link rel="icon" type="image/jpg" href="images/a.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./public/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./public/vendors/bootstrap/css/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="./public/vendors/bootstrap/css/default.css">
    <link rel="stylesheet" type="text/css" href="./public/vendors/bootstrap/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="./public/vendors/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="drink.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>

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
                <li ><a href="ourservice.php" class="smoothScroll"><b>OUR SERVICE</b></a></li>
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
                        <li class="active"><a href="Drink.php">Drink</a></li>
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
                <img style="width:100%;height:500px; margin:left:25%; " src="imagedss/ee.jpg" alt="...">
                <div class="carousel-caption">
                    <p class="slideshowtext">Monalisa</p>
                    <h1>DRINK</h1>
                </div>
            </div>

            <div class="item">
                <img style="width:100%;height:500px; margin:left:25%; " src="imagedss/dr.jpg" alt="...">
                <div class="carousel-caption">
                    <p class="slideshowtext">Monalisa</p>
                    <h1>DRINK</h1>
                </div>
            </div>

            <div class="item">
                <img style="width:100%;height:500px; margin:left:25%; " src="imagedss/tea.jpg" alt="...">
                <div class="carousel-caption">
                    <p class="slideshowtext">Monalisa</p>
                    <h1>DRINK</h1>
                </div>
            </div>

            <div class="item">
                <img style="width:100%;height:500px; margin:left:25%; " src="imagedss/r.jpg" alt="...">
                <div class="carousel-caption">
                    <p class="slideshowtext">Monalisa</p>
                    <h1> DRINK </h1>
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



<!-- PRIVATE DINING -->
<div class="container wow slideInRight" data-wow-delay="0.8s">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
            <h1 class = "topwriter">DRINK</h1>
            <hr>
        </div>

        <table width="100%" class="table">
            <tr class="tr" style="background-color: #82E0AA;">
                <th style="text-align: center;">TEA</th>
                <th style="text-align: center;">COFFEE</th>
                <th style="text-align: center;">JUICE</th>
                <th style="text-align: center;">WINE/BEER</th>
            </tr>
            <tr class="tr">
                <td>1. Green tea (1.5$)</td>
                <td>1. Local iced coffee(2.5$)</td>
                <td>1. Fresh Orange juice(3$)</td>
                <td>1. White wine(14$)</td>
            </tr>
            <tr class="tr">
                <td>2.Red Tea (1.5$)</td>
                <td>2.Iced coffee milk (3$)</td>
                <td>2.Fresh Pinapple juice (3$)</td>
                <td>2.Red wine (15$)</td>
            </tr>
            <tr class="tr">
                <td>3.Green tea milk (2$)</td>
                <td>3.Hot coffee milk (2.5$)</td>
                <td>3.Fresh carot juice (3$)</td>
                <td>3.Angkor Beer (2$)</td>
            </tr>
            <tr>
                <td>4.Iced lemond tea (2$)</td>
                <td>4.Black coffee (2$)</td>
                <td>4.Fresf lime juice (3$)</td>
                <td>4.ABC Beer (2.5$)</td>
            </tr>
            <tr>
                <td>5.Passion Iced tea (2$)</td>
                <td>5.Capuchino(2.5$)</td>
                <td>5.Fresh watermelon (3$)</td>
                <td>5.Heniken Beer (3$)</td>
            </tr>
            <tr>
                <td>6.Breakfeast tea (1$)</td>
                <td>6.Hot coffee latte (2.5$)</td>
                <td>6.Fresh lemon with soda (3$)</td>
                <td>6.Tiger Beer (2.5$)</td>
            </tr>
            <tr>
                <td></td>
                <td>7.Iced Capuchino (3$)</td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</div>

<!-- footer section -->
<footer class="parallax-section" id ="footer4">
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