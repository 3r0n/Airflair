
<?php
    require("db.php");
	
 $counter=0;
    if(isset($_POST["register"]))
		
            {
                $FirstName = mysqli_real_escape_string($Connection, $_POST['FirstName']);
                $LastName = mysqli_real_escape_string($Connection, $_POST['LastName']);
                $Gender = mysqli_real_escape_string($Connection, $_POST['Gender']);
                $PhoneNumber = mysqli_real_escape_string($Connection, $_POST['PhoneNumber']);
                $Email = mysqli_real_escape_string($Connection, $_POST['Email']);
                $Parish = mysqli_real_escape_string($Connection, $_POST['Parish']);
                $Address = mysqli_real_escape_string($Connection, $_POST['Address']);
                
				$Password = $_POST['Password'];
				$CPassword= $_POST['CPassword'];
				
	    
		
		
		
                        if(preg_match("/^[A-Z]{1}.\W.\W?[@$*#&%_a-zA-Z0-9]{4}/",$Password))
                        {
                             $counter++;
                        }
        
                       else
                        {
                             echo "<div class='alert alert-warning alert-dismissable fade in'>
                                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                    <strong>Invalid Password!</strong> Password must begin with uppercase letter followed by a number then any two character or digits(must not be more the 8 digits in total)
                                    </div>";
                        }

                    if(!filter_var($Email, FILTER_VALIDATE_EMAIL) === false)
                        {						
                            $counter++;
                        }

                        else 
                        {
                            echo "<div class='alert alert-warning alert-dismissable fade in'>
                                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                  <strong>Error!</strong> Invalid Email.
                                  </div>";
                        }

                        if($Password==$CPassword)
                        {
                            $counter++;
                        }

                        else
                        {
                            echo "<div class='alert alert-warning alert-dismissable fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Error!</strong> Passwords do not match.
                            </div>";
                        }


                     if($counter==3)
                    {
                        $sqlC ="INSERT INTO `customers`(`FirstName`,`LastName`,`Gender`,`PhoneNumber`, `Email`,`Parish`,`Address`, `Password`) VALUES ('$FirstName','$LastName','$Gender','$PhoneNumber','$Email','$Parish','$Address',md5('$Password'))";
                         
                        echo   "<div class='alert alert-success alert-dismissable fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Success!</strong> Your account has been succesfully created.
                            </div>";
                

                         if(!mysqli_query($Connection,$sqlC))
                        {
                            echo "<div class='alert alert-warning alert-dismissable fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Error!</strong> Error creating Account.
                            </div>";
                        }  
                         
                    }


          }

?>