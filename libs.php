<?php
    $servername = "oromart.kesug.com";  // or use the IP address directly
    $username = "if0_36641246";
    $password = "EVDoqMblwl9aQJu";  
    $database = "if0_36641246_oromart";     
    $port = "3306";    
    
    $conn = new mysqli($servername, $username, $password, $database, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    //echo "Connected successfully";

    // Close the connection when done
    //$conn->close();
?>