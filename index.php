<?php require("db.php"); require("registration.php"); require("modals.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AirFlair</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="favicon.ico">
    
    <!-- Scripts -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
        
  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#5c5c70;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span class="fa fa-send"></span> AirFlair</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#about"><span class="fa fa-info-circle"></span> About Us</a></li>
                    <li><a href="#contact"><span class="fa fa-phone"></span> Contact</a></li>
                </ul>
                
                 <ul class="nav navbar-nav navbar-right">
                     <li data-toggle="modal" data-target="#register"><a href="#register"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Sign Up</a></li>
                         <li data-toggle="modal" data-target="#login"><a href="#login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a></li>
                         <li><a href="#"><span class="fa fa-cart-arrow-down"></span> Shopping Cart</a></li>
                         
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   
    <div class='alert alert-success alert-dismissable fade in'>
             <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
             <strong>Admin Account Info: </strong> Email: - damion@ncu.edu.jm  Password: - Mitchell
    </div>
            
    <div class='alert alert-success alert-dismissable fade in'>
             <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
             <strong>Customer Account Info: </strong> Email: - customer1@gmail.com Password: - A7@tsz4*
    </div>
    
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            
                                  
            <!-- Categories side panel -->
            <div class="col-md-3">
              <p class="lead">Categories:</p>
              <div class="list-group panel">
                  
                <a href="tank.php" class="list-group-item list-group-item-info">Tank Tops</a>
                <!--<div class="collapse" id="demo3">
                  <a href="#SubMenu1" class="list-group-item list-group-item" data-toggle="collapse" data-parent="#SubMenu1">Male</a>
                  <a href="javascript:;" class="list-group-item list-group-item">Female</a>
                </div>-->
                  
                <a href="tshirt.php" class="list-group-item list-group-item-info">T-Shirts</a>
               <!-- <div class="collapse" id="demo4">
                  <a href="" class="list-group-item list-group-item">Male</a>
                  <a href="" class="list-group-item list-group-item">Female</a>
                </div>-->
                  
                <a href="sweater.php" class="list-group-item list-group-item-info">Sweaters</a>
                <!--<div class="collapse" id="demo5">
                  <a href="" class="list-group-item list-group-item">Male</a>
                  <a href="" class="list-group-item list-group-item">Female</a>
                </div>-->
              </div>
            </div>

            <div class="col-md-9">
               
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="10"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="11"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/air.jpg" alt="Air">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air1.jpg" alt="Air1">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air2.jpg" alt="Air2">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air3.jpg" alt="Air3">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air4.jpg" alt="Air4">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air5.jpg" alt="Air5">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air6.jpg" alt="Air6">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air7.jpg" alt="Air7">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air8.jpg" alt="Air8">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air9.jpg" alt="Air9">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air10.jpg" alt="Air10">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air11.jpg" alt="Air11">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air12.jpg" alt="Air12">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air13.jpg" alt="Air13">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air14.jpg" alt="Air14">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air15.jpg" alt="Air15">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air16.jpg" alt="Air16">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air18.jpg" alt="Air18">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air19.jpg" alt="Air19">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air20.jpg" alt="Air20">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air21.jpg" alt="Air21">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air22.jpg" alt="Air22">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/air23.jpg" alt="Air23">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
                
        
            <br><br>
            
            <div class="container-fluid text-center">
                <div class="row">
                   <div id="about">
                        <h1>About Us</h1>
                        <div class="well well-lg col-md-12" style="">
                           <h3>By combining strategic marketing and entertainment with products at competitive prices AirFlair Apparel manages to get right to the point. Do you have one?</h3><br><br>
                            <ul style="list-style-type:none;font-size:60px;">
                                <li><a href="https://www.facebook.com/airflairapparel/" target="_blank"><span class="fa fa-facebook-square"></span></a>  <a href="https://www.instagram.com/airflairapparel/" target="_blank"><span class="fa fa-instagram"></span></a> <span class="fa fa-envelope-o"></span></li> 
                            </ul>
                        
                        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                    
                    <div id="contact">
                        <h1>Contact Us</h1>
                        <div class="well well-lg col-md-6">
                            <form action="" method="POST" role="form">
                              <legend>You can leave your feedback here</legend>
                                  
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="ourMail" placeholder="Our Email: airflairapparel@gmail.com " disabled>
                                  </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="contactName" placeholder="Name:" required="">
                                  </div>
                                   <div class="form-group">
                                    <input type="email" class="form-control" name="contactMail" pattern="^[a-z\'0-9]+([._-][a-z\'0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$" placeholder="Email:" required="">
                                  </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="contactSubject" placeholder="Subject:" required="">
                                  </div>
                                   <div class="form-group">
                                   <textarea class="form-control" rows="3" name="contactComment" placeholder="What are your thoughts?" required=""></textarea>
                                  <br>
                                  <button type="submit" class="ghost-button-full-color" name="contactSubmit">Submit</button>
                                  </div>
                            </form>
                      </div>
                        <div class="col-md-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60699.868764361236!2d-77.5421912870823!3d18.037182613494444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edbbe30d488f7b7%3A0xfa584d60eca5d4ed!2sMandeville!5e0!3m2!1sen!2sjm!4v1460437951313" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            
            </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row text-center">
                <div class="col-lg-12">
                    <p>Eron & Delmark Thompson Copyright &copy; 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
