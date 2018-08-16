<?php
    
    include("db.php");

 /*----------------------------------------------------------------------------------------Add Products-------------------------------------------------------------------------------------------------------------------------*/

    if(isset($_POST["addProducts"]))
    {
        //path to store uploaded image
        $target = "upload/" .basename($_FILES['upload']['name']);
        
        //get all the submitted data from the form
        //$category = mysqli_real_escape_string($Connection, $_POST['Category']);
        $image = mysqli_real_escape_string($Connection, $_FILES['upload']['name']);
        $type = mysqli_real_escape_string($Connection, $_POST['Type']);
        $size = mysqli_real_escape_string($Connection, $_POST['Size']);
        $quantity = mysqli_real_escape_string($Connection, $_POST['Quantity']);
        $color = mysqli_real_escape_string($Connection, $_POST['Color']);
        $price = mysqli_real_escape_string($Connection, $_POST['Price']);
         
        if(isset($_POST["t-shirt"]))
        {
            
        
        $sql = "INSERT INTO tshirts (Type, Image, Size, Quantity, Color, Price)
                Values ('$type', '$image', '$size', '$quantity', '$color', '$price')";
       
        if(mysqli_query($Connection, $sql))
        {
            if(move_uploaded_file($_FILES['upload']['tmp_name'], $target))
            {
                 echo   "<div class='alert alert-success alert-dismissable fade in'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success!</strong> Image has been uploaded.
                         </div>";
                
                 echo   "<div class='alert alert-success alert-dismissable fade in'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success!</strong> Product has been added to T-Shirts table
                         </div>";
                
            }
            else
            {
                echo "<div class='alert alert-warning alert-dismissable fade in'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <strong>Error!</strong> Error uploading image.
                      </div>";
            }
           
 
        }
        else
        {
            echo "<div class='alert alert-warning alert-dismissable fade in'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <strong>Error!</strong> Error adding product to T-Shirts table.
                      </div>";
        }
    
        }
        
        if(isset($_POST["tank"]))
        {
            
        
        $sql = "INSERT INTO tanks (Type, Image, Size, Quantity, Color, Price)
                Values ('$type', '$image', '$size', '$quantity', '$color', '$price')";
       
        if(mysqli_query($Connection, $sql))
        {
            if(move_uploaded_file($_FILES['upload']['tmp_name'], $target))
            {
                 echo   "<div class='alert alert-success alert-dismissable fade in'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success!</strong> Image has been uploaded.
                         </div>";
                
                 echo   "<div class='alert alert-success alert-dismissable fade in'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success!</strong> Product has been added to Tanks table
                         </div>";
                
            }
            else
            {
                echo "<div class='alert alert-warning alert-dismissable fade in'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <strong>Error!</strong> Error uploading image.
                      </div>";
            }
           
 
        }
        else
        {
            echo "<div class='alert alert-warning alert-dismissable fade in'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <strong>Error!</strong> Error adding product to Tanks table.
                      </div>";
        }
    
        }
        
        if(isset($_POST["sweater"]))
        {
            
        
        $sql = "INSERT INTO sweater (Type, Image, Size, Quantity, Color, Price)
                Values ('$type', '$image', '$size', '$quantity', '$color', '$price')";
       
        if(mysqli_query($Connection, $sql))
        {
            if(move_uploaded_file($_FILES['upload']['tmp_name'], $target))
            {
                 echo   "<div class='alert alert-success alert-dismissable fade in'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success!</strong> Image has been uploaded.
                         </div>";
                
                 echo   "<div class='alert alert-success alert-dismissable fade in'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success!</strong> Product has been added to Sweater table
                         </div>";
                
            }
            else
            {
                echo "<div class='alert alert-warning alert-dismissable fade in'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <strong>Error!</strong> Error uploading image.
                      </div>";
            }
           
 
        }
        else
        {
            echo "<div class='alert alert-warning alert-dismissable fade in'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <strong>Error!</strong> Error adding product to Sweater table.
                      </div>";
        }
    
        }
        
        
        
    }



    
    /*----------------------------------------------------------------------------------------View Products---------------------------------------------------------------------------------------------------------------------*/


    if(isset($_POST["viewProducts"]))
    {
        
      /* $category = mysqli_real_escape_string($Connection, $_POST['Category']);
        
       $categoryID = $category ."ID";*/
       
        if(isset($_POST["T-Shirt"]))
        {
            $sql = "SELECT * FROM tshirts";
            
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
                            <th>Image</th>
                            <th>Type</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Color</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                      <tbody>";

               // output data of each row
              while($row = mysqli_fetch_assoc($result))
               {
                  echo "<tr><td>" . $row["TshirtsID"]. "</td><td>" . "<img src='upload/" . $row["Image"]. "' width='50' height='50'>" . "</td><td>" . $row["Type"]. "</td><td>" . $row["Size"]. "</td><td>" . $row["Quantity"]. "</td><td>" . $row["Color"]. "</td><td>" . $row["Price"]. "</td><tr>";
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
                       <strong>No products were found!</strong>
                       </div>";
                }
        
    
             
            
                
           }
        
        
        if(isset($_POST["Tank"]))
        {
            $sql = "SELECT * FROM tanks";
            
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
                            <th>Image</th>
                            <th>Type</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Color</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                      <tbody>";

               // output data of each row
              while($row = mysqli_fetch_assoc($result))
               {
                  echo "<tr><td>" . $row["TanksID"]. "</td><td>" . "<img src='upload/" . $row["Image"]. "' width='50' height='50'>" . "</td><td>" . $row["Type"]. "</td><td>" . $row["Size"]. "</td><td>" . $row["Quantity"]. "</td><td>" . $row["Color"]. "</td><td>" . $row["Price"]. "</td><tr>";
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
                       <strong>No products were found!</strong>
                       </div>";
                }
        
    
             
            
                
           }
        
        
         if(isset($_POST["Sweater"]))
        {
            $sql = "SELECT * FROM sweater";
            
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
                            <th>Image</th>
                            <th>Type</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Color</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                      <tbody>";

               // output data of each row
              while($row = mysqli_fetch_assoc($result))
               {
                  echo "<tr><td>" . $row["SweaterID"]. "</td><td>" . "<img src='upload/" . $row["Image"]. "' width='50' height='50'>" . "</td><td>" . $row["Type"]. "</td><td>" . $row["Size"]. "</td><td>" . $row["Quantity"]. "</td><td>" . $row["Color"]. "</td><td>" . $row["Price"]. "</td><tr>";
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
                       <strong>No products were found!</strong>
                       </div>";
                }
        
    
             
            
                
           }
     }

/*--------------------------------------------------------------------------------------Delete Products-------------------------------------------------------------------------------------------------------------------------*/


    if(isset($_POST["deleteProd"]))
 {
	$ProductID= mysqli_real_escape_string($Connection, $_POST['ProductID']);
    /*$category = mysqli_real_escape_string($Connection, $_POST['Category']);
    
    $categoryID = $category ."ID";
        
	$sql="DELETE FROM $category WHERE $categoryID ='$ProductID'";*/
        
         if(isset($_POST["Tshirt"]))
        {
            $sql = "DELETE FROM tshirts WHERE TshirtsID = $ProductID";
            
           if(mysqli_query($Connection, $sql))
    {
        echo   "<div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Success!</strong> Product has been succesfully deleted.
                </div>";

    }
    else
    {
        echo "<div class='alert alert-warning alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Error!</strong> Error deleting product.
                </div>";

    }
            
                
           }
        
        
        if(isset($_POST["Tanks"]))
        {
                      
           $sql = "DELETE FROM tanks WHERE TanksID = $ProductID";
            
           if(mysqli_query($Connection, $sql))
    {
        echo   "<div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Success!</strong> Product has been succesfully deleted.
                </div>";

    }
    else
    {
        echo "<div class='alert alert-warning alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Error!</strong> Error deleting product.
                </div>";

    }
             
            
                
         }
        
        
         if(isset($_POST["Sweaters"]))
        {
           $sql = "DELETE FROM sweater WHERE SweaterID = $ProductID";
            
           if(mysqli_query($Connection, $sql))
    {
        echo   "<div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Success!</strong> Product has been succesfully deleted.
                </div>";

    }
    else
    {
        echo "<div class='alert alert-warning alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Error!</strong> Error deleting product.
                </div>";

    }
	 
 }

    }
?>