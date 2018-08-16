  <?php 
                              
    include("db.php");


/*--------------------------------------------------------------------------------------Delete Users----------------------------------------------------------------------------------------------------------------------------*/


    if(isset($_POST["delete"]))
 {
	$CustomerID= mysqli_real_escape_string($Connection, $_POST['CustomerID']);
        
	$sql="DELETE FROM customers WHERE CustomerID ='$CustomerID'";
        
    if(mysqli_query($Connection, $sql))
    {
        echo   "<div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Success!</strong> Account has been succesfully deleted.
                </div>";

    }
    else
    {
        echo "<div class='alert alert-warning alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Error!</strong> Error deleting account.
                </div>";

    }
	 
	 
 }



  /*----------------------------------------------------------------------------------------View Users--------------------------------------------------------------------------------------------------------------------------*/


    if(isset($_POST["users"]))
    {
       $sql = "SELECT * FROM customers";
       $result = mysqli_query($Connection, $sql);

       if (mysqli_num_rows($result) > 0)
       {
           //creates table and headings
            echo "<div class='alert alert-info alert-dismissable fade in'>
                    <a href='#' class='close' data-dismiss='alert' araia-label='close'>&times;</a>";
                    
            echo "<div class='table-responsive'>          
                  <table class='table table-bordered table table-hover'>
                    <thead>
                      <tr>
                        <th>ID#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Parish</th>
                        <th>Address</th>
                      </tr>
                    </thead>
                  <tbody>";

           // output data of each row
          while($row = mysqli_fetch_assoc($result))
           {
              echo "<tr><td>" . $row["CustomerID"]. "</td><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"]. "</td><td>" . $row["Gender"]. "</td><td>" . $row["PhoneNumber"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["Parish"]. "</td><td>" . $row["Address"]. "</td></tr>";
           }
              echo "</tbody>
                      </table>
                      </div>
                    </div>";
         }
         else 
           {
             echo "<div class='alert alert-warning alert-dismissable fade in'>
                   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                   <strong>No users were found!</strong>
                   </div>";
                
           }
     }


  /*----------------------------------------------------------------------------------Register Admin----------------------------------------------------------------------------------------------------------------------------*/

    if(isset($_POST["registerAdmin"]))
    {
     
        $FirstName = mysqli_real_escape_string($Connection, $_POST["FirstName"]);
        $LastName = mysqli_real_escape_string($Connection, $_POST["LastName"]);
        $Gender = mysqli_real_escape_string($Connection, $_POST["Gender"]);
        $PhoneNumber = mysqli_real_escape_string($Connection, $_POST["PhoneNumber"]);
        $Email = mysqli_real_escape_string($Connection, $_POST["Email"]);
        $Password = $_POST['Password'];
		    $CPassword= $_POST['CPassword'];
		
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

        if($counter == 2)
        {
            $sql = "INSERT INTO Admin (FirstName, LastName, Gender, PhoneNumber, Email, Password)
                VALUES ('$FirstName', '$LastName', '$Gender', '$PhoneNumber', '$Email', 'md5($Password'))";
        
                if(mysqli_query($Connection, $sql))
                {
                    echo   "<div class='alert alert-success alert-dismissable fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Success!</strong> Account has been succesfully created.
                            </div>";
                
                }
                else
                {
                    echo "<div class='alert alert-warning alert-dismissable fade in'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Error!</strong> Error creating account.
                            </div>";
                
                }
        }
       
     }

  ?>
  