<?php

    //live server
    //$Connection = mysqli_connect("198.71.225.55:3306", "20141088","Hdg9j6*7", "ia20141088");

    //local server
    $Connection = mysqli_connect("localhost", "root","", "airflair");

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    else
    {
        $sql = "CREATE DATABASE IF NOT EXISTS airflair";
        mysqli_query($Connection,$sql);
        
        //mysqli_select_db($Connection,"ia20141088");
        mysqli_select_db($Connection,"Airflair");
    }
?>