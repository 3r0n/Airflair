<?php require("db.php"); 
require("modals.php"); 

?>

   
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

                    <a href="tshirt1.php" class="list-group-item list-group-item-info active">T-Shirts</a>
                    <!--<div class="collapse" id="demo4">
                      <a href="" class="list-group-item list-group-item">Male</a>
                      <a href="" class="list-group-item list-group-item">Female</a>
                    </div>-->

                    <a href="sweater1.php" class="list-group-item list-group-item-info">Sweaters</a>
                    <!--<div class="collapse" id="demo5">
                      <a href="" class="list-group-item list-group-item">Male</a>
                      <a href="" class="list-group-item list-group-item">Female</a>
                    </div>-->
                  </div>
                </div>    

                <div class="col-md-9">

                    <?php
                    
                        $sql = "SELECT * FROM tshirts";

                        $result = mysqli_query($Connection, $sql);

                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo "<form method='post'>";
                            echo "<div class='thumbnail'>";
                            echo "<img class='img-responsive' src='upload/" . $row["Image"]. "'width='100' height='100'>"; 
                            echo "<div class='caption-full'>";
                            echo "<h4 class='pull-right'> $" .$row['Price']. " USD " . "</h4><br>";
                            echo "<h3>" . "Type: ". $row['Type'] . "<br>" . "Size: " . $row['Size'] . "<br>" . "Quantity: " . $row["Quantity"]; 
                            echo "<br>";
							
							echo "Enter Amount :<input type='number' name='testquantity' max='".$row['Quantity']."' required> <br><br>";
							
							echo "Enter Shirt Size:<input type='text' name='size' required> <br>";
							
                            echo "<input type='submit' class='btn btn-success pull-right' name='submit3'>";
                            echo "<br><br>";
  
                            echo "</form>";
                            echo "</div>";
                            echo "</div>";


                        }
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

		
		
		
		<!-- Used to get the customer ID and store it in the  a variable from customer table -->
		<?php
		  
		
		 $cquery=" SELECT CustomerID FROM customers";
	   $Cresult = mysqli_query($Connection, $cquery);
	   while($row = mysqli_fetch_assoc($Cresult))
                        {
							//echo"ID";
					 $CID=$row['CustomerID'];
					echo"<br>";	
					
				
						}
		
		?>

		
		
		
		
		
		
		
		
        
<?php
    
   
		
	 if(isset($_POST['submit3']))

         {
		
        $testquantity=$_POST['testquantity'];
	
		$size=$_POST['size'];
		
		//getting product id
	  $pquery=" SELECT TshirtsID FROM tshirts WHERE Size='$size'";
	  $Presult = mysqli_query($Connection, $pquery);
	  
	  while($row = mysqli_fetch_assoc($Presult))
                        {
						echo"<br>";	
						
					 $SID=$row['TshirtsID'];
					
	  
	  
						}
	  
	  
	  
	  // getting product price

$Quanquery=" SELECT Price FROM  tshirts  WHERE Size='$size'";				
		$Quanresult = mysqli_query($Connection, $Quanquery);

		while($row = mysqli_fetch_assoc($Quanresult))
                        {
						echo"<br>";	
						//echo"DATABASE Price";
					 $DQUAN=$row['Price'];
					
					
				
						}
	  
	   
	  	$Total3=($DQUAN*$testquantity);			
	   $insert1=" INSERT INTO orderstatus(CustomerID,ProductID,Product_Quan, total) VALUES ('$CID','$SID','$testquantity', '$Total3')";
	   // $CID;
	    //$SID;
	    //echo "user input".$testquantity;
	   // echo "from database". $DQUAN;
	   if(mysqli_query($Connection, $insert1))
                {
                    echo   "Succesfully inserted into table";
                
                }
                else
                {
                    echo "error inserting into table";
                
                }
	 
		   
		 
			   
		   /* Database Quantity substrated by quantity entered by user*/
		   //$Quantitynew=($DQUAN- $testquantity);
		   
		   /* query to run update once the cumputation of the old  subtracted the new it was storied in the 
		     Quantitynew variable which is used to update the quantity field in the database.
		       */
		  /* $sql2=" UPDATE tshirts SET Quantity='$Quantitynew' WHERE Size='$size' AND Type='$type'";
		   if(mysqli_query($Connection, $sql2))
                {
					echo"<br>";
                    echo   "Succesfully UPDATED table";
                
                }
                else
                {
                    echo "error Updating into table" .mysqli_error($Connection);
                
                }
				*/
		   }
		 
?>
		
		
		
		
		
		
		
		
		
		
    </body>

</html>