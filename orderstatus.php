<?php require("db.php"); require("modals.php"); ?>

   
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
                    <a class="navbar-brand" href="index1.php"><span class="fa fa-send"></span> AirFlair</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="myNavbar">
                    
                    <ul class="nav navbar-nav navbar-right">
                             <li data-toggle="modal" data-target="#login"><a href="logout.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Logout</a></li>
                             <li><a href="orderstatus.php"><span class="fa fa-cart-arrow-down"></span> Shopping Cart</a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>


        <!-- Page Content -->
        <div class="container">

            <div class="row">


                <!-- Categories side panel -->
                <div class="col-md-3">
                  <p class="lead">Categories:</p>
                  <div class="list-group panel">

                    <a href="tank1.php" class="list-group-item list-group-item-info">Tank Tops</a>
                    <!--<div class="collapse" id="demo3">
                      <a href="#SubMenu1" class="list-group-item list-group-item" data-toggle="collapse" data-parent="#SubMenu1">Male</a>
                      <a href="javascript:;" class="list-group-item list-group-item">Female</a>
                    </div>-->

                    <a href="tshirt1.php" class="list-group-item list-group-item-info">T-Shirts</a>
                    <!--<div class="collapse" id="demo4">
                      <a href="" class="list-group-item list-group-item">Male</a>
                      <a href="" class="list-group-item list-group-item">Female</a>
                    </div>-->

                    <a href="sweater1.php" class="list-group-item list-group-item-info">Sweaters</a>
                    <!--<div class="collapse" id="demo5">
                      <a href="" class="list-group-item list-group-item">Male</a>
                      <a href="" class="list-group-item list-group-item">Female</a>
					  Enter Shirt Type:<input type='text' name='type' required> <br><br>
                    </div>-->
                  </div>
                </div>    

                <div class="col-md-9">

                <form method="post" action="orderstatus.php">
                <input type="radio" name="CardVisa" value="CardVisa">VISA 
                <input type="radio" name="CardMaster" value="CardMaster"> MASTER
                <input type="radio" name="CardMagna" value="CardMagna"> MAGNA<br>
                <input type="text" name="CardNumber" > 
                <input type="submit" name="Purchase">


                <?php





                if(isset($_POST['Purchase']))
                {
                    if(isset($_POST['CardVisa']))
                    {
                    $visa=$_POST['CardNumber'];

                    if(preg_match("/^\d{10}/",$visa))
                    {
                        echo "<div class='alert alert-success alert-dismissable fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Success!</strong> Visa card is valid
                            </div>";
                    }

                    else
                    {
                        echo "<div class='alert alert-warning alert-dismissable fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Error!</strong> Visa length is invalid
                            </div>";
                    }
               
               }

                if(isset($_POST['CardMaster'])){
                    $master=$_POST['CardNumber'];

                    if(preg_match("/^\d{10}/",$master))
                    {
                        echo "<div class='alert alert-success alert-dismissable fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Success!</strong> Valid master card
                            </div>";
                    }

                    else
                    {
                       echo "<div class='alert alert-warning alert-dismissable fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Error!</strong> Invalid master card
                            </div>";
                    }
                    
                }

                if(isset($_POST['CardMagna']))
                {
                    $magna=$_POST['CardNumber'];

                    if(preg_match("/^\d{16}/",$magna))
                    {
                        echo "<div class='alert alert-success alert-dismissable fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Success!</strong> Valid Magna Card
                            </div>";
                    }

                    else
                    {
                        echo "<div class='alert alert-warning alert-dismissable fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Error!</strong> Invalid Magna card
                            </div>";
                    }
                    
                }
            }

                ?>
            </form>


        <?php
        $queryQ="SELECT * FROM orderstatus";
                    
        $resultQ=mysqli_query($Connection, $queryQ);
                    
                    
        //creates table and headings
        echo "<div class='alert alert-success alert-dismissable fade in'>
                    <a href='#' class='close' data-dismiss='alert' araia-label='close'>&times;</a>";
                    
        echo "<div class='table-responsive'>          
              <table class='table table-bordered table table-hover'>
              <thead>
              <tr>
              <th>ID#</th>
              <th>Customer ID</th>
              <th>Product ID</th>
              <th>Quantity</th>
              <th>Total</th>
              </tr>
              </thead>
              <tbody>";


        while ($rowQ=mysqli_fetch_array($resultQ))
        {            
           echo "<tr><td>" . $rowQ["OrderID"]. "</td><td>" . $rowQ["CustomerID"]. "</td><td>" . $rowQ["ProductID"]. "</td><td>" . $rowQ["Product_Quan"]. "</td><td>" . $rowQ["total"]. "</td></tr>";

        }
        
         echo "</tbody>
               </table>
               </div>
               </div>";

        ?>
					
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