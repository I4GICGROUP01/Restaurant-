<!DOCTYPE html>
<html>
<head>
    <title>Breakfast-Monalisa Restuarant</title>
    <link rel="icon" type="image/jpg" href="images/a.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

<section class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:#17202A  ;">
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
                <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>MENU</b><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="active" ><a href="breakfast.php">Breakfast</a></li>
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
                    <h1>BREAKFAST MENU</h1>
                </div>
            </div>

            <div class="item">
                <img style="width:100%;height:500px; margin:left:25%; " src="images/footer7.jpg" alt="...">
                <div class="carousel-caption">
                    <h1>BREAKFAST MENU</h1>
                </div>
            </div>

            <div class="item">
                <img style="width:100%;height:500px; margin:left:25%; " src="images/menu3.jpg" alt="...">
                <div class="carousel-caption">
                    <h1>BREAKFAST MENU</h1>
                </div>
            </div>

            <div class="item">
                <img style="width:100%;height:500px; margin:left:25%; " src="images/menu5.jpg" alt="...">
                <div class="carousel-caption">
                    <h1>BREAKFAST MENU</h1>
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

<!-- NOODLE SOUP-->

<div class="container wow fadeInLeftBig" data-wow-delay="0.6s">
    <div class="row">
        <div class="col-sm-6">
            <br>
            <img src="images/noodle1.jpg" style="width:560px;height:460px%" alt="...">
        </div>
        <div class="col-sm-6">
            <center>
                <p class="topwriter">
                    <u> NOODLE SOUP </u>
                </p>
            </center>
            <br>
            <table class="table">
                <thead>
                <tr>
                    <th>Kuy Teav Monalisa</th>
                    <th>$3.5</th>
                    <th> Noodle Soup with beef </th>
                    <th >$3.8</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2"><p class="pmenu">Signature Pork & Prawn Noodle Soup</p></td>
                    <td colspan="2"><p class="pmenu">Crispy Mee with Minced Beef</p></td>

                </tr>
                </tbody>

                <thead>
                <tr>
                    <th> Kuy Teav Sach Ko </th>
                    <th>$3.5</th>
                    <th>Kuy Teav Khreung Sarmot</th>
                    <th>$3.8</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2"><p class="pmenu">Pork Noodle Soup</p></td>
                    <td colspan="2"><p class="pmenu">Seafood Noodle Soup</p></td>
                </tr>
                </tbody>


                <thead>
                <tr>
                    <th>Kuy Teav Khor Kor</th>
                    <th>$4.2</th>
                    <th>Kuy Teav Prahok Ktis</th>
                    <th>$4</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2"><p class="pmenu">Beef Stew Noodle Soup</p></td>
                    <td colspan="2"><p class="pmenu">Noodle with Prawn</p></td>
                </tr>
                </tbody>


                <thead>
                <tr>
                    <th>Kuy Teav Prohet Sach Trei</th>
                    <th>$3.8</th>
                    <th>Kuy Teav Ch'heung Soup</th>
                    <th>$4</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2"><p class="pmenu"> Fish Ball Noodle </p></td>
                    <td colspan="2"><p class="pmenu"> Pork Noodle Soup </p></td>
                </tr>
                </tbody>

        </div>
    </div>
</div>
</table>
</div>
</div>
</div>
<br>
<br>
<br>

<!--  CAMBODIAN RICE &  CONGEE   -->

<div class="container wow fadeInRightBig" data-wow-delay="0.6s">
    <div class="row">

        <div class="col-sm-6">
            <center>
                <p class="topwriter">
                    <u> CAMBODIAN RICE &  CONGEE </u>
                </p>
            </center>
            <br>
            <table class="table">
                <thead>
                <tr>
                    <th>Bay Sach Chrouk Ang</th>
                    <th>$3</th>
                    <th> Bay Sach Moan </th>
                    <th >$3.8</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2"><p class="pmenu">Grilled Pork and Rice</p></td>
                    <td colspan="2"><p class="pmenu"> Roasted Chicken and Rice</p></td>
                </tr>
                </tbody>

                <thead>
                <tr>
                    <th> Bay Sach Ko </th>
                    <th>$3.8</th>
                    <th> Bor Bor Samchok</th>
                    <th>$3.5</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2"><p class="pmenu">Fried Beff and Rice</p></td>
                    <td colspan="2"><p class="pmenu">  Combination Congee
                        </p></td>
                </tr>
                </tbody>


                <thead>
                <tr>
                    <th>Bor Bor Sach Trei</th>
                    <th>$3.3</th>
                    <th>Bor Bor Sor Trei Gneat</th>
                    <th>$4</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2"><p class="pmenu">Fish Congee</p></td>
                    <td colspan="2"><p class="pmenu">Plain Congee</p></td>
                </tr>
                </tbody>

        </div>
    </div>
</div>
</table>
</div>

<div class="col-sm-6">
    <br>
    <img src="images/congee.jpg" style="width:480px;height:360px;" alt="...">
</div>
</div>
</div>

<br>
<br>
<br>
<br>


<!--  RICE NOODLES &  EGGS -->

<div class="container wow fadeInRightBig" data-wow-delay="0.6s">
    <div class="row">
        <div class="col-sm-6">
            <br>
            <img src="images/shortnoodle.jpg" style="width:500px;height:400px%" alt="...">
        </div>
        <div class="col-sm-6">
            <center>
                <p class="topwriter">
                    <u> RICE NOODLES &  EGGS </u>
                </p>
            </center>
            <br>
            <table class="table">
                <thead>
                <tr>
                    <th>Lort Char Pong Tea</th>
                    <th>$2.2</th>
                    <th>Lort Char Sach Ko </th>
                    <th >$3.8</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2"><p class="pmenu">Noodles With Chive Leaves</p></td>
                    <td colspan="2"><p class="pmenu">Noodles with Marinated Beef</p></td>

                </tr>
                </tbody>

                <thead>
                <tr>
                    <th> Lort Char Bangkea </th>
                    <th>$3.8</th>
                    <th>Num Banh Chok</th>
                    <th>$3.8</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2"><p class="pmenu">Noodles With Prawns</p></td>
                    <td colspan="2"><p class="pmenu">Khmer Rice Noodle</p></td>
                </tr>
                </tbody>


                <thead>
                <tr>
                    <th>Sout Chein</th>
                    <th>$3.2</th>
                    <th>Sout Omelet</th>
                    <th>$3</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2"><p class="pmenu">Fried Eggs</p></td>
                    <td colspan="2"><p class="pmenu">Omelet</p></td>
                </tr>
                </tbody>


                <thead>
                <tr>
                    <th> Sout Sross </th>
                    <th>$3.2</th>
                    <th>Sout Krolok</th>
                    <th>$3</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2"><p class="pmenu">Poached Eggs</p></td>
                    <td colspan="2"><p class="pmenu"> Scrambled Eggs </p></td>
                </tr>
                </tbody>

        </div>
    </div>
</div>
</table>
</div>
</div>
</div>
<br>
<br>
<br>


<!-- SET MENU  -->

<div class="container wow fadeInLeftBig" data-wow-delay="0.6s">
    <div class="row">

        <div class="col-sm-6">
            <center>
                <p class="topwriter">
                    <u> SET MENU </u>
                </p>
            </center>
            <br>
            <table class="table">
                <thead>
                <tr>
                    <th>CAMBODIAN BREAKFAST</th>
                    <th>$8</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2">
                        <p class="pmenu">Hot Tag</p>
                        <p class="pmenu">Orange Juice</p>
                        <p class="pmenu">Iced Coffee with Milk</p>
                        <p class="pmenu">Soup Noodle With Pork and Prawn</p>
                        <p class="pmenu">Cambodian Dessert</p>
                    </td>

                </tr>
                </tbody>

                <thead>
                <tr>
                    <th>CAMBODIAN RICE BREAKFAST</th>
                    <th>$8</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2">
                        <p class="pmenu">Iced Tea </p>
                        <p class="pmenu">Black Coffee With Milk</p>
                        <p class="pmenu">Chicken Rice With Pickled Vegetables </p>
                        <p class="pmenu">Fresh Fruit Slices</p>
                        <p class="pmenu">Cambodian Dessert</p>
                    </td>
                </tr>
                </tbody>


                <thead>
                <tr>
                    <th>EGG BREAKFAST</th>
                    <th>$9</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td colspan="2">
                        <p class="pmenu">Fresh Bread With Butter</p>
                        <p class="pmenu">Eggs Cooked as You Like Them</p>
                        <p class="pmenu">Orange Juice</p>
                        <p class="pmenu">Esppresso or Cappucino</p>
                        <p class="pmenu">Fresh Friut Slices</p>
                    </td>
                </tr>
                </tbody>
        </div>
    </div>
</div>
</table>
</div>

<div class="col-sm-6">
    <br>
    <img src="images/setmenu.jpg" style="width:500px;height:360px;" alt="...">
    <img src="images/drink.jpg" style="width:500px;height:360px;" alt="...">
</div>
</div>
</div>

<br>
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
                    <li><a href="#" class="fa fa-tripadvisor wow bounceIn" data-wow-delay="1s"></a></li>
                    <li><a href="#" class="fa fa-linkedin  wow bounceIn" data-wow-delay="1.3s"></a></li>
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