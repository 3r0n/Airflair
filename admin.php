<?php         
     // session_start();
      //$var = $_SESSION['alertSQL'];
    
?>

<?php require("db.php"); require("registration.php"); require("modals.php"); require("users.php"); require("products.php");?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AirFlair Admin Panel</title>

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
    
 <style>
tr:nth-child(even) 
    {
    background-color: #f9f9f9;
    }
th
    {
    background-color: #f9f9f9;
    }
</style>
        
  

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
                <a class="navbar-brand" href="admin.php"><span class="fa fa-send"></span> AirFlair</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                         
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <center><h1 class="text-muted">Admin Panel</h1></center><br><br><br>
    <div class="container">
        <div class="row">
            
             <!-- Products  panel -->
            <div class="well well-lg col-md-6">
               <center>
               <form method="post">
               <p class="lead">Products</p>
               <input type="button" name="addProducts" class="btn btn-success" data-toggle="modal" data-target="#addProduct" value="Add Products" onclick="location.href = '#addProduct';">
               <input type="button" name="viewProducts" class="btn btn-info" data-toggle="modal" data-target="#products" value="View All Products" onclick="location.href = '#products';">
               <input type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteProd" value="Delete Products" onclick="location.href = '#deleteProd';">
               </form>
               </center>
            </div>
            
              <!-- Users  panel -->
            <div class="well well-lg col-md-6">
               <center>
               <form method="post">
               <p class="lead">Users</p>
               <input type="button" name="adminRegister" class="btn btn-success" data-toggle="modal" data-target="#adminRegister" value="Add Admin" onclick="location.href = '#adminRegister';">
               <input type="submit" name="users" class="btn btn-info" data-toggle="modal" data-target="#user" value="View Customers" onclick="location.href = '#user';">
               <input type="button" name="delete" class="btn btn-danger" data-toggle="modal" data-target="#delete" value="Delete Users" onclick="location.href = '#delete';">
               </form>
               </center>
            </div>
            
              <!-- Reports  panel -->
            <div class="well well-lg col-md-12">
               <center>
               <form method="post">
                
                <p class="lead">Reports</p>
                                
                <input type="submit" class="btn btn-success" name="view" value="View All"><br><br><br>
                                 
                <?php 
                    if(isset($_POST["view"]))
                    {
                       include_once("reports.php");  
                    }
                
                ?>
                </form>
               </center>
            </div>
        </div>
    </div>
 
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
