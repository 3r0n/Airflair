<?php
    require("db.php");
 
                    
 
                //Login page for customers
                if(isset($_POST["login"]) && !empty($_POST['Email']) && !empty($_POST['Password']))
                {
                    $password = mysqli_real_escape_string($Connection, $_POST['Password']);
                    $email = mysqli_real_escape_string($Connection, $_POST['Email']);
                    $email = trim($email);
                    
					 
                    $password = md5(trim($password));
                    
                             
                      header("Location: index1.php"); 
                  }
                    else
                    {
                        echo "<div class='alert alert-warning alert-dismissable fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Error!</strong> Error please try again
                            </div>";
                    }
		                    
            

            //logs in admin
            if(isset($_POST["adminLogin"]) && !empty($_POST['Email']) && !empty($_POST['Password']))
                {
                    $password1 = mysqli_real_escape_string($Connection, $_POST['Password']);
                    $email1 = mysqli_real_escape_string($Connection, $_POST['Email']);
                    $email1 = trim($email1);
                    $_SESSION['Email']=$email1;
                    $password1 = md5(trim($password1));
                    
                   					  
                    header("Location: admin.php"); // Redirect user to admin page
                    }
                    else
                    {
                        echo "<div class='alert alert-warning alert-dismissable fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Error!</strong> Error please try again
                            </div>";
                    }
		                    
            
?>
<!--------------------------------------------------- FOR ADMIN PANEL ------------------------------------------------------------------------------------------>   
    

            <!--- ADD PRODUCTS ---->
            <div tabindex="-1" class="modal fade" id="addProduct" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="admin.php" enctype="multipart/form-data">
                      <legend><h2 class="text-center">Add Product</h2></legend>

                      <div class="form-group">  
                        <label>Category:</label><br>
                            <input type="radio" name="t-shirt">T-Shirt
                            <input type="radio" name="tank">Tank
                            <input type="radio" name="sweater">Sweater
                        </div>
                        
                      <div class="form-group">
                      <label>Upload Image:</label>
                      <input type="file" name="upload" value="Browse:">
                      </div>
                                            
                      <div class="form-group">
                      <label>Type:</label>
                      <div class="checkbox">
                        <input type="radio" name="Type" value="male">Male
                        <input type="radio" name="Type" value="female">Female  
                      </div>
                      </div>
                    
                     <div class="form-group">
                      <label>Size:</label>
                      <div class="checkbox">
                        <input type="radio" name="Size" value="xsmall">Extra-Small
                        <input type="radio" name="Size" value="small">Small
                        <input type="radio" name="Size" value="medium">Medium 
                        <input type="radio" name="Size" value="large">Large 
                        <input type="radio" name="Size" value="xlarge">Extra-Large 
                      </div>
                      </div>    

                      <div class="form-group">
                        <label>Quantity</label>
                          <input type="number" name="Quantity" min="1" class="form-control" required>
                      </div>

                      <div class="form-group">
                        <label>Color</label>
                        <input type="text" class="form-control" name="Color" placeholder="Blue" required>
                      </div>
                                          
                      <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" step="0.01" min="1"  name="Price" required>
                      </div>
                    <div class="modal-footer">
                    <button type="submit" name="addProducts" class="btn btn-success" href="admin.php">Add Product</button>
                  </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
        
    
         <!--- View products ---->
            <div id="products" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="post">
                    <h2 class="text-center">All Products</h2>
                    <div class="form-group">  
                        <label>Category:</label><br>
                            <input type="radio" name="T-Shirt">T-Shirt
                            <input type="radio" name="Tank">Tank
                            <input type="radio" name="Sweater">Sweater
                  </div>
                    <div class="modal-footer">
                    <button type="submit" name="viewProducts" class="btn btn-success" href="admin.php">View</button>
                  </div>
                  </form>
                          <?php
                                if(isset($_POST["viewProducts"]))
                                {
                                    include_once("products.php");
                                }
                                
                           ?>
                  </div>
                </div>
              </div>
            </div>

            <!--- Delete Products ---->
            <div id="deleteProd" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="admin.php" role="form">
                    <h2 class="text-center">Delete Product</h2>
                       <div class="form-group">  
                        <label>Category:</label><br>
                            <input type="radio" name="Tshirt">T-Shirt
                            <input type="radio" name="Tanks">Tank
                            <input type="radio" name="Sweaters">Sweater
                        </div>
                        
                       <div class="form-group">
                        <label>Enter product ID# That You Wish To Delete</label>
                          <input type="number" name="ProductID" class="form-control" required>
                      </div>
                      <div class="modal-footer">
                    <button type="submit" name="deleteProd" class="btn btn-success" href="admin.php">Remove</button>
                  </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

     

            <!--- REGISTER Admin ---->
            <div tabindex="-1" class="modal fade" id="adminRegister" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="admin.php" role="form">
                      <legend><h2 class="text-center">Add Admin</h2></legend>

                      <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" class="form-control" name="FirstName" placeholder="First Name:" required>
                      </div>
                    
                      <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" name="LastName" placeholder="Last Name:" required>
                      </div>

                      <div class="form-group">
                      <label>Gender:</label>
                      <div class="checkbox">
                        <input type="radio" name="Gender" value="male">Male
                        <input type="radio" name="Gender" value="female">Female  
                      </div>
                      </div>

                      <div class="form-group">
                        <label>Phone Number</label>
                          <input type="number" name="PhoneNumber" class="form-control" placeholder="Example: 1876-111-2388" required>
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="Email" placeholder="Example: mail@mail.com" required>
                      </div>
                                          
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="Password" placeholder="Something you can remember.." required>
                      </div>

                      <div class="form-group">
                        <label>Re-Enter Password</label>
                        <input type="password" class="form-control" name="CPassword" placeholder="Must match the above password" required>
                      </div> 
					  
				
                    <div class="modal-footer">
                    <button type="submit" name="registerAdmin" class="btn btn-success" href="admin.php">Register</button>
                  </div>
				  
                  </form>
                  </div>
                </div>
              </div>
            </div>
        
    
            <!--- View users ---->
            <div id="user" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <h2 class="text-center">All Users</h2>
                          <?php
                                if(isset($_POST["users"]))
                                {
                                    include_once("users.php");
                                }
                                
                           ?>
                  </div>
                </div>
              </div>
            </div>


        <!--- Delete Users ---->
            <div id="delete" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="admin.php" role="form">
                    <h2 class="text-center">Delete User</h2>
                       <div class="form-group">
                        <label>Enter Customer ID# That You Wish To Delete</label>
                          <input type="number" name="CustomerID" class="form-control" required>
                      </div>
                      <div class="modal-footer">
                    <button type="submit" name="delete" class="btn btn-success" href="admin.php">Remove</button>
                  </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

   
       
<!--------------------------------------------------- END OF ADMIN PANEL ------------------------------------------------------------------------------------------>                                      





<!--------------------------------------------------- FOR INDEX PAGE ------------------------------------------------------------------------------------------>   

       <!--Login and Registration Form-->
    
            <!--Login-->
              <div id="login" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog">
               <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                      <div class="tabbable">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Customers</a></li>
                            <li><a href="#tab2" data-toggle="tab">Admin</a></li>
                          </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                     <form method="POST" role="form" action="index.php">
                                         <legend><h2 class="text-center">Sign In</h2></legend>
                                          <div class="form-group">
                                          <label>Email:</label>
                                          <input type="email" class="form-control" name="Email" placeholder="Email" required>
                                          </div>
                                          <div class="form-group">
                                          <label>Password:</label>
                                          <input type="password" class="form-control" name="Password" placeholder="Password" required>
                                          </div>
                                          <br>
                                       <div class="modal-footer">
                                          <div class="pull-left">
                                          <a href="recovery.php" role="button">Forgot Your Password?</a>
                                          </div>
                                        <button type="submit" name="login" class="btn btn-success">Login</button>
                                     </div>
                                </form>
                            </div>
                             <div class="tab-pane" id="tab2">
                                     <form method="POST" role="form" action="index.php">
                                         <legend><h2 class="text-center">Admin Login</h2></legend>
                                          <div class="form-group">
                                          <label>Email:</label>
                                          <input type="email" class="form-control" name="Email" placeholder="Email" required>
                                          </div>
                                          <div class="form-group">
                                          <label>Password:</label>
                                          <input type="password" class="form-control" name="Password" placeholder="Password" required>
                                          </div>
                                          <br>
                                       <div class="modal-footer">
                                          <div class="pull-left">
                                          <a href="recovery.php" role="button">Forgot Your Password?</a>
                                          </div>
                                        <button type="submit" name="adminLogin" class="btn btn-success">Login</button>
                                     </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              </div>
            </div>

            <!--- REGISTER ---->
            <div tabindex="-1" class="modal fade" id="register" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="registration.php" role="form">
                      <legend><h2>Registration</h2></legend>

                      <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" class="form-control" name="FirstName" placeholder="First Name:" required>
                      </div>
                    
                      <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" name="LastName" placeholder="Last Name:" required>
                      </div>

                      <div class="form-group">
                      <label>Gender:</label>
                      <div class="checkbox">
                        <input type="radio" name="Gender" value="male">Male
                        <input type="radio" name="Gender" value="female">Female  
                      </div>
                      </div>

                      <div class="form-group">
                        <label>Phone Number:</label>
                          <input type="number" name="PhoneNumber" class="form-control" placeholder="Example: 1876-111-2388" required>
                      </div>

                      <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" name="Email" placeholder="Example: mail@mail.com" required>
                      </div>
                        
                      <div class="form-group">  
                        <label>Parish:</label><br>
                        <input list="parish" class="form-control" name="Parish" placeholder="Parish:" required>
                        <datalist id="parish">
                        <option value="Kingston">
                        <option value="St. Andrew">
                        <option value="Portland">
                        <option value="St. Thomas">
                        <option value="St. Catherine">
                        <option value="St. Mary">
                        <option value="St. Ann">
                        <option value="Manchester">
                        <option value="Clarendon">
                        <option value="Hanover">
                        <option value="Westmoreland">
                        <option value="St. James">
                        <option value="Trelawny">
                        <option value="St. Elizabeth">
                        </datalist> 
                      </div>

                      <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control" name="Address" placeholder="Example: 123 Sesame Street" required>
                      </div>

                      <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="Password" placeholder="Something you can remember.." required>
                      </div>

                      <div class="form-group">
                        <label>Re-Enter Password:</label>
                        <input type="password" class="form-control" name="CPassword" placeholder="Must match the above password" required>
                      </div>      
                    <div class="modal-footer">
                    <button type="submit" name="register" class="btn btn-success" href="index.php">Register</button>
                  </div>
				  
				  
                  </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- LOGOUT -->
            <div class="modal fade" id="logout">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Well then..</h4>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a class="btn btn-danger" href="logout.php" role="button">Logout</a>
                  </div>
                </div>
              </div>
            </div>

<!--------------------------------------------------- END OF INDEX PAGE ------------------------------------------------------------------------------------------>   

<!--------------------------------------------------- Quantity ------------------------------------------------------------------------------------------>    


            <div tabindex="-1" class="modal fade" id="tank1" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="tank1.php" role="form">
                      <legend><h2>Quantity</h2></legend>

                      <div class="form-group">
                        <input type="number" class="form-control" name="Quantity" max="<?php $Quantity ?>" placeholder=" Enter quantity:" required>
                      </div>
 
                    <div class="modal-footer">
                    <button type="submit" name="addToCart" class="btn btn-success" href="tank1.php">Continue</button>
                  </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>

			
			
			
			
			
			
			
    
            <div tabindex="-1" class="modal fade" id="sweater1" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="sweater1.php" role="form">
                      <legend><h2>Quantity</h2></legend>

                      <div class="form-group">
                        <input type="number" class="form-control" name="Quantity" max="<?php $Quantity ?>" placeholder=" Enter quantity:" required>
                      </div>
 
                    <div class="modal-footer">
					<!-- change the name to addtocart1 -->
                    <button type="submit" name="addToCart1" class="btn btn-success" href="sweater1.php">Continue</button>
                  </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>


    
            <div tabindex="-1" class="modal fade" id="tshirt1" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="tank1.php" role="form">
                      <legend><h2>Quantity</h2></legend>

                      <div class="form-group">
                        <input type="number" class="form-control" name="Quantity" max="<?php $Quantity ?>" placeholder=" Enter quantity:" required>
                      </div>
 
                    <div class="modal-footer">
                    <button type="submit" name="addToCart" class="btn btn-success" href="tshirt1.php">Continue</button>
                  </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>

