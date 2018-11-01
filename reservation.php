<!DOCTYPE html>
<html>
<head>
    <title>Reservation-Monalisa Restuarant</title>
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

<section class="navbar navbar-default navbar-fixed-top" role="navigation"   style="background-color:#17202A;">
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
                <li><a href="gallery.php" class="smoothScroll"><b>GALLERY</b></a></li>
                <li><a href="aboutus.php" class="smoothScroll"><b>ABOUT US</b></a></li>
                <li><a href="contactus.php" class="smoothScroll"><b>CONTACT US</b></a></li>
            </ul>
        </div>
    </div>
</section>


<br>
<!--Make a reservation-->
<footer class="parallax-section" id="footer-reservation">
    <center>
        <p class ="slideshowtext1"><u>table booking</u></p>
    </center>
    <center id ="reservationtable">
        <div class="container">
            <form class="form-inline">
                <div class="form-group">
                    <span class="glyphicon glyphicon-envelope"></span>
                    <label id ="email1" for="email" >Email:</label>
                    <br>
                    <input type="email" style="width:300px;" class="form-control" id="email" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <span class="glyphicon glyphicon-user"></span>
                    <label id="name1" for="Name">Name:</label>
                    <br>
                    <input type="text" style="width:300px;" class="form-control" id="name" placeholder="Enter Name">
                </div>

                <div class="form-group">
                    <span class="glyphicon glyphicon-phone"></span>
                    <label for="Phone" id="phone1">Phone:</label>
                    <br>
                    <input type="text" style="width:300px;" class="form-control" id="name" placeholder="Enter Phone">
                </div>

            </form>
        </div>
        <br>

        <div class="container">
            <form class="form-inline">


                <div class="form-group">
                    <span class="glyphicon glyphicon-th"></span>
                    <label id = "date1" for="date">Date:</label>
                    <br>
                    <input type="date" style="width:300px;" class="form-control" id="name" placeholder="Date">
                </div>

                <div class="form-group">
                    <span class="glyphicon glyphicon-time"></span>
                    <label  id="time1" for="time">Time:</label>
                    <br>
                    <select  class="form-control" name="Time" style="width:300px;" id="time">
                        <option>Time</option>2
                        <option>6:00 am</option>
                        <option>7:00 am</option>
                        <option>8:00 am</option>
                        <option>9:00 am</option>
                        <option>10:00 am</option>
                        <option>11:00 am</option>
                        <option>12:00 pm</option>
                        <option>01:00 pm</option>
                        <option>02:00 pm</option>
                        <option>03:00 pm</option>
                        <option>04:00 pm</option>
                        <option>05:00 pm</option>
                        <option>06:00 pm</option>
                        <option>07:00 pm</option>
                        <option>08:00 pm</option>
                        <option>09:00 pm</option>
                        <option>10:00 pm</option>
                    </select>
                </div>


                <div class="form-group">
                    <span class="glyphicon glyphicon-glass"></span>
                    <label id="member1" for="member">Member:</label>
                    <br>
                    <select  class="form-control" name="Member" style="width:300px;" id="member">
                        <option>Member</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>More than 10</option>
                    </select>
                </div>
                <br>
                <br>
                <div class="container">
                    <form class="form-inline">
                        <div class="form-group">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <label id="specail1" for="member" text-align ="left">Specail requests:</label>
                            <br>
                            <textarea rows="5" cols="100">
              </textarea>
                        </div>
                    </form>
                </div>
                <br>
                <div class="btn-group">
                    <button onclick="myFunction()" class="btn btn-success" type="submit" style="width:200px;height:30px;background-color:#2ECC71;">  Book Now
                    </button>

                    <p id="demo"></p>
                    <script>
                        function myFunction() {
                            var x;
                            if (confirm("Thank you! We will confirm your booking via email/phone!") == true) {
                                x = "You pressed OK!";
                            } else {
                                x = "You pressed Cancel!";
                            }
                            //document.getElementById("demo").innerHTML = x;
                        }
                    </script>
                </div>
    </center>
</footer>
<br>




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